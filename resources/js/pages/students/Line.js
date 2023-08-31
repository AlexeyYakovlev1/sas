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
			<input type="text">
		</td>
		<td>
			<textarea name="" id="" cols="30" rows="10"></textarea>
		</td>
	</tr>
`;

tableForSportAchivments.add(htmlRowSport, identClsSport);
tableForSportAchivments.remove(identClsSport);

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
			<input type="text">
		</td>
		<td>
			<textarea name="" id="" cols="30" rows="10"></textarea>
		</td>
	</tr>
`;

tableForCreativeSkills.add(htmlRowCreative, identClsCreative);
tableForCreativeSkills.remove(identClsCreative);

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
			<input type="text">
		</td>
		<td>
			<textarea name="" id="" cols="30" rows="10"></textarea>
		</td>
	</tr>
`;

tableForcardAchivmentsCompany.add(htmlRowCompany, identClsCompany);
tableForcardAchivmentsCompany.remove(identClsCompany);

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
			<input type="text">
		</td>
		<td>
			<textarea name="" id="" cols="30" rows="10"></textarea>
		</td>
	</tr>
`;

tableForcardVolunteering.add(htmlRowVolunteering, identClsVolunteering);
tableForcardVolunteering.remove(identClsVolunteering);