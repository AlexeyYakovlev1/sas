"use strict";

const studentsCardBtns = document.querySelectorAll(".students__card-btn");
const cardSections = document.querySelectorAll(".card__section");

studentsCardBtns.forEach((btn, idx) => {
	btn.addEventListener("click", () => {
		studentsCardBtns.forEach((item) => item.classList.remove("active"));
		cardSections.forEach((section) => section.classList.add("hidden"));

		cardSections[idx].classList.remove("hidden");
		btn.classList.add("active");
	});
});