<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $guarded = [];

    protected $table = "jenis";

    protected $fillable = ["nama_jenis"];

   public function barang()
   {
    return $this->hasMany(barang::class);
   }
}
