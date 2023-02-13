<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesHasSpecialties extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'service_id',
        'specialty_id'
    ];
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }
}
