<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category'];
    public function categoryName()
    {
        # code...
        return $this->belongsTo(\App\Models\Category::class, 'category','id');
    }
}
