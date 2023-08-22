"use strict";

import Loader from "./Loader";
import Alert from "./Alert";

const loader = new Loader();
const alert = new Alert();

class Validate {
	constructor() {
		this.rules = []; // [{ rule: validator.<method>, message: "some string" }]
	}

	_isValid() {
		return !this.rules.some((rule) => !rule.valid);
	}

	init(rules) {
		this.rules = rules;

		alert.close();

		if (!this._isValid()) {
			loader.close();

			const { message } = this.rules.find((rule) => !rule.valid);

			alert.show(false, message);

			return false;
		}

		return true;
	}
}

export default Validate;