@extends("layouts.home")
@section("title")
	Аттестационный лист
@stop
@section("styles")

@stop
@section("content")
	<div class="studentList">
		<h1 class="studentList__title">АТТЕСТАЦИОННЫЙ ЛИСТ СТУДЕНТА ПРОГРАММЫ «КАДРОВЫЙ РЕЗЕРВ»</h1>
		<form action="" class="studentList__form">
			<label>
				1. Дата заполнения (чч.мм.гг.)
				<input type="date" class='input__primary' max="9999-12-31" name="date">
			</label>
			<label>
				2. Ваше Имя Фамилия Отчество
				<input type="text" class='input__primary' name="fullName">
			</label>
			<label>
				3. Структурное подразделение (Департамент)
				<input type="text" class='input__primary' name="division">
			</label>
			<label>
				4. Ваш Курс:
				<input type="number" class='input__primary' name="course">
			</label>
			<label>
				5. Перечислите ваши измеримые достижения за отчетный период:
				<textarea type="text" class='input__primary' name="achivments"></textarea>
			</label>
			<label>
				6. Какие планы вам не удалось осуществить и почему?
				<textarea type="text" class='input__primary' name="notPlans"></textarea>
			</label>
			<label>
				7. Какие компетенции, навыки и умения вы развивали за отчетный период?
				<textarea type="text" class='input__primary' name="skillsOld"></textarea>
			</label>
			<label>
				8. Какие компетенции, навыки и умения вы собираетесь развивать в будущем периоде?
				<textarea type="text" class='input__primary' name="skillsFeature"></textarea>
			</label>
			<label>
				9. Кто ваш наставник?
				<input type="text" class='input__primary' name="mentor">
			</label>
			<label>
				10. Чему вы научились под руководством вашего наставника?
				<textarea type="text" class='input__primary' name="skillsFromMentor"></textarea>
			</label>
			<label>
				11. Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?
				<input type="text" class='input__primary' name="leader">
			</label>
			<label>
				12. Кто из ваших сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации?
				<input type="text" class='input__primary' name="excess">
			</label>
			<label>
				13. Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?
				<textarea type="text" class='input__primary' name="employeesWithSkills"></textarea>
			</label>
			<label>
				14. Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?
				<input type="text" class='input__primary' name="employeesLeader">
			</label>
			<label>
				15. Какие карьерные перспективы вы перед собой видите?
				<textarea type="text" class='input__primary' name="careerProspects"></textarea>
			</label>
			<label>
				16. Какие улучшения необходимо сделать в вашем отделе, департаменте и Корпорации в целом для повышения эффективности деятельности?
				<textarea type="text" class='input__primary' name="improvementsToImproveEfficiency"></textarea>
			</label>
			<label>
				17. Какие новые продукты и услуги Клиентам вы предлагаете создать в Корпорации?
				<textarea type="text" class='input__primary' name="servicesToClients"></textarea>
			</label>
			<label>
				18. Какие новые направления бизнеса вы предлагаете открыть в Корпорации?
				<textarea type="text" class='input__primary' name="businessDirections"></textarea>
			</label>
			<label>
				19. Какие улучшения в системе подготовки программы "Кадровый резерв" необходимо осуществить?
				<textarea type="text" class='input__primary' name="improvementsInTheTrainingSystem"></textarea>
			</label>
			<label>
				20. Какие направления набора абитуриентов на программу "Кадровый резерв" вы считаете наиболее эффективными?
				<textarea type="text" class='input__primary' name="effectiveDirections"></textarea>
			</label>
			<label>
				21. Выберите направления, в которых вы видите свое дальнейшее развитие в Корпорации?
				<textarea type="text" class='input__primary' name="directionsForDevelopment"></textarea>
			</label>
			<label>
				22. В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат?
				<input type="text" class='input__primary' name="benefitsAndResults">
			</label>
			<label>
				23. Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации.
				<textarea type="text" class='input__primary' name="corporateDevelopment"></textarea>
			</label>
			<button type='submit' class="studentList__submit btn__primary" disabled="true">
				Отправить
			</button>
		</form>
	</div>
@stop
@section("scripts")
	@vite(["resources/js/pages/studentList/create.js"])
@stop
