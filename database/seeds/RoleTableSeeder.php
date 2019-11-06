<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 2; $i++) {
            if ($i == 1) {
                DB::table('user_roles')->insert([
                    'role' => $i,
                    'keterangan' => 'admin'
                ]);
            } else if ($i == 2) {
                DB::table('user_roles')->insert([
                    'role' => $i,
                    'keterangan' => 'karyawan',
                ]);
            }
        }
    }
}
