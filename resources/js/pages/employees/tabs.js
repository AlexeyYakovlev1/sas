const cardHeaderBtn = document.querySelectorAll(".card__header-btn");
const cardContentItem = document.querySelectorAll(".card__content-item");

cardHeaderBtn.forEach((btn, idx) => {
	btn.addEventListener("click", () => {
		cardHeaderBtn.forEach((item) => item.classList.remove("active"));
		cardContentItem.forEach((content) => content.classList.add("hidden"));

		cardContentItem[idx].classList.remove("hidden");
		btn.classList.add("active");
	});
});