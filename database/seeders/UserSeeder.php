<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'firstname' => "Nick",
                    'lastname' => "Luu",
                    'password' => '$2y$10$XSTGIriHqrnd3prn4neEkuzCt52f6DvYekWlH95tAMTG.f2gickz2',
                ],
            ]
        );
    }
}
