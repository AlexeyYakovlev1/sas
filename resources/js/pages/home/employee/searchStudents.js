"use strict";

const studentsSearch = document.querySelector("#students-search");
const studentsFindBtn = document.querySelector(".students__find-btn");
const studentInformation = document.querySelector("#student-information");
const studentsList = document.querySelector(".students__list");

function fetchStudentsList() {
	// Получаем студентов с сервера и рендерим их
	studentsList.innerHTML = `
		<li data-student-id="1">Аксенова Варвара Вадимовна</li>
		<li data-student-id="2">Алексеева Алиса Артёмовна</li>
		<li data-student-id="3">Беликов Максим Степанович</li>
		<li data-student-id="4">Березин Иван Александрович</li>
		<li data-student-id="5">Бирюков Егор Александрович</li>
		<li data-student-id="6">Волкова Полина Семёновна</li>
		<li data-student-id="7">Греков Даниил Максимович</li>
		<li data-student-id="8">Дегтярева Полина Максимовна</li>
		<li data-student-id="9">Ермилова Милана Мироновна</li>
		<li data-student-id="10">Жданова Ева Романовна</li>
		<li data-student-id="11">Захаров Андрей Георгиевич</li>
		<li data-student-id="12">Иванова Елизавета Руслановна</li>
		<li data-student-id="13">Карпов Сергей Павлович</li>
		<li data-student-id="14">Лебедев Егор Николаевич</li>
	`;
}

studentsFindBtn.addEventListener("click", () => {
	if (studentsSearch.value === "") {
		studentInformation.classList.add("hidden");
		fetchStudentsList();

		return;
	}

	if (studentsSearch.value.length <= 3) return;

	studentInformation.classList.remove("hidden");
	studentsList.innerHTML = "";

	console.log(`Search student by name ${studentsSearch.value}`);
});