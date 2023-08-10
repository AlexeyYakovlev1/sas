@extends("layouts.home")
@section("title")
	Общая информация
@stop
@section("styles")
	
@stop
@section("content")
	<div class="information">
		<h1 class="information__title">Список необходимых документов</h1>
		<ul class="information__list">
			<li class="information__list-item">
				<div class="information__list-header">
					<span class="information__list-name">Яковлев Алексей Николаевич</span>
					<span class="information__list-arrow">&#x2193;</span>
				</div>
				<div class="information__list-content hidden">
					<table class="iksweb">
						<tbody>
							<tr>
								<td>Паспорт</td>
								<td>
									<input type="file" name="passport" />
								</td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
							<tr>
								<td>Трудовой договор</td>
								<td>
									<input type="file" name="passport" />
								</td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
							<tr>
								<td>Договор на оказание платных услуг</td>
								<td>
									<input type="file" name="passport" />
								</td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
							<tr>
								<td>Ученический договор</td>
								<td>
									<input type="file" name="passport" />
								</td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
							<tr>
								<td>Договор СЗ на скидку</td>
								<td><input type="file" name="passport" /></td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>
			<li class="information__list-item">
				<div class="information__list-header">
					<span class="information__list-name">Смирнов Сергей Викторович</span>
					<span class="information__list-arrow">&#x2193;</span>
				</div>
				<div class="information__list-content hidden">
					<table class="iksweb">
						<tbody>
							<tr>
								<td>Паспорт</td>
								<td>
									<input type="file" name="passport" />
								</td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
							<tr>
								<td>Трудовой договор</td>
								<td>
									<input type="file" name="passport" />
								</td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
							<tr>
								<td>Договор на оказание платных услуг</td>
								<td>
									<input type="file" name="passport" />
								</td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
							<tr>
								<td>Ученический договор</td>
								<td>
									<input type="file" name="passport" />
								</td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
							<tr>
								<td>Договор СЗ на скидку</td>
								<td><input type="file" name="passport" /></td>
								<td>
									<button class="btn__primary">
										<a href="/">Скачать файл</a>
									</button>
									<button class="btn__primary">
										<a href="/">Удалить файл</a>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>
		</ul>
	</div>
@stop
@section("scripts")
	@vite(["resources/js/pages/generalInformation/openInfo.js"])
@stop
