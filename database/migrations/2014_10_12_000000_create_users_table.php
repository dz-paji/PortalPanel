<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Faker\Provider\lv_LV\PhoneNumber;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('is_admin');
            $table->string('phone');
            $table->string('school');
            $table->integer('age');
            $table->string('gender');
            $table->string('id_number');
            $table->string('birthday');
            $table->string('address');
            $table->string('ethnic');
            $table->string('subject');
            $table->string('wechat');
            $table->string('contact_other');
            $table->string('room_set');
            $table->string('roommate');
            $table->boolean('is_paid')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->string('invoice_id')->nullable();
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
