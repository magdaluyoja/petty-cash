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
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('userlevel',["User","Admin"]);
            $table->string('position');
            $table->string('department');
            $table->enum('status',["Active","Inactive"]);
            $table->integer('dayslimit');
            $table->string('email')->unique();
            $table->string('deactivatedby');
            $table->enum('isapprover',['No','Yes']);
            $table->string('isapproverfor');
            $table->enum('iscustodian',['No','Yes']);
            $table->dateTime('deactivateddate');
            $table->string('createdby');
            $table->dateTime('createddate');
            $table->string('updatedby');
            $table->dateTime('updateddate');
            $table->rememberToken();
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
