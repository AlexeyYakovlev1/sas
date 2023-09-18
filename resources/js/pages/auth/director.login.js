"use strict";

import Request from "../../classes/Request.js";
import Alert from "../../classes/Alert.js";
import Loader from "../../classes/Loader.js";
import Validation from "../../classes/Validation.js";
import Utils from "../../classes/Utils.js";

import Cookies from "js-cookie";
import validator from "validator";

const request = new Request();
const alert = new Alert();
const loader = new Loader();
const validation = new Validation(".input__primary");
const utils = new Utils();

const contentForm = document.querySelector(".content__form");
const inputPrimary = document.querySelectorAll(".input__primary");
const btnPrimarySubmit = document.querySelector(".btn__primary[type='submit']");

let done = false;

// Валидация
inputPrimary.forEach((input) => {
	input.addEventListener("input", () => {
		const valid = validation.init([
			{
				valid: !validator.isEmpty(
					document.querySelector(".input__primary[name='username']").value,
					{ ignore_whitespace: false }
				),
				message: "Логин обязателен для заполнения",
				name: "username"
			},
			{
				valid: !validator.isEmpty(
					document.querySelector(".input__primary[name='password']").value,
					{ ignore_whitespace: false }
				),
				message: "Пароль обязателен для заполнения",
				name: "password"
			}
		]);

		if (!valid) btnPrimarySubmit.setAttribute("disabled", "true");
		else btnPrimarySubmit.removeAttribute("disabled");

		done = !Boolean(btnPrimarySubmit.getAttribute("disabled"));
	});
});

// Отправка данных
contentForm.addEventListener("submit", (event) => {
	event.preventDefault();

	if (!done) return;

	loader.show();

	// Получение данных
	const data = utils.getDataFromForm(".content__form .input__primary");
	const params = {
		headers: {
			"Content-Type": "application/json"
		},
		data: JSON.stringify(data)
	};

	// Запрос
	request.post(`/auth/login`, params)
		.then((dataFromServer) => {
			// Обработка данных
			const { token, data } = dataFromServer["0"];

			if (dataFromServer["1"] && error !== null) {
				alert.show(false, error);
				loader.close();
				return;
			}

			if (data.info[0].status !== "Руководитель") {
				alert.show(false, "Вы не являетесь руководителем");
				loader.close();
				return;
			}

			Cookies.set("token", token, data.info[0].dateExpired);
			Cookies.set("role", data.info[0].status);

			loader.close();

			window.location.href = "/home/employees";
		})
		.catch((error) => {
			loader.close();
			alert.show(false, error.message || "Ошибка при выполнении запроса");
			throw new Error(error);
		});
});