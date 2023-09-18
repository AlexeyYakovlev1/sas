"use strict";

import Cookies from "js-cookie";

const logout = document.querySelector("#logout");

if (logout) {
	logout.addEventListener("click", () => {
		Cookies.remove("token");
		Cookies.remove("role");
		window.location.href = "/auth/login/main";
	});
} 