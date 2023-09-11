"use strict";

/**
 * Открыть страницу для определенного пользователя
 * @param {NodeList} items Список HTML элементов
 * @param {string} users students или employees
 * @param {string} idName Название id из dataset для элементов
 * @param {string} point Раздел страницы
 */
function openCard(items, users, idName, point) {
	items.forEach((item) => {
		item.addEventListener("dblclick", () => {
			const link = `/home/${users}/${item.dataset[idName]}/${point}`;

			window.location.href = link;
		});
	});
}

export default openCard;