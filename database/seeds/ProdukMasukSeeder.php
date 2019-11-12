<?php

use App\ProdukMasuk;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProdukMasuk::class, 20)->create();
    }
}
