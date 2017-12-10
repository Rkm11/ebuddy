<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('institute_id');
            $table->string('batch_id');
            $table->string('batch_name');
            $table->string('standard');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('profie_pic');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('dob');
            $table->string('hobbies');
            $table->string('blood_group');
            $table->string('mobile_no');
            $table->string('alternate_no');
            $table->string('religion');
            $table->string('category');
            $table->string('is_handicaped');
            $table->string('sports');
            $table->string('roll_no');
            $table->string('admission_date');
            $table->string('vehicle_no');
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
        Schema::dropIfExists('personal_infos');
    }
}
