<?php

use App\JenisProduk;
use Illuminate\Database\Seeder;

class JenisProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(JenisProduk::class, 10)->create();
    }
}
