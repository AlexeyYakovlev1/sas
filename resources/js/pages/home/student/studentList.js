"use strict";

import Utils from "../../../classes/Utils.js";

const utils = new Utils();

const course = document.querySelectorAll(".course");

// Активный курс
course.forEach((item) => {
	item.addEventListener("click", () => {
		utils.removeClass(course, "active");
		utils.addClass(item, "active");
	});
});