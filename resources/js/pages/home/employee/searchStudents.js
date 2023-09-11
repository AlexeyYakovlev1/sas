"use strict";

const studentsSearch = document.querySelector("#students-search");
const studentsFindBtn = document.querySelector(".students__find-btn");
const studentInformation = document.querySelector("#student-information");

studentsFindBtn.addEventListener("click", () => {
	if (studentsSearch.value === "") {
		studentInformation.classList.add("hidden");
		return;
	}

	if (studentsSearch.value.length <= 3) return;

	studentInformation.classList.remove("hidden");
	console.log(`Search student by name ${studentsSearch.value}`);
});