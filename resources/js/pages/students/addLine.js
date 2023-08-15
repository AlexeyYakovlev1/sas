"use strict";

const achivBtn = document.querySelector('.card__mode-achivments-btn');
const achivTable = document.querySelector('.card__mode-achivments-sheet');
const abilitiesBtn = document.querySelector('.card__mode-abilities-btn');
const abilitiesTable = document.querySelector('.card__mode-abilities-sheet');
const compAchivBtn = document.querySelector('.card__achivmetns-company-btn');
const compAchivTable = document.querySelector('.card__achivments-company-sheet');
const volunBtn = document.querySelector('.card__volunteering-company-btn');
const volunTable = document.querySelector('.card__volunteering-company-sheet');

achivBtn.addEventListener('click', () => createLine(achivTable));
abilitiesBtn.addEventListener('click', () => createLine(abilitiesTable));
compAchivBtn.addEventListener('click', () => createLine(compAchivTable));
volunBtn.addEventListener('click', () => createLine(volunTable));

function createLine(sheet) {
	const line = document.createElement('tr');
	const column1 = document.createElement('td');
	const column2 = document.createElement('td');
	const input = document.createElement('input');
	const txtArea = document.createElement('textarea');

	input.type = 'text';
	txtArea.cols = '30';
	txtArea.rows = '10';

	column1.appendChild(input);
	column2.appendChild(txtArea);
	line.appendChild(column1);
	line.appendChild(column2);

	sheet.lastChild.previousSibling.appendChild(line);
}
