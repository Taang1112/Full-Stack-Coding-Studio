<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function matkul()
    {
        return $this->belongsToMany(Matkul::class);
    }
}
