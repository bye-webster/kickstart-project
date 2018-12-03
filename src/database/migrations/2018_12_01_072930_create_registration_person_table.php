<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_person', function (Blueprint $table) {
            $table->string('activation_key');
            $table->string('activation_link');
            
            // our fields
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('email_address')->nullable();
            $table->enum('terms_and_conditions',['Y','N'])->nullable();
            $table->enum('subscribes',['Y','N'])->nullable();
            $table->string('phone_number')->nullable();
            $table->string('password')->nullable();
            $table->string('type_id', 20)->nullable();
            $table->string('status_id', 20)->nullable();
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
        Schema::dropIfExists('registration_person');
    }
}
