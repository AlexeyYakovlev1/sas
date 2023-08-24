"use strict";

import Request from "../../classes/Request";
import Alert from "../../classes/Alert";
import Loader from "../../classes/Loader";

const request = new Request();
const alert = new Alert();
const loader = new Loader();

const openInfo = (informationListHeader, informationListContent, informationListArrow) => {
	// При клике на студента получаем данные с сервера, затем рендерим их в поле с контентом
	informationListHeader.forEach((header, idx) => {
		header.addEventListener("click", () => {
			if (header.dataset.open === "false") {
				const { id } = header.dataset;

				loader.show();

				const searchParams = new URLSearchParams({ docs: id });
				const url = `/api/general_information/get_docs?${searchParams}`;

				request.get(url, { headers: {} })
					.then((data) => {
						const { success, message, data: dataFromServer } = data;

						if (message) alert.show(success, message);

						if (success) {
							informationListContent[idx].innerHTML = `
							<table class="iksweb">
								<tbody>
									<tr>
										<td>Паспорт</td>
										<td>
											<input type="file" name="passport" />
										</td>
										<td class="information__list-fileDo">
											<button class="btn__primary">
												<a href="/">Скачать файл</a>
											</button>
											<button class="btn__primary red">
												<a href="/">Удалить файл</a>
											</button>
										</td>
									</tr>
									<tr>
										<td>Трудовой договор</td>
										<td>
											<input type="file" name="passport" />
										</td>
										<td class="information__list-fileDo">
											<button class="btn__primary">
												<a href="/">Скачать файл</a>
											</button>
											<button class="btn__primary red">
												<a href="/">Удалить файл</a>
											</button>
										</td>
									</tr>
									<tr>
										<td>Договор на оказание платных услуг</td>
										<td>
											<input type="file" name="passport" />
										</td>
										<td class="information__list-fileDo">
											<button class="btn__primary">
												<a href="/">Скачать файл</a>
											</button>
											<button class="btn__primary red">
												<a href="/">Удалить файл</a>
											</button>
										</td>
									</tr>
									<tr>
										<td>Ученический договор</td>
										<td>
											<input type="file" name="passport" />
										</td>
										<td class="information__list-fileDo">
											<button class="btn__primary">
												<a href="/">Скачать файл</a>
											</button>
											<button class="btn__primary red">
												<a href="/">Удалить файл</a>
											</button>
										</td>
									</tr>
									<tr>
										<td>Договор СЗ на скидку</td>
										<td><input type="file" name="passport" /></td>
										<td class="information__list-fileDo">
											<button class="btn__primary">
												<a href="/">Скачать файл</a>
											</button>
											<button class="btn__primary red">
												<a href="/">Удалить файл</a>
											</button>
										</td>
									</tr>
								</tbody>
							</table>
						`;

							header.dataset.open = "true";

							informationListContent[idx].classList.remove("hidden");
							informationListArrow[idx].classList.add("rotate");

							loader.close();
						} else {
							loader.close();
							return;
						}
					})
					.catch((error) => {
						alert.show(false, erorr.message || "Ошибка при получении данных");

						loader.close();

						throw new Error(error);
					});
			} else {
				informationListContent[idx].classList.toggle("hidden");
				informationListArrow[idx].classList.toggle("rotate");
			}
		});
	});
};

export default openInfo;