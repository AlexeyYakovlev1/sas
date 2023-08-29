import Request from "../../classes/Request";
import Loader from "../../classes/Loader";
import Alert from "../../classes/Alert";
import Validate from "../../classes/Validate";
import Utils from "../../classes/Utils";

import validator from "validator";
import { validation } from "../../data.js";

const {
	MAX_LENGTH_FULLNAME,
	MIN_LENGTH_FULLNAME,

	MAX_LENGTH_DIVISION,
	MIN_LENGTH_DIVISION,

	MIN_LENGTH_INPUT_LIST

} = validation;

const request = new Request();
const loader = new Loader();
const alert = new Alert();
const utils = new Utils();

const validate = new Validate(".input__primary");

const inputPrimary = document.querySelectorAll(".input__primary");
const studentListForm = document.querySelector(".studentList__form");
const studentListSubmit = document.querySelector(".studentList__submit");

inputPrimary.forEach((input) => {
	input.addEventListener("input", (event) => {
		// Валидация данных
		const valid = validate.init([
			{
				valid: validator.isDate(document.querySelector(".input__primary[name=date]").value),
				message: "Введите корректную дату",
				name: "date"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=fullName]").value, { min: MIN_LENGTH_FULLNAME, max: MAX_LENGTH_FULLNAME }
				),
				message: `Минимальная длина имени ${MIN_LENGTH_FULLNAME}, максимальная ${MAX_LENGTH_FULLNAME}`,
				name: "fullName"
			},
			{
				valid: validator.isLength(
					document.querySelector(".input__primary[name=division]").value, { min: MIN_LENGTH_DIVISION, max: MAX_LENGTH_DIVISION }
				),
				message: `Минимальная длина структурного подразделения ${MIN_LENGTH_DIVISION}, максимальная ${MAX_LENGTH_DIVISION}`,
				name: "division"
			},
			{
				valid: validator.isNumeric(document.querySelector(".input__primary[name=course]").value) && +document.querySelector(".input__primary[name=course]").value === Math.abs(document.querySelector(".input__primary[name=course]").value),
				message: `Курс не может быть отрицательным`,
				name: "course"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=achivments]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "achivments"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=notPlans]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "notPlans"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=skillsOld]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "skillsOld"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=skillsFeature]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "skillsFeature"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=mentor]").value, { min: MIN_LENGTH_FULLNAME, max: MAX_LENGTH_FULLNAME }),
				message: `Минимальная длина для наставника ${MIN_LENGTH_FULLNAME}, максимальная ${MAX_LENGTH_FULLNAME}`,
				name: "mentor"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=skillsFromMentor]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "skillsFromMentor"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=leader]").value, { min: MIN_LENGTH_FULLNAME, max: MAX_LENGTH_FULLNAME }),
				message: `Минимальная длина для лидера ${MIN_LENGTH_FULLNAME}, максимальная ${MAX_LENGTH_FULLNAME}`,
				name: "leader"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=excess]").value, { min: MIN_LENGTH_FULLNAME, max: MAX_LENGTH_FULLNAME }),
				message: `Минимальная длина для случайного попутчика ${MIN_LENGTH_FULLNAME}, максимальная ${MAX_LENGTH_FULLNAME}`,
				name: "excess"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=employeesWithSkills]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "employeesWithSkills"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=employeesLeader]").value, { min: MIN_LENGTH_FULLNAME, max: MAX_LENGTH_FULLNAME }),
				message: `Минимальная длина для лидера-сотрудника ${MIN_LENGTH_FULLNAME}, максимальная ${MAX_LENGTH_FULLNAME}`,
				name: "employeesLeader"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=careerProspects]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "careerProspects"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=improvementsToImproveEfficiency]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "improvementsToImproveEfficiency"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=servicesToClients]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "servicesToClients"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=businessDirections]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "businessDirections"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=improvementsInTheTrainingSystem]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "improvementsInTheTrainingSystem"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=effectiveDirections]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "effectiveDirections"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=directionsForDevelopment]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "directionsForDevelopment"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=benefitsAndResults]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "benefitsAndResults"
			},
			{
				valid: validator.isLength(document.querySelector(".input__primary[name=corporateDevelopment]").value, { min: MIN_LENGTH_INPUT_LIST }),
				message: `Минимальная длина для ввода ${MIN_LENGTH_INPUT_LIST}`,
				name: "corporateDevelopment"
			}
		]);

		// Добавляем/убираем атрибут disabled для submit формы
		if (!valid) studentListSubmit.setAttribute("disabled", true);
		else studentListSubmit.removeAttribute("disabled");
	});
});

// Работа с формой
studentListForm.addEventListener("submit", (event) => {
	event.preventDefault();

	const data = utils.getDataFromForm(".input__primary");

	console.log(data);
});