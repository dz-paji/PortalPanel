<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('name');
            $table->string('project1');
            $table->string('project2');
            $table->string('desc');
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
        Schema::dropIfExists('user_migrate');
    }
}
