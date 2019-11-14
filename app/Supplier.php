<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];

    public function produkMasuk()
    {
        return $this->hasMany(ProdukMasuk::class);
    }
}
