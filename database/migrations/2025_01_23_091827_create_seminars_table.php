<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('pemateriId');
            $table->foreign('pemateriId')->references('id')->on('users');
            $table->string('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->string('name');
            $table->string('price');
            $table->string('location')->nullable();
            $table->string('link')->nullable();
            $table->dateTime('start_time');
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
        Schema::dropIfExists('seminars');
    }
}
