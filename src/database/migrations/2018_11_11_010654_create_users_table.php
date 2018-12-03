<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('uid', 36)->unique();
            $table->char('cpf', 11)->unique()->nullable();
            $table->string('name', 50);
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->char('phone', 16)->nullable();
            $table->char('mobile', 16)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->date('birth')->nullable();
            $table->char('gender', 1)->nullable();
            $table->string('avatar')->nullable();
            $table->string('email', 80)->unique();
            $table->string('password', 255)->nullable();
            $table->tinyInteger('status');
            $table->enum('role', ['GOD_USER', 'ADMIN_USER', 'BASIC_USER'])->default('BASIC_USER');
            $table->rememberToken();
            $table->softDeletes();

            // addition from my self
            // our fields
            $table->string('api_token')->nullable();
            $table->string('password_hint')->nullable();
            $table->string('is_system')->nullable();
            $table->enum('enable', ['Y','N'])->nullable();
            $table->string('authentication_ip_address')->nullable();
            $table->enum('has_logged_out', ['Y','N'])->nullable();
            $table->enum('require_password_change', ['Y','N'])->nullable();
            $table->decimal('successive_failed_logins', 20,0)->nullable();
            $table->string('description')->nullable();

            // common field
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
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
