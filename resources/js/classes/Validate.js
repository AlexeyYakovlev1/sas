"use strict";

class Validate {
	constructor(inputSelector) {
		this.rules = []; // [{ rule: validator.<method>, message: <message>, name: <name> }]
		this.inputSelector = inputSelector;
	}

	_isValid() {
		return !this.rules.some((rule) => !rule.valid);
	}

	init(rules) {
		this.rules = rules;

		document.querySelectorAll(this.inputSelector).forEach((item) => item.classList.remove("error"));

		if (!this._isValid()) {
			const { name } = this.rules.find((rule) => !rule.valid);

			document.querySelector(`${this.inputSelector}[name=${name}]`).classList.add("error");

			return false;
		}

		return true;
	}
}

export default Validate;