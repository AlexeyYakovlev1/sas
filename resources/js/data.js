const MAX_LENGTH_PASSWORD = 16;
const MIN_LENGTH_PASSWORD = 8;

const MAX_LENGTH_LOGIN = 12;
const MIN_LENGTH_LOGIN = 8;

const HOST = "http://127.0.0.1:8000";
const CSRF = document.querySelector("meta[name=csrf-token]").content;

export {
	MAX_LENGTH_LOGIN,
	MIN_LENGTH_LOGIN,

	MAX_LENGTH_PASSWORD,
	MIN_LENGTH_PASSWORD,

	HOST,
	CSRF
};