<?php

namespace Database\Seeders;

use App\Models\mst_user;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // mst_user::create([
        //     'name' => 'admin',
        //     'username' => 'admin',
        //     'password' => 'password',
        //     'role' => 'admin',
        // ]);
        DB::table('mst_users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        DB::table('mst_users')->insert([
            'name' => 'user',
            'username' => 'user',
            'password' => Hash::make('password'),
            'role' => 'pengguna'
        ]);

        DB::table('mst_users')->insert([
            'name' => 'approval',
            'username' => 'approval',
            'password' => Hash::make('password'),
            'role' => 'approval'
        ]);
    }
}
