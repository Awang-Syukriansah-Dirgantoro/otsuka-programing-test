<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MstCategoryBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('mst_category_barangs')->insert([
            'nama' => 'produksi',
        ]);

        DB::table('mst_category_barangs')->insert([
            'nama' => 'iot',
        ]);

        DB::table('mst_category_barangs')->insert([
            'nama' => 'it',
        ]);
    }
}
