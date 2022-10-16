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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string('tts')->unique();
            $table->string('name');
            $table->string('address', 200);
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('qualification');
            $table->integer('experience');
            $table->date('date_of_join')->nullable();
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
        Schema::dropIfExists('faculties');
    }
};
