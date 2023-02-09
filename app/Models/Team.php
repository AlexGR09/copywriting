<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'writer_id',
        'designer_id'
    ];

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
    public function designer()
    {
        return $this->belongsTo(Designer::class);
    }
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
