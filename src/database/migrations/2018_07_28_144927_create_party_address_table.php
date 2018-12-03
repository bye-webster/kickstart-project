<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_address', function (Blueprint $table) {
            $table->bigIncrements('party_address_id');
            
            // our fields
            $table->bigInteger('party_id')->nullable();
            $table->string('address')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('coordinate')->nullable();
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
        Schema::dropIfExists('party_address');
    }
}
