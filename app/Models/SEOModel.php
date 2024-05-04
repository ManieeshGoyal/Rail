<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SEOModel extends Model {
    use HasFactory;
    protected $table = 'seo_models';
    protected $fillable = [
        'name',
        'is_active',
    ];
}
