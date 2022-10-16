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
        Schema::create('classreports', function (Blueprint $table) {
            $table->id();
            $table->integer('take_id');
            $table->integer('ut1');
            $table->integer('ut2');
            $table->integer('mt1');
            $table->integer('mt2');
            $table->integer('cur_att');
            $table->integer('cur_class');
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
        Schema::dropIfExists('classreports');
    }
};
