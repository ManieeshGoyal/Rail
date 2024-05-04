<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaLibrariesTable extends Migration {
    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('media_libraries', function(Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('extension')->nullable();
            $table->string('slug')->nullable();
            $table->string('mime_type')->nullable();
            $table->string('url')->nullable();
            $table->string('file_size')->nullable();
            $table->string('dimension')->nullable();
            $table->string('alt_text')->nullable();
            $table->string('title')->nullable();
            $table->longText('caption')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('media_libraries');
    }
}
