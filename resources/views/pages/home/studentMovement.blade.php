<?php
$id = '1H5qfLCQI1Lig2sQJjZQmA2s6i0BPudcHbkajIbtLI3w';
$gid = 0;
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id.'/export?format=csv&gid='.$gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);
?>

@extends("layouts.home")
@section("title")
	Движение студентов
@stop
@section("styles")

@stop
@section("content")
	<div class="studentMovement">
		<div class="studentMovement__sheet">
			<table>
				<thead>
					<tr>
						<td colspan="10"><h2>Отчет о движении Кадрового резерва(НТБ).</h2></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="3">На 27.09</td>
						<td colspan="3">Прибыло/Выбыло</td>
						<td colspan="3">На 4.10</td>
					</tr>
					<tr>
						<td></td>
						<td>М </td>
						<td>Ж </td>
						<td>Всего</td>
						<td>М </td>
						<td>Ж</td>
						<td>Всего</td>
						<td>М</td>
						<td>Ж</td>
						<td>Всего</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 0;

					foreach ($array as $item) {
						$i++;
						$html = '<tr>';
					
						foreach ($item as $value) {
							if($value>=0){
								$html .= '<td scope="row">'.$value.'</td>';
							} else {
								$html .= '<td scope="row" class="red">'.$value.'</td>';
							}
						}
						
						$html .= '</tr>';
						echo $html;
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
@stop
@section("scripts")

@stop
