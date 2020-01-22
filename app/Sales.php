<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable=[
        'name',
        'service_id',
        'user_id'
    ];
    protected function user(){
        return $this->belongsTo(App\Models\User);
    }
    protected function service(){
        return $this->belongsTo(App\Models\Service);
    }
}
