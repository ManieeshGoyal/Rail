<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPosting extends Model {
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function candidates() {
        return $this->hasMany(Candidate::class);
    }

}
