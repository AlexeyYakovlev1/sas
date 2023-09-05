"use strict";

// General
const general = {
	HOST: "http://127.0.0.1:8000",
	CSRF: document.querySelector("meta[name=csrf-token]").content,

	DEFAULT_TITLE_OF_STUDENTS: "Студенты",
	DEFAULT_TITLE_OF_EMPLOYEES: "Сотрудники"
};
// General end

// Validation
const validation = {
	MAX_LENGTH_PASSWORD: 16,
	MIN_LENGTH_PASSWORD: 8,

	MAX_LENGTH_LOGIN: 12,
	MIN_LENGTH_LOGIN: 8,

	MAX_LENGTH_FULLNAME: 50,
	MIN_LENGTH_FULLNAME: 10,

	MAX_LENGTH_DIVISION: 20,
	MIN_LENGTH_DIVISION: 2,

	MIN_LENGTH_INPUT_LIST: 10
};
// Validation end

export {
	validation,
	general
};