"use strict";

const meetingAddBtn = document.querySelector('.card__content-meetingResult-addBtn');
const meetingDelBtn = document.querySelector('.card__content-meetingResult-delBtn')
const meetingTable = {obj: document.querySelector('.card__content-meetingResult-sheet'), count: 0};

meetingAddBtn.addEventListener('click', () => {
	createLine(meetingTable.obj);
	meetingTable.count++;
});
meetingDelBtn.addEventListener('click', () => {
	try {
		deleteLine(meetingTable.obj);
		meetingTable.count--;
	} catch (error) {
		alert("Вы удалили все строчки");
	}
})

function createLine(sheet) {
	const line = document.createElement('tr');

	for (let i = 0; i < 3; i++) {
		const column = document.createElement('td');
		const input = document.createElement('input');

		input.type = 'text';
		input.contentEditable = true;
		input.name = 'meetingResult';

		column.appendChild(input);
		line.appendChild(column);
	}

	sheet.lastElementChild.appendChild(line);
}

function deleteLine(sheet){
	sheet.lastElementChild.lastElementChild.remove();
}
