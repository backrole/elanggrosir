<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(JenisProdukSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ProdukMasukSeeder::class);
    }
}
