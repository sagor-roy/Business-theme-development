<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('f_icon')->nullable();
            $table->string('f_link')->nullable();
            $table->string('s_icon')->nullable();
            $table->string('s_link')->nullable();
            $table->string('t_icon')->nullable();
            $table->string('t_link')->nullable();
            $table->string('fo_icon')->nullable();
            $table->string('fo_link')->nullable();
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
        Schema::dropIfExists('socials');
    }
}
