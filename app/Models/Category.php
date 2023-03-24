<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded = false;


    function services() {
        return $this->hasMany(Service::class);  
    }
    protected static function boot()
    {
        parent::boot();
        
        static::deleting(function ($category) {
            $category->services()->delete();
        });
    }

}

