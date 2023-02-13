<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiseasesHasSpecialties extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'disease_id',
        'specialty_id'
    ];

    public function diseases()
    {
        return $this->hasMany(Disease::class);
    }
    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }
}
