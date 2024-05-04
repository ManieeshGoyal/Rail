<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentCompliancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environment_compliances', function (Blueprint $table) {
            $table->id();
            $table->string('compliance_type')->nullable();
            $table->string('year')->nullable();
            $table->string('name')->nullable();
            $table->string('attachments')->nullable();
            $table->string('published_date')->nullable();
            $table->longText('description')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('environment_compliances');
    }
}
