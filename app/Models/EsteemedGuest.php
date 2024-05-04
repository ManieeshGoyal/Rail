<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EsteemedGuest extends Model
{
    use HasFactory, SoftDeletes;

    public function mediaLibrary() {
        return $this->belongsTo(MediaLibrary::class);
    }
}