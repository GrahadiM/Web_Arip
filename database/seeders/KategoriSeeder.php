<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::truncate();
        $kategori = [
            [
                'nama' => 'Thesis',
                'slug' => Str::slug('nama'),
            ],
            [
                'nama' => 'Jurnal',
                'slug' => Str::slug('nama'),
            ],
            [
                'nama' => 'Abstrak',
                'slug' => Str::slug('nama'),
            ],
        ];
        
        foreach ($kategori as $key => $value) {
            Kategori::create($value);
        }
    }
}
