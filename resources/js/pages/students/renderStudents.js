import Request from "../../classes/Request";
import Alert from "../../classes/Alert";
import Loader from "../../classes/Loader";
import { openCard, getCardData } from "./modal";
import Utils from "../../classes/Utils";

const request = new Request();
const alert = new Alert();
const loader = new Loader();
const utils = new Utils();

utils.checkQuery("student_id");

window.addEventListener("DOMContentLoaded", () => {
	const studentsListItem = document.querySelectorAll(".students__list li");
	const studentsModal = document.querySelector("#student-modal");

	if (!studentsModal.classList.contains("hidden")) getCardData();

	openCard(studentsListItem, studentsModal);
});

function renderModalContent(data) {
	const contentName = data.data.description.toLowerCase();
	const contentParent = document.querySelector(`.card__section#${contentName}`);

	if (!contentParent) return;

	contentParent.classList.remove("hidden");

	// Тут будет рендер информации
	// contentParent.innerHTML = `
	// 	<p>${data.data.description}</p>
	// `;

	alert.show(true, `Рендер информации с сервера о студенте ${data.student.id}`);
}

export { renderModalContent };