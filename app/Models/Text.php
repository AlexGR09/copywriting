<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Text extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'subject',
        'called',
        'contact',
        'hashtag',
        'img',
        'status',
        'target_id',
        'thematic_id',
        'category_id',
        'objetive_id',
    ];

    public function target(){
        return $this->hasOne(Target::class);
    }
    public function thematic(){
        return $this->hasOne(Thematic::class);
    }
    public function category(){
        return $this->hasOne(Category::class);
    }
    public function objective(){
        return $this->hasOne(Objective::class);
    }
    public function textdrescription(){
        return $this->belongsTo(Textdrescription::class);
    }
}
