<?php

namespace Database\Seeders;

use App\Models\mst_barang;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MstBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('mst_barangs')->insert([
        //     'nama' => 'laptop',
        //     'id_category' => 1,
        //     'image' => "coba",
        // ]);

        mst_barang::create([
            'nama' => 'laptop',
            'id_category' => 1,
            'image' => "coba",
        ]);
    }
}
