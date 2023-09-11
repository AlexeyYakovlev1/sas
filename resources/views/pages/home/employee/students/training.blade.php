@extends("layouts.employee")
@section("title")
	Обучение
@stop
@section("styles")
	@vite(["resources/sass/pages/home/students/training.sass"])
@stop
@section("content")
<section class="training">
	<h1 class="title__section">Обучение</h1>
	<table class="training__table">
		<thead>
			<tr>
				<td>Программа обучение</td>
				<td>Группа</td>
				<td>АЗ</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>ВО</td>
				<td>ДБИ181-рсоб</td>
				<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
			</tr>
			<tr>
				<td>ВО</td>
				<td>ДБИ181-рсоб</td>
				<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
			</tr>
			<tr>
				<td>ВО</td>
				<td>ДБИ181-рсоб</td>
				<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
			</tr>
		</tbody>
	</table>
	<div class="training__diploma">
		<div class="training__diploma-header">
			<h3 class="training__diploma-title">Дипломная работа</h3>
			<button class="btn__primary">Смотреть все</button>
		</div>
		<ul class="training__diploma-list">
			<li class="training__diploma-list-item">
				<span class="training__diploma-list-item-top">
					<img src="/images/file.svg" alt="file" />
				</span>
				<a href="#">Таблица_1.docx</a>
			</li>
			<li class="training__diploma-list-item">
				<span class="training__diploma-list-item-top">
					<img src="/images/file.svg" alt="file" />
				</span>
				<a href="#">Таблица_1.docx</a>
			</li>
			<li class="training__diploma-list-item">
				<span class="training__diploma-list-item-top">
					<img src="/images/file.svg" alt="file" />
				</span>
				<a href="#">Таблица_1.docx</a>
			</li>
			<li class="training__diploma-list-item">
				<span class="training__diploma-list-item-top">
					<img src="/images/file.svg" alt="file" />
				</span>
				<a href="#">Таблица_1.docx</a>
			</li>
			<li class="training__diploma-list-item">
				<span class="training__diploma-list-item-top">
					<img src="/images/file.svg" alt="file" />
				</span>
				<a href="#">Таблица_1.docx</a>
			</li>
		</ul>
	</div>
</section>
@stop
@section("scripts")
	{{--  --}}
@stop