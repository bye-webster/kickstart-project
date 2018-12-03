<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_type', function (Blueprint $table) {
            $table->string('type_id', 60);
            
            // our fields
            $table->string('type_name')->nullable();
            $table->string('table_id', 20)->nullable();
            $table->string('sequence_id', 20)->nullable();
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
        Schema::dropIfExists('my_type');
    }
}
