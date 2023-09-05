const menuMobileBtn = document.querySelector(".menu-mobile__btn");
const homeSections = document.querySelector(".home__sections");

homeSections.addEventListener("click", (event) => event.stopPropagation());

menuMobileBtn.addEventListener("click", (event) => {
	event.stopPropagation();

	homeSections.classList.toggle("show");
	menuMobileBtn.classList.toggle("hidden");
});

window.addEventListener("click", () => {
	homeSections.classList.remove("show");
	menuMobileBtn.classList.remove("hidden");
});