<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'last_name',
        'last_name_second',
        'phone_number',
        'cel_number',
        'address',
        'profecional_license',
        'team_id',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function establishment()
    {
        return $this->hasMany(Establishment::class);
    }
    public function taxdata()
    {
        return $this->hasOne(Taxdata::class);
    }
    public function doctorspecialties()
    {
        return $this->belongsToMany(DoctorsHasSpecialties::class);
    }
}
