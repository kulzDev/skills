<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->nullable()->index();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('is_active')->default(0);
            $table->integer('mobile_number')->nullable()->index();
            $table->integer('tel_number')->nullable()->index();
            $table->integer('id_number')->nullable()->index();
            $table->string('gender')->nullable()->index();
            $table->mediumtext('archievement')->nullable();
            $table->mediumtext('it_skills')->nullable();
            $table->integer('role_id')->unsigned()->nullable()->index();

            /*             relationships             */
            // $table->integer('address_id')->unsigned()->nullable()->index();
            // $table->integer('qualification_id')->unsigned()->nullable()->index();

            // $table->integer('careeroverview_id')->unsigned()->nullable()->index();
            // $table->integer('references_id')->unsigned()->nullable()->index();
            // $table->integer('course_id')->unsigned()->nullable()->index();
            // $table->integer('results_id')->unsigned()->nullable()->index();
            // $table->integer('assessmenttype_id')->unsigned()->nullable()->index();

            // $table->integer('photo_id')->unsigned()->nullable()->index();  this is manually done

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
