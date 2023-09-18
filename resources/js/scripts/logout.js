"use strict";

import Cookies from "js-cookie";

const logout = document.querySelector("#logout");

if (logout) {
	logout.addEventListener("click", () => {
		Cookies.remove("token");
		Cookies.remove("jwt_token");

		window.location.href = "/auth/login/main";
	});
} 