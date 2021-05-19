<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function (Blueprint $table) {
			$table->id();
			$table->string('first_name');
			$table->string('last_name');
			$table->enum('gender', ['male', 'female']);
			$table->string('phone_number');
			$table->string('email')->unique();
			$table->string('address');
			$table->string('nationality');
			$table->date('date_of_birth');
			$table->string('education_background');
			$table->enum('preferred_contact_method', ['email', 'phone_number', 'none']);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('clients');
	}
}
