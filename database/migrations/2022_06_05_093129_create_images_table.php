<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->index();
            $table->string('type')->index();
            $table->string('path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
}
