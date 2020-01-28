<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Service extends Model
{
    protected $fillable = [
        'name',
        'price'
    ];

    protected function items()
    {
        return $this->hasMany(App\Models\Item);
    }

    protected function sales()
    {
        return $this->hasMany(App\Models\Sale);
    }
}
