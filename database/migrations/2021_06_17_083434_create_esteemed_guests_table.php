<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsteemedGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esteemed_guests', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->string('name');
            $table->string('designation');
            $table->longText('comments')->nullable();
            $table->integer('media_library_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esteemed_guests');
    }
}
