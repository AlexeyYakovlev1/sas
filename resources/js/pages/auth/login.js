"use strict";

import Loader from "../../classes/Loader";
import Request from "../../classes/Request";
import Utils from "../../classes/Utils";
import Alert from "../../classes/Alert";
import validator from "validator";
import Validate from "../../classes/Validate";
import {
	MIN_LENGTH_LOGIN, MIN_LENGTH_PASSWORD,
	MAX_LENGTH_LOGIN, MAX_LENGTH_PASSWORD
} from "../../data";

const loader = new Loader();
const request = new Request();
const utils = new Utils();
const alert = new Alert();
const validate = new Validate();

const loginForm = document.querySelector(".login__form");

loginForm.addEventListener("submit", (event) => {
	event.preventDefault();

	loader.show();
	alert.close();

	const activeLoginCharacter = document.querySelector(".login__character.btn-active");
	const { person } = activeLoginCharacter.dataset;
	const data = { person };

	// Заносим значения инпутов в data
	document.querySelectorAll(".form__item").forEach((formItem) => {
		formItem.childNodes.forEach((child) => {
			if (child.nodeName === "INPUT") data[child.dataset.name] = child.value;
		});
	});

	// Валидация данных
	const valid = validate.init([
		{
			valid: !validator.isEmpty(data.person, { ignore_whitespace: false }),
			message: "Роль должна быть выбрана"
		},
		{
			valid: validator.isLength(data.login, { min: MIN_LENGTH_LOGIN, max: MAX_LENGTH_LOGIN }),
			message: `Минимальная длина логина ${MIN_LENGTH_LOGIN} символов, максимальная ${MAX_LENGTH_LOGIN}`
		},
		{
			valid: validator.isLength(data.password, { min: MIN_LENGTH_PASSWORD, max: MAX_LENGTH_PASSWORD }),
			message: `Минимальная длина пароля ${MIN_LENGTH_PASSWORD} символов, максимальная ${MAX_LENGTH_PASSWORD}`
		}
	]);

	if (!valid) return;

	// Отправляем данные
	request.post("/auth/login", { data: JSON.stringify(data), headers: { "Content-Type": "application/json" } })
		.then((data) => {
			const { success, person, message } = data;

			if (message) alert.show(success, message);

			loader.close();

			switch (person) {
				case "student":
					window.location.href = `${utils.getHost()}/home/students/list`;
					break;
				case "director":
					window.location.href = `${utils.getHost()}/home/employees`;
					break;
				case "employee":
					window.location.href = `${utils.getHost()}/home/general_information`;
					break;
			}
		})
		.catch((error) => {
			loader.close();
			alert.show(false, error.message || "Ошибка сервера");
		});
});