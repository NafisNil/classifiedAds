<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'category', 'premium', 'weekly', 'desc', 'location', 'phone', 'email', 'age', 'cost'];
    public function cityName()
    {
        # code...
        return $this->belongsTo(\App\Models\City::class, 'city','id');
    }
    public function subcategoryName()
    {
        # code...
        return $this->belongsTo(\App\Models\Subcategory::class, 'subcategory','id');
    }

    public function userName()
    {
        # code...
        return $this->belongsTo(\App\Models\User::class, 'user','id');
    }
}
