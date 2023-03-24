<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    function addons() {
        return $this->belongsToMany(Addon::class);
    }
    function category() {
        return $this->belongsTo(Category::class);
    }
}
