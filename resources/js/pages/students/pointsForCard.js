"use strict";

import Tabs from "../../classes/Tabs.js";

window.addEventListener("DOMContentLoaded", () => new Tabs(".students__card-btn", ".card__section").openCard());

new Tabs(".students__card-btn", ".card__section").clickButtons("active", (link, contents) => {
	const currentPoint = link.split("#").at(-1);
	const currentContent = [...contents].find((content) => content.getAttribute("id") === currentPoint);

	currentContent.classList.remove("hidden");
});