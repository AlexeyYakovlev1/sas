"use strict";

const {
	VITE_KEYCLOAK_CLIENT_ID,
	VITE_KEYCLOAK_CLIENT_SECRET
} = import.meta.env;

// General
const general = {
	CSRF: document.querySelector("meta[name=csrf-token]").content,

	HOST: "http://127.0.0.1:8000",
	CLIENT_ID: VITE_KEYCLOAK_CLIENT_ID,
	CLIENT_SECRET: VITE_KEYCLOAK_CLIENT_SECRET
};
// General end

export {
	general
};