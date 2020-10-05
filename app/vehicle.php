<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    //
    public function owner(){
        return $this->belongsTo(owner::class);
    }
    public function driver(){
        return $this->belongsTo(driver::class);
    }
    public function kind_vehicle(){
        return $this->belongsTo(kind_vehicle::class);
    }
}
