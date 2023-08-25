"use strict";

import Tabs from "../../classes/Tabs.js";

window.addEventListener("DOMContentLoaded", () => new Tabs(".card__header-btn", ".card__content-item").openCard());

new Tabs(".card__header-btn", ".card__content-item").clickButtons("active", (link, contents) => {
	const currentPoint = link.split("#").at(-1);
	const currentContent = [...contents].find((content) => content.getAttribute("id") === currentPoint);

	currentContent.classList.remove("hidden");
});