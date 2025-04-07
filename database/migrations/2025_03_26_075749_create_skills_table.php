<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('proficiency_level')->default(0);
            $table->string('category');
            $table->boolean('is_learning')->default(false);
            $table->timestamps();
            
            // Pastikan nama skill unik
            $table->unique('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
}