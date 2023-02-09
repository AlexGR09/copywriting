<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TextDescription extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'description',
        'subobjective_id',
        'text_id'
    ];

    public function subobjective(){
        return $this->hasMany(SubObjective::class);
    }

    public function text(){
        return $this->hasMany(Text::class);
    }
}
