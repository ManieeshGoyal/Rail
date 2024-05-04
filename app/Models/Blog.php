<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model {
    use HasFactory, SoftDeletes;

    public function getRouteKeyName() {
        return 'slug';
    }

    public function blogCategories() {
        return $this->belongsToMany(BlogCategory::class);
    }

    public function mediaLibrary() {
        return $this->belongsTo(MediaLibrary::class);
    }
}
