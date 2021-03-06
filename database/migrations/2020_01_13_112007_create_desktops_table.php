<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesktopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desktops', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Model');
            $table->String('Brand_Name');
            $table->String('Os');
            $table->String('Price');
            $table->String('Processor');
            $table->String('Graphics');
            $table->String('Display');
            $table->String('Storage');
            $table->String('Memory');
            $table->String('Battery');
            $table->String('Keyboard');
            $table->String('Finish');
            $table->String('Dimensions');
            $table->String('Desktop_images');
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
        Schema::dropIfExists('desktops');
    }
}
