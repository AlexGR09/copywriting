<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsHasSpecialties extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'specialty_id'
    ];

    public function doctor()
    {
        return $this->hasMany(Doctor::class,'id','doctor_id');
    }

    public function specialty()
    {
        return $this->hasMany(Specialty::class,'id','specialty_id');
    }
}
