<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('head')->nullable();
            $table->string('text')->nullable();
            $table->string('name')->nullable();
            $table->string('prof')->nullable();
            $table->string('img')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->string('twit')->nullable();
            $table->string('link')->nullable();
            $table->string('pin')->nullable();
            $table->string('you')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
