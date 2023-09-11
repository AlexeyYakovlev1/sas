"use strict";

const employeesListLi = document.querySelectorAll(".employees__list li");

employeesListLi.forEach((item) => {
	item.addEventListener("dblclick", () => {
		const link = `/home/employees/${item.dataset.employeeId}/description_from_director`;

		window.location.href = link;
	});
});