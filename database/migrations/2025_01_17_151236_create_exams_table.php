<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('pengujiId');
            $table->foreign('pengujiId')->references('id')->on('users');
            $table->string('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->integer('quota');
            $table->string('location')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->boolean('finished')->default(false);
            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
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
        Schema::dropIfExists('exams');
    }
}
