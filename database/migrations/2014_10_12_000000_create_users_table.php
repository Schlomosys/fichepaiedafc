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
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->text('description')->nullable();
            $table->string('pseudo')->nullable();
            $table->string('civilite')->nullable();
            $table->timestamp('dateNaissance')->nullable();
            $table->string('pays')->nullable();   
            $table->string('numTel')->unique()->nullable();
            $table->string('profile_image')->nullable(); 
            $table->string('piece_id_scan')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('valid')->default(false);
            
            $table->string('provider');
            $table->string('provider_id');
            $table->string('password')->nullable();
            $table->unsignedBigInteger('type')->nullable();
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
