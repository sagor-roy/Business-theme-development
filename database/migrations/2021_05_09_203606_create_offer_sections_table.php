<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_sections', function (Blueprint $table) {
            $table->id();
            $table->string('head')->nullable();
            $table->string('text')->nullable();
            $table->string('sub_head')->nullable();
            $table->string('img')->nullable();
            $table->string('icon')->nullable();
            $table->string('content')->nullable();
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
        Schema::dropIfExists('offer_sections');
    }
}
