<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Risam, S.T',
            'username' => 'admin.siak',
            'password' => Hash::make('Qaz951753&%#'),
            'email' => 'risam1984@gmail.com',
            'role' => 'superadmin'
        ]);
    }
}
