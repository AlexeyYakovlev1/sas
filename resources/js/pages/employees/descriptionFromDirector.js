"use strict";

import Validate from "../../classes/Validate";

import validator from "validator";
import { validation } from "../../data";

const validate = new Validate(".input__primary");
const {
	MIN_LENGTH_FULLNAME,
	MAX_LENGTH_FULLNAME,

	MIN_LENGTH_INPUT_LIST
} = validation;

const inputs = document.querySelectorAll(".input__primary");
const descriptionFromDirectorSubmit = document.querySelector("#description-from-director-submit");
const directorForm = document.querySelector("#directorForm");

// Валидация
inputs.forEach((input) => {
	input.addEventListener("input", () => {
		const valid = validate.init([
			{
				valid: validator.isDate(document.querySelector(".input__primary[name=dateOfWrite]").value),
				message: "Введите корректную дату",
				name: "dateOfWrite"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=fullNameStudent]").value,
					{ min: MIN_LENGTH_FULLNAME, max: MAX_LENGTH_FULLNAME }
				),
				message: `Минимальная длина ФИО студента ${MIN_LENGTH_FULLNAME}, максимальная ${MAX_LENGTH_FULLNAME}`,
				name: "fullNameStudent"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=post]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "post"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=periodOfWork]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "periodOfWork"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=achivmentsForWork]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "achivmentsForWork"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=strongSides]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "strongSides"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=commentsOnWork]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "commentsOnWork"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=personalQualities]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "personalQualities"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=developmentSides]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "developmentSides"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=developCompetencies]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "developCompetencies"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=careerProspects]").value,
					{ min: MIN_LENGTH_INPUT_LIST }
				),
				message: `Минимальная для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "careerProspects"
			}
		]);

		if (!valid) descriptionFromDirectorSubmit.setAttribute("disabled", true);
		else descriptionFromDirectorSubmit.removeAttribute("disabled");
	});
});

directorForm.addEventListener("submit", (event) => {
	event.preventDefault();

	const fd = new FormData(directorForm);

	console.log(fd);
});