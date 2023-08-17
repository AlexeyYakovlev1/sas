"use strict";

const input = document.querySelector('.students__search');

function search() {
	if (input.value.length < 3) return;

	const filter = input.value.toLowerCase().replaceAll(' ', '');
	const students = document.querySelectorAll('.students__name');
	students.forEach(student => {
		const [firstName, lastName, patronymic] = student.textContent.split(' ');
		const fullName = `${firstName}${lastName}${patronymic}`.toLowerCase();

		if (fullName.indexOf(filter) !== -1) student.parentNode.style.display = '';
		else student.parentNode.style.display = 'none';
	});

	if (input.value.length === 0){ students.forEach(student => {
		student.parentNode.style.display = '';
		});
	}
}

input.addEventListener('change', search);
