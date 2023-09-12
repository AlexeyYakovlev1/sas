"use strict";

import openCard from "../../../scripts/openCard.js";

const btnFilter = document.querySelector(".btn__filter");
const filter = document.querySelector(".filter");
const filterItemLi = document.querySelectorAll(".filter__item li");
const filterItemStatus = document.querySelectorAll(".filter__item#status span")
const filterItems = document.querySelectorAll(".filter__item");
const viewAllBtn = document.querySelector("#view-all-btn");
const studentInformation = document.querySelector("#student-information");
const studentsList = document.querySelector(".students__list");
const students = document.querySelectorAll(".students__list li");
const studentsSearch = document.querySelector("#students-search");

openCard(
	students,
	"students",
	"studentId",
	"main"
);

btnFilter.addEventListener("click", (event) => {
	event.stopPropagation();

	filter.classList.toggle("hidden");
	btnFilter.classList.toggle("rotate-img");
});

filter.addEventListener("click", (event) => event.stopPropagation());

window.addEventListener("click", () => {
	filter.classList.add("hidden");
	btnFilter.classList.remove("rotate-img");
});

/**
 * Устанавливает активный css класс на html элемент
 * @param {NodeList} list Список html элементов 
 * @param {string} cssCls Активный CSS класс
 */
function setActive(list, cssCls = "active") {
	list.forEach((item) => {
		item.addEventListener("click", () => {
			list.forEach((el) => el.classList.remove(cssCls));

			item.classList.add(cssCls);
		});
	});
}

setActive(filterItemLi, "active");
setActive(filterItemStatus, "active");

/**
 * Проверяет принадлежит ли css класс html элементу
 * @param {HTMLElement} el HTML элемент
 * @param {string} cssCls CSS класс
 * @returns bool
 */
function elIsActive(el, cssCls = "active") { return el.classList.contains(cssCls); };

/**
 * Инициализация объекта с данными из фильтра
 * @returns Object
 */
function initData() {
	const obj = {};
	const allowedNames = ["SELECT", "INPUT", "SPAN", "LI"];

	filterItems.forEach((item) => {
		item.childNodes.forEach((child) => {
			if (allowedNames.includes(child.nodeName)) {
				let property = child.getAttribute("name");
				let value = child.value;

				if (!child.getAttribute("name") && elIsActive(child)) {
					property = child.dataset.name;
					value = child.dataset.id;
				}

				if (value === "on") value = child.checked;
				if (!property) return;

				obj[property] = value;
			}
		});
	});

	return obj;
}

const dataFromFilter = initData();

filterItems.forEach((item) => {
	const allowedNamesForChange = ["SELECT", "INPUT"];

	item.childNodes.forEach((child) => {
		if (allowedNamesForChange.includes(child.nodeName)) {
			child.addEventListener("change", () => {
				dataFromFilter[child.getAttribute("name")] = child.value;
				viewAllBtn.classList.remove("hidden");
			});
		} else {
			child.addEventListener("click", () => {
				dataFromFilter[child.dataset.name] = child.dataset.id;
				viewAllBtn.classList.remove("hidden");
			});
		}
	});
});

viewAllBtn.addEventListener("click", () => {
	fetchDataFilter(dataFromFilter);
	viewAllBtn.classList.add("hidden");
});

/**
 * Отправка данных из фильтра на сервер и обработка ответа от него
 * @param {Object} data данные из фильтра
 */
function fetchDataFilter(data) {
	studentInformation.classList.add("hidden");
	studentsList.classList.remove("hidden");
	studentsSearch.value = "";

	// Работа с сервером...
	studentsList.innerHTML = `
		<li data-student-id="1">Аксенова Варвара Вадимовна</li>
		<li data-student-id="2">Алексеева Алиса Артёмовна</li>
		<li data-student-id="3">Беликов Максим Степанович</li>
		<li data-student-id="4">Березин Иван Александрович</li>
		<li data-student-id="5">Бирюков Егор Александрович</li>
		<li data-student-id="6">Волкова Полина Семёновна</li>
		<li data-student-id="7">Греков Даниил Максимович</li>
		<li data-student-id="8">Дегтярева Полина Максимовна</li>
		<li data-student-id="9">Ермилова Милана Мироновна</li>
		<li data-student-id="10">Жданова Ева Романовна</li>
		<li data-student-id="11">Захаров Андрей Георгиевич</li>
		<li data-student-id="12">Иванова Елизавета Руслановна</li>
		<li data-student-id="13">Карпов Сергей Павлович</li>
		<li data-student-id="14">Лебедев Егор Николаевич</li>
	`;

	openCard(
		document.querySelectorAll(".students__list li"),
		"students",
		"studentId",
		"main"
	);

	console.log(data);
}