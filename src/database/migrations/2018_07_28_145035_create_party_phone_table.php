<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_phone', function (Blueprint $table) {
            $table->bigIncrements('party_phone_id');
            
            // our fields
            $table->bigInteger('party_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('phone_number3')->nullable();
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
        Schema::dropIfExists('party_phone');
    }
}
