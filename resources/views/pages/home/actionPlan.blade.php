<?php
$id = '1AFTg4a4GzITr0MVj_YU36WRr1PFuu_2hMGJ3DFJkabM';
$gid = 0;
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id.'/export?format=csv&gid='.$gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);
?>
@extends("layouts.home")
@section("title")
	План мероприятий
@stop
@section("styles")

@stop
@section("content")
    <div class="actionPlan">
		<table class="actionPlan__sheet">
			<thead>
				<tr>
					<td rowspan="2">№</td>
					<td rowspan="2">Название<br>мероприятия</td>
					<td rowspan="2">Результаты</td>
					<td colspan="2">Сроки</td>
					<td colspan="2" rowspan="2">Исполнители</td>
					<td rowspan="2">Примечание</td>
				</tr>
				<tr>
					<td>Начало</td>
					<td>Окончание</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 0;
				
				unset($array[0]);
				unset($array[1]);
			
				foreach ($array as $item) {
					$i++;
					$html = '<tr>';
					$html .= '<td scope="row">'.$i.'</td>';
		
					foreach ($item as $value) {
						$html .= '<td scope="row">'.$value.'</td>';
					}
		
					
					$html .= '</tr>';
		
					echo $html;
				}
				?>
			</tbody>
		</table>
		@if (in_array($person, ["director", "employee"]))
			<button class="btn__primary actionPlan__link">
				<a
					href="https://docs.google.com/spreadsheets/d/1AFTg4a4GzITr0MVj_YU36WRr1PFuu_2hMGJ3DFJkabM/edit?hl=ru#gid=0"
					target="_blank"
				>
					Перейти в GoogleSheet
				</a>
			</button>
		@endif
    </div>
@stop
@section("scripts")

@stop
