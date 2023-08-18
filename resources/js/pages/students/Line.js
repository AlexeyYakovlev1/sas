"use strict";

import Alert from "../../classes/Alert";

const alert = new Alert();

const achivAddBtn = document.querySelector('.card__mode-achivments-addBtn');
const achivDelBtn = document.querySelector('.card__mode-achivments-delBtn')
const achivTable = { obj: document.querySelector('.card__mode-achivments-sheet'), count: 1 };
const abilitiesAddBtn = document.querySelector('.card__mode-abilities-addBtn');
const abilitiesDelBtn = document.querySelector('.card__mode-abilities-delBtn');
const abilitiesTable = { obj: document.querySelector('.card__mode-abilities-sheet'), count: 1 };
const compAchivAddBtn = document.querySelector('.card__achivments-company-addBtn');
const compAchivDelBtn = document.querySelector('.card__achivments-company-delBtn');
const compAchivTable = { obj: document.querySelector('.card__achivments-company-sheet'), count: 1 };
const volunAddBtn = document.querySelector('.card__volunteering-company-addBtn');
const volunDelBtn = document.querySelector('.card__volunteering-company-delBtn');
const volunTable = { obj: document.querySelector('.card__volunteering-company-sheet'), count: 1 };

achivAddBtn.addEventListener('click', () => {
	createLine(achivTable.obj);
	achivTable.count++;
});
achivDelBtn.addEventListener('click', () => {
	try {
		deleteLine(achivTable.obj);
		achivTable.count--;
	} catch (error) {
		alert.show(false, 'Вы удалили все строчки');
	}
});
abilitiesAddBtn.addEventListener('click', () => {
	createLine(abilitiesTable.obj)
	abilitiesTable.count++
});
abilitiesDelBtn.addEventListener('click', () => {
	try {
		deleteLine(abilitiesTable.obj);
		abilitiesTable.count--;
	} catch (error) {
		alert.show(false, 'Вы удалили все строчки');
	}

});
compAchivAddBtn.addEventListener('click', () => {
	createLine(compAchivTable.obj);
	compAchivTable.count++;
});
compAchivDelBtn.addEventListener('click', () => {
	try {
		deleteLine(compAchivTable.obj);
		compAchivTable.count--;
	} catch (error) {
		alert.show(false, 'Вы удалили все строчки');
	}
});
volunAddBtn.addEventListener('click', () => {
	createLine(volunTable.obj);
	volunTable.count++;
});
volunDelBtn.addEventListener('click', () => {
	try {
		deleteLine(volunTable.obj);
		volunTable.count--;
	} catch (error) {
		alert.show(false, 'Вы удалили все строчки');
	}
});


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

	sheet.lastElementChild.appendChild(line);
}



function deleteLine(sheet) {
	sheet.lastElementChild.lastElementChild.remove();
}
