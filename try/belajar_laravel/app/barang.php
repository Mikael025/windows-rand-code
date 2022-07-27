<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\jenis;

class barang extends Model
{
    protected $fillable = [
        'nama_barang','jumlah_barang'
    ];
    

    public function jenis ()
    {
        return $this->belongsToMany(jenis::class);
    }
}
