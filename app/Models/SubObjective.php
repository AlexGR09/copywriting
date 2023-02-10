<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubObjective extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','objective_id'
    ];

    public function objective(){
        return $this->belongsTo(Objective::class);
    }

    public function textdescription(){
        return $this->belongsTo(TextDescription::class);
    }
}
