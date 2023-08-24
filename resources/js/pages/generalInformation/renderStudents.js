"use strict";

import Request from "../../classes/Request";
import Loader from "../../classes/Loader";
import Alert from "../../classes/Alert";
import openInfo from "./openInfo";

const request = new Request();
const loader = new Loader();
const alert = new Alert();

// Получаем данные студентов и рендерим их
window.addEventListener("DOMContentLoaded", () => {
	loader.show();

	const informationList = document.querySelector(".information__list");

	request.get("/api/general_information/get_students", { headers: {} })
		.then((data) => {
			const { success, message, students } = data;

			if (message) alert.show(success, message);
			if (!success) {
				loader.close();
				return;
			}

			students.forEach(({ id, first_name, last_name, patronymic }) => {
				const fullName = `${last_name} ${first_name} ${patronymic}`;

				informationList.innerHTML += `
					<li class="information__list-item">
						<div class="information__list-header" data-open="false" data-id="${id}">
							<span class="information__list-name">${fullName}</span>
							<span class="information__list-arrow">&#x2193;</span>
						</div>
						<div class="information__list-content hidden"></div>
					</li>
				`;
			});

			loader.close();

			const informationListHeader = document.querySelectorAll(".information__list-header");
			const informationListContent = document.querySelectorAll(".information__list-content");
			const informationListArrow = document.querySelectorAll(".information__list-arrow");

			openInfo(
				informationListHeader, informationListContent, informationListArrow
			);
		})
		.catch((error) => {
			alert.show(false, error.message || "Ошибка при получении данных");
			loader.close();
			throw new Error(error);
		});
});