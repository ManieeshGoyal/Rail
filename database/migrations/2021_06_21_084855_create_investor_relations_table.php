<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_relations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->int('year_id');
            $table->int('tab_id');
            $table->string('owning_railway')->nullable();
            $table->string('wagon_type')->nullable();
            $table->string('manufacturing_unit')->nullable();
            $table->string('dm_no')->nullable();
            $table->string('dm_date')->nullable();
            $table->string('attachments')->nullable();
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
        Schema::dropIfExists('investor_relations');
    }
}
