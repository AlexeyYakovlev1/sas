import Request from "../../classes/Request";
import Alert from "../../classes/Alert";
import Loader from "../../classes/Loader";
import { openCard, renderInformation } from "./modal";
import checkQuery from "../../scripts/checkQuery";

const request = new Request();
const alert = new Alert();
const loader = new Loader();

checkQuery("employee_id");

window.addEventListener("DOMContentLoaded", () => {
	const employeesListItems = document.querySelectorAll(".employees__list li");
	const employeeModal = document.querySelector("#employee-modal");

	if (!employeeModal.classList.contains("hidden")) renderInformation();

	openCard(
		employeesListItems,
		employeeModal
	);
});