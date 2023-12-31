"use strict";

const loginCharacters = document.querySelectorAll(".login__character");
const loginForm = document.querySelector(".login__form");

loginCharacters.forEach((character) => {
	character.addEventListener("click", () => {
		loginCharacters.forEach((c) => c.classList.remove("btn-active"));
		character.classList.add("btn-active");
		loginForm.reset();
	});
});