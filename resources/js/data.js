"use strict";

// General
const general = {
	HOST: "http://127.0.0.1:8000",
	CSRF: document.querySelector("meta[name=csrf-token]").content,

	DEFAULT_TITLE_OF_STUDENTS: "Студенты",
	DEFAULT_TITLE_OF_EMPLOYEES: "Сотрудники"
};
// General end

export {
	general
};