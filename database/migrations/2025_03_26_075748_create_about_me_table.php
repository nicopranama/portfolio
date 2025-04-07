<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutMeTable extends Migration
{
    public function up()
    {
        Schema::create('about_me', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('education')->nullable();
            $table->string('major')->nullable();
            $table->string('university')->nullable();
            $table->text('additional_info')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_me');
    }
}