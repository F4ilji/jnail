<?php

namespace App\Models;

use App\Models\Addon;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded = false;

    function service() {
        return $this->belongsTo(Service::class);
    }
    function addons() {
        return $this->belongsToMany(Addon::class);
    }

}
