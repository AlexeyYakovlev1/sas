"use strict";

const cardHeaderBtns = document.querySelectorAll(".card__header-btn");
const cardSections = document.querySelectorAll(".card__section");

cardHeaderBtns.forEach((btn, idx) => {
	btn.addEventListener("click", () => {
		cardSections.forEach((section) => section.classList.add("hidden"));
		console.log(idx);
		cardSections[idx].classList.remove("hidden");
	});
});