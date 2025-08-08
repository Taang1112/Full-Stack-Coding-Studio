<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public function buku(){
        return $this->hasMany(Buku::class);
    }
}
