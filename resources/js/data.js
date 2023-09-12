"use strict";

// General
const general = {
	HOST: "http://127.0.0.1:8000",
	CSRF: document.querySelector("meta[name=csrf-token]").content
};
// General end

export {
	general
};