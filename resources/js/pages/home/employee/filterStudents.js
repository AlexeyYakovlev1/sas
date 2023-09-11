"use strict";

const btnFilter = document.querySelector(".btn__filter");
const filter = document.querySelector(".filter");
const filterItemLi = document.querySelectorAll(".filter__item li");
const filterItemStatus = document.querySelectorAll(".filter__item#status span")
const filterItems = document.querySelectorAll(".filter__item");

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
				fetchDataFilter(dataFromFilter);
			});
		} else {
			child.addEventListener("click", () => {
				dataFromFilter[child.dataset.name] = child.dataset.id;
				fetchDataFilter(dataFromFilter);
			});
		}
	});
});

/**
 * Отправка данных из фильтра на сервер и обработка ответа от него
 * @param {Object} data данные из фильтра
 */
function fetchDataFilter(data) {
	console.log(data);
}