<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestorRelation extends Model
{
    use HasFactory, SoftDeletes;

    public function mediaLibrary() {
        return $this->belongsTo(MediaLibrary::class);
    }
    public function years() {
        return $this->belongsTo(InvestorRelationYear::class, 'year_id');
    }
    public function tabs() {
        return $this->belongsTo(InvestorRelationTab::class, 'tab_id');
    }
}
