<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model {
    use HasFactory, SoftDeletes;

    public function getRouteKeyName() {
        return 'slug';
    }

    public function blogs() {
        return $this->belongsToMany(Blog::class);
    }
}
