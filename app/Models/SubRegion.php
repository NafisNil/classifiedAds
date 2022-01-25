<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRegion extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'region'];
    public function regionName()
    {
        # code...
        return $this->belongsTo(\App\Models\Region::class, 'region','id');
    }
}
