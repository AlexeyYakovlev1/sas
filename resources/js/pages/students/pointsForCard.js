"use strict";

import Tabs from "../../classes/Tabs.js";

window.addEventListener("DOMContentLoaded", () => new Tabs(".students__card-btn", ".card__section").openCard());

const getData = (link, contents) => {
	const currentPoint = link.split("#").at(-1);
	const currentContent = [...contents].find((content) => content.getAttribute("id") === currentPoint);

	currentContent.classList.remove("hidden");
};

new Tabs(".students__card-btn", ".card__section").clickButtons("active", (link, contents) => {
	getData(link, contents);
});