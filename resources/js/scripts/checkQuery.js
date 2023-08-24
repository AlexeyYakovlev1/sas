"use strict";

function checkQuery(query) {
	const urlParams = new URLSearchParams(window.location.search);
	const q = urlParams.get(query);

	if (q) document.body.style.overflow = "hidden";
}

export default checkQuery;