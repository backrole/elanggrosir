<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    protected $guarded = [];

    public function produkMasuk()
    {
        return $this->hasMany(ProdukMasuk::class);
    }
}
