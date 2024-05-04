<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMediaLibraryIdToBlogs extends Migration {
    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::table('blogs', function(Blueprint $table) {
            $table->integer('media_library_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::table('blogs', function(Blueprint $table) {
            $table->dropColumn('media_library_id');
        });
    }
}
