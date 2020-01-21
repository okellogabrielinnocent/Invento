<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['code', 'size', 'name', 'cost','saleable', 'quantity', 'minimum_quantity', 'brand'];
}
