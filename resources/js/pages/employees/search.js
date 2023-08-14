"use strict";

function search() {
	const input = document.querySelector('.employees__search')
	let filter = input.value.toLowerCase().replaceAll(' ', '');
	const students = document.querySelectorAll('.empoyees__name')
	students.forEach(student => {
		let [firstName, lastName, patronymic] = student.textContent.split(' ')
		let fullName = `${firstName}${lastName}${patronymic}`.toLowerCase()
		if (fullName.indexOf(filter) > -1) {
			student.parentNode.style.display = ''
		} else {
			student.parentNode.style.display = 'none'
		}
	});
}

document.addEventListener('input', search)
