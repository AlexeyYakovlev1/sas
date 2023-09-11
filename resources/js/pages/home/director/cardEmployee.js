"use strict";

import openCard from "../../../scripts/openCard.js";

const employeesListLi = document.querySelectorAll(".employees__list li");

openCard(
	employeesListLi,
	"employees",
	"employeeId",
	"description_from_director"
);