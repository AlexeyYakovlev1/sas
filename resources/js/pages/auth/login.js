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
const validate = new Validate(".form__input");

const loginForm = document.querySelector(".login__form");
const formInput = document.querySelectorAll(".form__input");
const formSubmit = document.querySelector(".form__submit");
const activeLoginCharacter = document.querySelector(".login__character.btn-active");

// Валидация данных
formInput.forEach((input) => {
	input.addEventListener("input", () => {
		// Правила для каждого поля
		const valid = validate.init([
			{
				valid: !validator.isEmpty(activeLoginCharacter.dataset.person, { ignore_whitespace: false }),
				message: "Роль должна быть выбрана",
				name: "person"
			},
			{
				valid: validator.isLength(document.querySelector(".form__input[name='login']").value, { min: MIN_LENGTH_LOGIN, max: MAX_LENGTH_LOGIN }),
				message: `Минимальная длина логина ${MIN_LENGTH_LOGIN} символов, максимальная ${MAX_LENGTH_LOGIN}`,
				name: "login"
			},
			{
				valid: validator.isLength(document.querySelector(".form__input[name='password']").value, { min: MIN_LENGTH_PASSWORD, max: MAX_LENGTH_PASSWORD }),
				message: `Минимальная длина пароля ${MIN_LENGTH_PASSWORD} символов, максимальная ${MAX_LENGTH_PASSWORD}`,
				name: "password"
			}
		]);

		// Disabled для кнопки submit
		if (!valid) formSubmit.setAttribute("disabled", "true");
		else formSubmit.removeAttribute("disabled");
	});
});

// Работа с формой
loginForm.addEventListener("submit", (event) => {
	event.preventDefault();

	loader.show();
	alert.close();

	const { person } = document.querySelector(".login__character.btn-active").dataset;

	// Конечные данные для отправки (payload)
	const data = { person };

	// Заносим значения инпутов в data
	document.querySelectorAll(".form__item").forEach((formItem) => {
		// Забираем только input-ы
		formItem.childNodes.forEach((child) => {
			if (child.nodeName === "INPUT") data[child.dataset.name] = child.value;
		});
	});

	const params = {
		data: JSON.stringify(data),
		headers: { "Content-Type": "application/json" }
	};

	// Отправляем данные
	request.post("/auth/login", params)
		.then((data) => {
			const { success, person, message } = data;

			if (message) alert.show(success, message);

			loader.close();

			// Редирект для конкретной роли
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