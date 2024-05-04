<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory;

    public function module() {
        return $this->belongsTo(Module::class);
    }

    public function role() {
        return $this->belongsToMany(Role::class);
    }

}
