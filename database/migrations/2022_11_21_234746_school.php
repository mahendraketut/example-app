<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //make table schools with int id autoincrement and schoolid string as primary key
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('schoolid')->primary();
            $table->string('schoolname');
            $table->string('schooladdress');
            $table->string('schoolcity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};