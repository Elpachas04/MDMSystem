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
        Schema::create('appointment', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->collation='utf8_general_ci';
            $table->charset='utf8';                        
            $table->foreignId('PTNO')->constrained('patiens','PTNO');
            $table->integer('Contact No');
            $table->dateTime('Appointment Date and Time');
            $table->set('Appointment Status',['Y',''])->nullable();
            $table->smallInteger('DURATION (MINUTES)');
            $table->string('Doctor / Physio Therapist',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
};
