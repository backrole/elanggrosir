<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukMasuk extends Model
{
    protected $guarded = [];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function jenisProduk()
    {
        return $this->belongsTo(JenisProduk::class);
    }
}
