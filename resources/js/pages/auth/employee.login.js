"use strict";

import Request from "../../classes/Request.js";
import Alert from "../../classes/Alert.js";
import Loader from "../../classes/Loader.js";
import Cookies from "js-cookie";
import { general } from "../../data.js";

const { REALM, CLIENT_ID, CLIENT_SECRET } = general;

const request = new Request();
const alert = new Alert();
const loader = new Loader();

const contentForm = document.querySelector(".content__form");

contentForm.addEventListener("submit", (event) => {
	event.preventDefault();

	loader.show();

	const fd = new FormData(contentForm);
	const additionalData = {
		"client_id": CLIENT_ID,
		"grant_type": "password",
		"client_secret": CLIENT_SECRET
	};

	for (const property in additionalData) {
		const val = additionalData[property];

		fd.append(property, val);
	}

	const params = {
		headers: {
			"Content-Type": "application/x-www-form-urlencoded"
		},
		body: fd
	};

	request.post(`/auth/realms/${REALM}/protocol/openid-connect/token`, params)
		.then((data) => {
			const {
				message, access_token, refresh_token,
				expires_in, refresh_token_expires_in,
				error, error_description
			} = data;

			if (message !== undefined || error !== undefined) {
				alert.show(false, message || error_description);
				loader.close();
				return;
			}

			Cookies.set("access_token", access_token, expires_in);
			Cookies.set("refresh_token", refresh_token, refresh_token_expires_in);

			loader.close();

			window.location.href = "/home/general_information";
		})
		.catch((error) => {
			loader.close();
			alert.show(false, error.message || "Ошибка при выполнении запроса");
			throw new Error(error);
		});
});