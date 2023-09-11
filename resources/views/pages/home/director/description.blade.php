@extends("layouts.main")
@section("title")
	Руководитель | Характеристика
@stop
@section("styles")
	@vite([
		"resources/sass/pages/home/descriptionFromDirector.sass"
	])
@stop
@section("content")
<section class="description" id="description">
	<div class="container content">
		<h1 class="title__section">Характеристика от руководителя</h1>
		<form class="description__form">
			<label>
				<span>1.</span>
				<div class="input-info">
					Дата заполнения
					<input
						type="date"
						class="input__primary gray"
						max="9999-12-31"
						name="dateOfWrite"
					>
				</div>
			</label>
			<label>
				<span>2.</span>
				<div class="input-info">
					ФИО студента
					<input
						type="text"
						class="input__primary gray"
						name="fullNameStudent"
						placeholder="Фамилия Имя Отчество"
					>
				</div>
			</label>
			<label>
				<span>3.</span>
				<div class="input-info">
					Структурное подразделение (департамент)
					<input
						type="text"
						class="input__primary gray"
						name="division"
						placeholder="Название департамента"
					>
				</div>
			</label>
			<label>
				<span>4.</span>
				<div class="input-info">
					Занимаемая студентом должность
					<input
						type="text"
						class="input__primary gray"
						name="post"
						placeholder="Должность"
					>
				</div>
			</label>
			<label>
				<span>5.</span>
				<div class="input-info">
					Период работы на данной позиции
					<textarea
						type="text"
						class="input__primary gray"
						name="period"
						placeholder="Введите текст"
					></textarea>
				</div>
			</label>
			<label>
				<span>6.</span>
				<div class="input-info">
					Основные достижения во время работы
					<textarea
						type="text"
						class="input__primary gray"
						name="achivmentsForWork"
						placeholder="Введите текст"
					></textarea>
				</div>
			</label>
			<label>
				<span>7.</span>
				<div class="input-info">
					Сильные стороны и развитые компетенции
					<textarea
						type="text"
						class="input__primary gray"
						name="strongSides"
						placeholder="Введите текст"
					></textarea>
				</div>
			</label>
			<label>
				<span>8.</span>
				<div class="input-info">
					Замечания и упущения в работе
					<textarea
						type="text"
						class="input__primary gray"
						name="commentsOnWork"
						placeholder="Введите текст"
					></textarea>
				</div>
			</label>
			<label>
				<span>9.</span>
				<div class="input-info">
					Проявленные личные качества
					<textarea
						type="text"
						class="input__primary gray"
						name="personalQualities"
						placeholder="Введите текст"
					></textarea>
				</div>
			</label>
			<label>
				<span>10.</span>
				<div class="input-info">
					Зоны ближайшего развития
					<textarea
						type="text"
						class="input__primary gray"
						name="developmentSides"
						placeholder="Введите текст"
					></textarea>
				</div>
			</label>
			<label>
				<span>11.</span>
				<div class="input-info">
					Компетенции, которые необходимо развить в среднесрочной перспективе
					<textarea
						type="text"
						class="input__primary gray"
						name="developCompetencies"
						placeholder="Введите текст"
					></textarea>
				</div>
			</label>
			<label>
				<span>12.</span>
				<div class="input-info">
					Карьерные и экспертные перспективы
					<textarea
						type="text"
						class="input__primary gray"
						name="careerProspects"
						placeholder="Введите текст"
					></textarea>
				</div>
			</label>
			<div class="description__form-footer">
				<button
					class="btn__primary red description__form-submit small"
					type="submit"
				>
					Отправить
				</button>
			</div>
		</form>
		<section class="meeting description__section" id="resultsOfMeeting">
			<h3 class="description__section-title">Итоги встречи</h3>
			<table class="meeting__table" contenteditable="true">
				<thead>
					<tr>
						<td>Выполнено</td>
						<td>В работе</td>
						<td>Процесс реализации не запущен</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
				</tbody>
			</table>
			<div class="meeting__submit-wrapper">
				<button class="btn__primary red meeting__submit-btn small">Сохранить</button>
			</div>
		</section>
		<section class="meeting-prev description__section" id="resultsOfMeetingPrev">
			<h3 class="description__section-title">Итоги предыдущей встречи</h3>
			<table class="meeting-prev__table">
				<thead>
					<tr>
						<td>Выполнено</td>
						<td>В работе</td>
						<td>Процесс реализации не запущен</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
				</tbody>
			</table>
		</section>
		<label class="meetingIsDone__wrapper">
			Встреча проведена
			<input type="checkbox" name="meetingIsDone" />
		</label>
		<section class="prospects description__section" id="developmentProspects">
			<h3 class="description__section-title">Перспективы развития</h3>
			<table class="prospects__table">
				<thead>
					<tr>
						<td>Направление</td>
						<td>Подразделение</td>
						<td>Приоритет сохранения</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Task</td>
						<td>Task</td>
					</tr>
				</tbody>
			</table>
		</section>
	</div>
</section>
@stop