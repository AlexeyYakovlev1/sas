"use strict";

class Utils {
	getHost() {
		return "http://127.0.0.1:8000";
	}

	getCsrf() {
		return document.querySelector("meta[name=csrf-token]").content;
	}
}

export default Utils;