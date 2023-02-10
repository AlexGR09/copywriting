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
        return $this->belongsTo(Doctor::class);
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}
