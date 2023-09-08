@extends("layouts.employee")
@section("title")
	Служба режима
@stop
@section("styles")
	@vite([
		"resources/sass/pages/home/employee/mode_services.sass"
	])
@stop
@section("content")
<section class="mode-services">
	<h1 class="title__section">Служба режима</h1>	
	<x-docs />
	<div class="mode-services__achivments">
		<h1 class="title__section">Достижения</h1>
		<div class="mode-services__achivments-sport mode-services__achivments-item">
			<h3 class="mode-services__achivments-title">Спортивные достижения</h3>
			<table class="mode-services__table">
				<thead>
					<tr>
						<td>Название спортивного мероприятия</td>
						<td>Результат</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Task</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore deleniti error ipsam, fugiat velit odit enim, inventore eligendi magnam voluptate, quo magni. Commodi at vitae ad minus quam ut quos!</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="mode-services__achivments-creative mode-services__achivments-item">
			<h3 class="mode-services__achivments-title">Творческие навыки</h3>
			<table class="mode-services__table">
				<thead>
					<tr>
						<td>Название спортивного мероприятия</td>
						<td>Результат</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Task</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="mode-services__achivments-corp mode-services__achivments-item">
			<h3 class="mode-services__achivments-title">Достижения в рамках корпорации</h3>
			<table class="mode-services__table">
				<thead>
					<tr>
						<td>Название</td>
						<td>Описание</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Task</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="mode-services__achivments-volunteering mode-services__achivments-item">
			<h3 class="mode-services__achivments-title">Волонтерство</h3>
			<table class="mode-services__table">
				<thead>
					<tr>
						<td>Название</td>
						<td>Описание</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Task</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
					</tr>
					<tr>
						<td>Task</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deserunt numquam molestiae ea mollitia dolores. Excepturi nostrum nemo voluptatibus id, quaerat sapiente nisi accusamus quae amet consectetur. Fugit, id commodi.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
@stop
@section("scripts")
	{{--  --}}
@stop