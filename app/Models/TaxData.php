<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxData extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'curp',
        'rfc',
        'tax_data',
        'address',
        'doctor_id',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
