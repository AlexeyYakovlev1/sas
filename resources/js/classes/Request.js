import Utils from "./Utils";

const utils = new Utils();

class Request {
	constructor() {
		this.host = utils.getHost();
		this.csrf = utils.getCsrf();
	}

	post(url, params) {
		const allHeaders = Object.assign(params.headers || {}, {
			"Content-Type": "application/json",
			"X-Requested-With": "XMLHttpRequest",
			"X-CSRF-TOKEN": this.csrf
		});

		return fetch(`${this.host}${url}`, {
			method: "POST",
			headers: allHeaders,
			body: params.data
		})
			.then((response) => response.json());
	}
}

export default Request;