import Request from "../../classes/Request";
import Alert from "../../classes/Alert";
import Loader from "../../classes/Loader";
import { openCard, getCardData } from "./modal";
import checkQuery from "../../scripts/checkQuery";

const request = new Request();
const alert = new Alert();
const loader = new Loader();

checkQuery("student_id");

window.addEventListener("DOMContentLoaded", () => {
	const studentsListItem = document.querySelectorAll(".students__list li");
	const studentsModal = document.querySelector("#student-modal");

	if (!studentsModal.classList.contains("hidden")) getCardData();

	openCard(
		studentsListItem,
		studentsModal
	);
});