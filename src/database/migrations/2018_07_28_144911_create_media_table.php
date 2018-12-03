<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('media_id');
            
            // our fields
            $table->bigInteger('parent_media_id')->nullable();
            $table->string('media_title')->nullable();
            $table->string('media_synopsis')->nullable();
            $table->string('mime_type')->nullable();
            $table->string('type_id')->nullable();
            $table->string('status_id')->nullable();
            $table->string('created_by_user_login')->nullable();
            $table->string('media_url', 500)->nullable();
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
        Schema::dropIfExists('media');
    }
}
