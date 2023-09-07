@extends("layouts.main")
@section("title")
	Студент
@stop
@section("styles")
	@vite([
		"resources/sass/pages/home/student.sass"
	])
@stop
@section("content")
<section class="student">
	<div class="container content">
		<h1 class="title__section">Аттестационный лист студента
			программы «Кадровый Резерв»
		</h1>
		<form class="student__form">
			<label>
					<span>1.</span>
					<div class="input-info">
						Дата заполнения
						<input
							type="date"
							class="input__primary gray"
							max="9999-12-31"
							name="date"
						>
					</div>
				</label>
				<label>
					<span>2.</span>
					<div class="input-info">
						Ваше ФИО
						<input
							type="text"
							class="input__primary gray"
							name="fullName"
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
						Ваш Курс
						<ul>
							<li class="course" data-value="1">1</li>
							<li class="course" data-value="2">2</li>
							<li class="course" data-value="3">3</li>
							<li class="course active" data-value="4">4</li>
						</ul>
					</div>
				</label>
				<label>
					<span>5.</span>
					<div class="input-info">
						Перечислите ваши измеримые достижения за отчетный период
						<textarea
							type="text"
							class="input__primary gray"
							name="achivments"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>6.</span>
					<div class="input-info">
						Какие планы вам не удалось осуществить и почему?
						<textarea
							type="text"
							class="input__primary gray"
							name="notPlans"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>7.</span>
					<div class="input-info">
						Какие компетенции, навыки и умения вы развивали за отчетный период?
						<textarea
							type="text"
							class="input__primary gray"
							name="skillsOld"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>8.</span>
					<div class="input-info">
						Какие компетенции, навыки и умения вы собираетесь развивать в будущем периоде?
						<textarea
							type="text"
							class="input__primary gray"
							name="skillsFeature"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>9.</span>
					<div class="input-info">
						Кто ваш наставник?
						<input
							type="text"
							class="input__primary gray"
							name="mentor"
							placeholder="Имя наставника"
						>
					</div>
				</label>
				<label>
					<span>10.</span>
					<div class="input-info">
						Чему вы научились под руководством вашего наставника?
						<textarea
							type="text"
							class="input__primary gray"
							name="skillsFromMentor"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>11.</span>
					<div class="input-info">
						Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?
						<input
							type="text"
							class="input__primary gray"
							name="leader"
							placeholder="Введите текст"
						>
					</div>
				</label>
				<label>
					<span>12.</span>
					<div class="input-info">
						Кто из ваших сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации?
						<input
							type="text"
							class="input__primary gray"
							name="excess"
							placeholder="Введите текст"
						>
					</div>
				</label>
				<label>
					<span>13.</span>
					<div class="input-info">
						Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?
						<textarea
							type="text"
							class="input__primary gray"
							name="employeesWithSkills"
							placeholder="Введите текст"	
						></textarea>
					</div>
				</label>
				<label>
					<span>14.</span>
					<div class="input-info">
						Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?
						<input
							type="text"
							class="input__primary gray"
							name="employeesLeader"
							placeholder="Введите текст"
						>
					</div>
				</label>
				<label>
					<span>15.</span>
					<div class="input-info">
						Какие карьерные перспективы вы перед собой видите?
						<textarea
							type="text"
							class="input__primary gray"
							name="careerProspects"
							placeholder="Введите текст"	
						></textarea>
					</div>
				</label>
				<label>
					<span>16.</span>
					<div class="input-info">
						Какие улучшения необходимо сделать в вашем отделе, департаменте и Корпорации в целом для повышения эффективности деятельности?
						<textarea
							type="text"
							class="input__primary gray"
							name="improvementsToImproveEfficiency"
							placeholder="Введите текст"	
						></textarea>
					</div>
				</label>
				<label>
					<span>17.</span>
					<div class="input-info">
						Какие новые продукты и услуги Клиентам вы предлагаете создать в Корпорации?
						<textarea
							type="text"
							class="input__primary gray"
							name="servicesToClients"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>18.</span>
					<div class="input-info">
						Какие новые направления бизнеса вы предлагаете открыть в Корпорации?
						<textarea
							type="text"
							class="input__primary gray"
							name="businessDirections"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>19.</span>
					<div class="input-info">
						Какие улучшения в системе подготовки программы "Кадровый резерв" необходимо осуществить?
						<textarea
							type="text"
							class="input__primary gray"
							name="improvementsInTheTrainingSystem"
							placeholder="Введите текст"	
						></textarea>
					</div>
				</label>
				<label>
					<span>20.</span>
					<div class="input-info">
						Какие направления набора абитуриентов на программу "Кадровый резерв" вы считаете наиболее эффективными?
						<textarea
							type="text"
							class="input__primary gray"
							name="effectiveDirections"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>21.</span>
					<div class="input-info">
						Выберите направления, в которых вы видите свое дальнейшее развитие в Корпорации?
						<textarea
							type="text"
							class="input__primary gray"
							name="directionsForDevelopment"
							placeholder="Введите текст"
						></textarea>
					</div>
				</label>
				<label>
					<span>22.</span>
					<div class="input-info">
						В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат?
						<input
							type="text"
							class="input__primary gray"
							name="benefitsAndResults"
							placeholder="Введите текст"	
						>
					</div>
				</label>
				<label>
					<span>23.</span>
					<div class="input-info">
						Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации.
						<textarea
							type="text"
							class="input__primary gray"
							name="corporateDevelopment"
							placeholder="Введите текст"	
						></textarea>
					</div>
				</label>
			<div class="student__form-footer">
				<button
					class="btn__primary red student__form-submit"
					type="submit"
				>
					Отправить
				</button>
			</div>
		</form>
	</div>
</section>
@stop