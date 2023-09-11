"use strict";

const studentsListLi = document.querySelectorAll(".students__list li");

studentsListLi.forEach((item) => {
	item.addEventListener("dblclick", () => {
		const link = `/home/students/${item.dataset.studentId}/main`;

		window.location.href = link;
	});
});