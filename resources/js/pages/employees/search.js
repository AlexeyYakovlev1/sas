"use strict";

const input = document.querySelector('.employees__search');

function search() {
	if (input.value.length < 3) return;

	const filter = input.value.toLowerCase().trim();
	const students = document.querySelectorAll('.empoyees__name');

	students.forEach(student => {
		const [firstName, lastName, patronymic] = student.textContent.split(' ');
		const fullName = `${firstName}${lastName}${patronymic}`.toLowerCase();

		if (fullName.indexOf(filter) !== -1) student.parentNode.style.display = '';
		else student.parentNode.style.display = 'none';
	});
}

input.addEventListener('change', search);
