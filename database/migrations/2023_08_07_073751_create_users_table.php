<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
			$table->string("first_name"); // имя
			$table->string("last_name"); // фамилия
			$table->string("patronymic"); // отчество
			$table->string("login"); // логин
			$table->string("password"); // пароль
			$table->integer("year_of_admission"); // год поступления
			$table->boolean("dismissed")->default(false); // уволен 
			$table->boolean("working")->default(false); // работает
			$table->boolean("foreigner")->default(false); // иностранец
			$table->boolean("training_for_bak")->default(true); // обучение на бак
			$table->boolean("training_for_vvo")->default(false); // обучение на вво
			$table->boolean("training_for_mag")->default(false); // обучение на маг
			$table->boolean("training_for_asp")->default(false); // обучение на асп
			$table->boolean("training_for_mva")->default(false); // обучение на мва
			$table->boolean("meeting_was_held")->default(false); // встреча проведена
			$table->string("structural_subdivision"); // структурное подразделение
			$table->string("avatar")->default("avatar-default.png"); // аватар
			$table->date("birthday"); // дата рождения
			$table->integer("phone"); // телефон
			$table->string("email"); // почта
			$table->string("address"); // адрес проживания
			$table->json("parents")->default("[]"); // id родителей
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
