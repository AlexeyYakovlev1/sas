import Utils from "../../classes/Utils";
import Alert from "../../classes/Alert";

const utils = new Utils();
const alert = new Alert();

const informationButton = document.querySelector(".information__button");
const informationUpload = document.querySelector(".information__upload");
const informationList = document.querySelector(".information__list");

informationButton.addEventListener("click", () => informationUpload.click());
informationUpload.addEventListener("change", (event) => {
	const files = event.target.files;

	if (!files.length) {
		return;
	}

	Object.keys(files).forEach((idx) => {
		const file = files[idx];

		const reader = new FileReader();
		const obj = { file };

		reader.onload = () => {
			obj["data"] = reader.result;
			renderFilesToList(obj);
		}

		reader.onerror = () => {
			const { error } = reader;
			alert.show(false, error.message || error);
		}

		reader.readAsBinaryString(file);
	});
});

function renderFilesToList(obj) {
	const { file: { name }, size } = obj;

	const type = name.split(".").at(-1).toUpperCase();
	const correctName = name.substring(0, name.indexOf("."));

	const fileHtml = `
		<li class="information__list-item ${type.toLowerCase()}">
			<a href="${utils.getHost()}/" download>
				<span class="information__list-item-type">${type}</span>
				<p class="information__list-item-name">${correctName}</p>
			</a>
		</li>
	`;

	informationList.innerHTML += fileHtml;
}