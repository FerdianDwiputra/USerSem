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
            $table->dateTime('start_time');
            $table->string('link');
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
