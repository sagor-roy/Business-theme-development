<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSectionStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_section_statuses', function (Blueprint $table) {
            $table->id();
            $table->enum('choose',['active','inactive']);
            $table->enum('offer',['active','inactive']);
            $table->enum('product',['active','inactive']);
            $table->enum('staff',['active','inactive']);
            $table->enum('work',['active','inactive']);
            $table->enum('client',['active','inactive']);
            $table->enum('center_img',['active','inactive']);
            $table->enum('feedback',['active','inactive']);
            $table->enum('partner',['active','inactive']);
            $table->enum('blog',['active','inactive']);
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
        Schema::dropIfExists('home_section_statuses');
    }
}
