<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_history', function (Blueprint $table) {
            $table->string('email');
            
            // our fields
            $table->dateTime('from_date')->nullable();
            $table->dateTime('thru_date')->nullable();
            $table->string('password_hint')->nullable();
            $table->string('password_used')->nullable();
            $table->string('authentication_ip_address')->nullable();
            $table->enum('successfull_login', ['Y','N'])->nullable();
            $table->string('description')->nullable();

            // common field
            $table->dateTime('created_at')->useCurrent();  
            $table->dateTime('updated_at')->useCurrent(); 

            // our schema builder
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_history');
    }
}
