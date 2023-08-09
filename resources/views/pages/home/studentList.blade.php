@extends("layouts.home")
@section("title")
	Аттестационный лист
@stop
@section("styles")

@stop
@section("content")
	<div class="studentList">
		<form action="" class="studentList__form">
			<table class="studentList__sheet">
				<thead>
					<tr class='studentList__sheet_head'>
						<td colspan="2"><span>АТТЕСТАЦИОННЫЙ ЛИСТ СТУДЕНТА ПРОГРАММЫ «КАДРОВЫЙ РЕЗЕРВ»</span></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span>1. Дата заполнения (чч.мм.гг.):</span></td>
						<td><input type="date" class='studentList__sheet_input' max="9999-12-31"></td>
					</tr>
					<tr>
						<td><span>2. Ваше Имя Фамилия Отчество:</span></td>
						<td><input type="text" class='studentList__sheet_input'></td>
					</tr>
					<tr>
						<td><span>3. Структурное подразделение (Департамент):</span></td>
						<td><input type="text" class='studentList__sheet_input'></td>
					</tr>
					<tr>
						<td><span>4. Ваш Курс:</span></td>
						<td><input type="number" class='studentList__sheet_input'></td>
					</tr>
					<tr>
						<td><span>5. Перечислите ваши измеримые достижения за отчетный период:</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>6. Какие планы вам не удалось осуществить и почему?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>7. Какие компетенции, навыки и умения вы развивали за отчетный период?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>8. Какие компетенции, навыки и умения вы собираетесь развивать в будущем периоде?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>9. Кто ваш наставник?</span></td>
						<td><input type="text" class='studentList__sheet_input'></td>
					</tr>
					<tr>
						<td><span>10. Чему вы научились под руководством вашего наставника?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>11. Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?</span></td>
						<td><input type="text" class='studentList__sheet_input'></td>
					</tr>
					<tr>
						<td><span>12. Кто из ваших сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации?</span></td>
						<td><input type="text" class='studentList__sheet_input'></td>
					</tr>
					<tr>
						<td><span>13. Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?:</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>14. Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?</span></td>
						<td><input type="text" class='studentList__sheet_input'></td>
					</tr>
					<tr>
						<td><span>15. Какие карьерные перспективы вы перед собой видите?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>16. Какие улучшения необходимо сделать в вашем отделе, департаменте и Корпорации в целом для повышения эффективности деятельности?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>17. Какие новые продукты и услуги Клиентам вы предлагаете создать в Корпорации?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>18. Какие новые направления бизнеса вы предлагаете открыть в Корпорации?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>19. Какие улучшения в системе подготовки программы "Кадровый резерв" необходимо осуществить?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>20. Какие направления набора абитуриентов на программу "Кадровый резерв" вы считаете наиболее эффективными?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>21. Выберите направления, в которых вы видите свое дальнейшее развитие в Корпорации?</span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
					<tr>
						<td><span>22. В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат </span></td>
						<td><input type="text" class='studentList__sheet_input'></td>
					</tr>
					<tr>
						<td><span>23. Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации. </span></td>
						<td><textarea type="text" class='studentList__sheet_input'></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type='submit' class="studentList__submit">
				Отправить
			</button>
		</form>
	</div>
@stop
@section("scripts")

@stop
