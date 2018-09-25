<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contacts', function (Blueprint $table) {
             $table->string('contact_ID',20);
             $table->string('firstname');
             $table->string('lastname');
             $table->string('nickname')->nullable();
             $table->integer('age')->nullable();
             $table->string('address');
             $table->string('contact',11);
             $table->string('hobbies')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
