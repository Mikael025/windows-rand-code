<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\barang;

class jenis extends Model
{
    protected $fillable = [
        "nama_jenis"
    ];

    public function barang (){
        return $this->hasMany(barang::class);
    }
}
