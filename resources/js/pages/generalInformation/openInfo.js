const informationListHeader = document.querySelectorAll(".information__list-header");
const informationListContent = document.querySelectorAll(".information__list-content");
const informationListArrow = document.querySelectorAll(".information__list-arrow");

informationListHeader.forEach((header, idx) => {
	header.addEventListener("click", () => {
		informationListContent[idx].classList.toggle("hidden");
		informationListArrow[idx].classList.toggle("rotate");
	})
})