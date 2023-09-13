"use strict";

const {
	VITE_KEYCLOAK_URL,
	VITE_KEYCLOAK_REALM,
	VITE_KEYCLOAK_CLIENT_ID,
	VITE_KEYCLOAK_CLIENT_SECRET
} = import.meta.env;

// General
const general = {
	CSRF: document.querySelector("meta[name=csrf-token]").content,

	HOST: VITE_KEYCLOAK_URL,
	REALM: VITE_KEYCLOAK_REALM,
	CLIENT_ID: VITE_KEYCLOAK_CLIENT_ID,
	CLIENT_SECRET: VITE_KEYCLOAK_CLIENT_SECRET
};
// General end

export {
	general
};