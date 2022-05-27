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
        Schema::create('patiens', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->collation='utf8_general_ci';
            $table->charset='utf8';            
            $table->string('TYPE',255)->default('GENERAL');
            $table->id('PTNO');
            $table->enum('SALUTATION',['MR.','MRS.','MISS.','MS.']);
            $table->string('PATIENTNAME',255);
            $table->enum('GENDER',['F','M']);
            $table->string('NATIONALITY',255);
            $table->string('REGION',255)->nullable();
            $table->dateTime('REGISTREDDATE');
            $table->timestamp('EDDITDATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patiens');
    }
};
