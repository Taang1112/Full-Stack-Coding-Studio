<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    public function penulis(){
        return $this->belongsTo(Penulis::class);
    }
}
