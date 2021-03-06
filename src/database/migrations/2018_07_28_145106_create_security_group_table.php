<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_group', function (Blueprint $table) {
            $table->string('group_id');
            
            // our fields
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
        Schema::dropIfExists('security_group');
    }
}
