"use strict";

const menuMobileBtn = document.querySelector(".menu-mobile__btn");
const homeSections = document.querySelector(".home__sections");

homeSections.addEventListener("click", (event) => event.stopPropagation());

// Закрытие/открытие при нажатии на кнопку
menuMobileBtn.addEventListener("click", (event) => {
	event.stopPropagation();

	homeSections.classList.toggle("show");
	menuMobileBtn.classList.toggle("hidden");
});

// Закрытие при нажатии область вне меню
window.addEventListener("click", () => {
	homeSections.classList.remove("show");
	menuMobileBtn.classList.remove("hidden");
});

// Закрытие при нажатии на Esc
window.addEventListener("keydown", (event) => {
	if (
		homeSections.classList.contains("show") &&
		event.code === "Escape"
	) {
		homeSections.classList.remove("show");
		menuMobileBtn.classList.remove("hidden");
	}
});