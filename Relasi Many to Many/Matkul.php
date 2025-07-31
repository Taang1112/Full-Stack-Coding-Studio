<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    public function siswa()
    {
        return $this->belongsToMany(Siswa::class);
    }
}
