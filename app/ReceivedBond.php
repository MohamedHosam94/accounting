<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceivedBond extends Model
{
    //


    protected $guarded = [];


    
    public function user()
    {
        return $this->belongsto(User::class);

    }
}
