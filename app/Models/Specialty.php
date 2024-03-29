<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialty extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];
    public function diseasesspecialties()
    {
        return $this->hasMany(DiseasesHasSpecialties::class);
    }
    public function servicesspecialties()
    {
        return $this->belongsToMany(ServicesHasSpecialties::class);
    }
    public function doctorspecialties()
    {
        return $this->belongsToMany(DoctorsHasSpecialties::class);
    }
}
