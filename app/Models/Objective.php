<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objective extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function subObjetive(){
        return $this->hasMany(SubObjective::class);
    }
    public function text()
    {
        return $this->belongsTo(Text::class);
    }
}
