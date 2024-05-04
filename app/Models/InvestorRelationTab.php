<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestorRelationTab extends Model
{
    use HasFactory, SoftDeletes;
    
    public function investorRelation() {
        return $this->hasMany(InvestorRelation::class, 'tab_id', 'id')->OrderBy('year_id', 'DESC');
    }
}
