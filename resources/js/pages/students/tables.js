"use strict";

import Table from "../../classes/Table";

// Спортивные достижения
const identClsSport = "sport-achivments";
const tableForSportAchivments = new Table(
	".card__mode-achivments-addBtn",
	".card__mode-achivments-delBtn",
	".card__mode-achivments-sheet"
);

const htmlRowSport = `
	<tr class="new-row ${identClsSport}">
		<td>
			<input class="sport-achivments__input name-event" type="text">
		</td>
		<td>
			<textarea
				class="sport-achivments__input result"
				name="sport-achivments"
				cols="30" rows="10"
			></textarea>
		</td>
	</tr>
`;

tableForSportAchivments.add(htmlRowSport, identClsSport);
tableForSportAchivments.remove(identClsSport);

tableForSportAchivments.submitData(
	document.querySelector(".sport-achivments__submit"),
	`/sport_achivments`,
	".sport-achivments__input",
	(data) => {
		console.log(data);
		// Обработка ответа...
	}
);

// Творческие способности
const identClsCreative = "creative-skills";
const tableForCreativeSkills = new Table(
	".card__mode-abilities-addBtn",
	".card__mode-abilities-delBtn",
	".card__mode-abilities-sheet"
);

const htmlRowCreative = `
	<tr class="new-row ${identClsCreative}">
		<td>
			<input class="creative-skills__input skills" type="text">
		</td>
		<td>
			<textarea class="creative-skills__input development" name="" id="" cols="30" rows="10"></textarea>
		</td>
	</tr>
`;

tableForCreativeSkills.add(htmlRowCreative, identClsCreative);
tableForCreativeSkills.remove(identClsCreative);

tableForCreativeSkills.submitData(
	document.querySelector(".creative-skills__submit"),
	`/creative_skills`,
	".creative-skills__input",
	(data) => {
		console.log(data);
		// Обработка ответа...
	}
);

// В рамках корпорации
const identClsCompany = "achivments-company";
const tableForcardAchivmentsCompany = new Table(
	".card__achivments-company-addBtn",
	".card__achivments-company-delBtn",
	".card__achivments-company-sheet"
);

const htmlRowCompany = `
	<tr class="new-row ${identClsCompany}">
		<td>
			<input class="achivments-company__input name" type="text">
		</td>
		<td>
			<textarea class="achivments-company__input description" name="" id="" cols="30" rows="10"></textarea>
		</td>
	</tr>
`;

tableForcardAchivmentsCompany.add(htmlRowCompany, identClsCompany);
tableForcardAchivmentsCompany.remove(identClsCompany);

tableForcardAchivmentsCompany.submitData(
	document.querySelector(".achivments-company__submit"),
	`/achivments_company`,
	".achivments-company__input",
	(data) => {
		console.log(data);
		// Обработка ответа...
	}
);

// Участие во внеучебной деятельности
const identClsVolunteering = "volunteering";
const tableForcardVolunteering = new Table(
	".card__volunteering-company-addBtn",
	".card__volunteering-company-delBtn",
	".card__volunteering-company-sheet"
);

const htmlRowVolunteering = `
	<tr class="new-row ${identClsVolunteering}">
		<td>
			<input class="volunteering__input name" type="text">
		</td>
		<td>
			<textarea class="volunteering__input description" name="" id="" cols="30" rows="10"></textarea>
		</td>
	</tr>
`;

tableForcardVolunteering.add(htmlRowVolunteering, identClsVolunteering);
tableForcardVolunteering.remove(identClsVolunteering);

tableForcardVolunteering.submitData(
	document.querySelector(".volunteering__submit"),
	`/volunteering`,
	".volunteering__input",
	(data) => {
		console.log(data);
		// Обработка ответа...
	}
);