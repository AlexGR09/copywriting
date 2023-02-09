<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Establishment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'address',
        'schedule',
        'doctor_id'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
