<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = [
        'nama_barang','jumlah_barang','id_jenis'
    ];

    protected $table = "barang";
    
    public function jenis()
    {
        return $this->belongsTo(jenis::class,'id_jenis');
    }
}
