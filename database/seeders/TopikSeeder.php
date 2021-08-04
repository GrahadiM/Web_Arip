<?php

namespace Database\Seeders;

use App\Models\Topik;
use Illuminate\Database\Seeder;

class TopikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topik::truncate();
        $topik = [
            [
                'nama' => 'Dasar Matematika',
                'nama_en' => 'Basic Math',
            ],
            [
                'nama' => 'Teori Ilmu Komputer',
                'nama_en' => 'Computer Science Theory',
            ],
            [
                'nama' => 'Perangkat Lunak',
                'nama_en' => 'Software',
            ],
            [
                'nama' => 'Organisasi Sistem Komputer',
                'nama_en' => 'Computer System Organization',
            ],
            [
                'nama' => 'Data dan Sistem Informasi',
                'nama_en' => 'Data and Information Systems',
            ],
            [
                'nama' => 'Metodologi Kumputasi',
                'nama_en' => 'Computational Methodology',
            ],
            [
                'nama' => 'Aplikasi Komputer',
                'nama_en' => 'Computer application',
            ],
            [
                'nama' => 'Lingkungan Komputer',
                'nama_en' => 'Computer Environment',
            ],
        ];
        
        foreach ($topik as $key => $value) {
            Topik::create($value);
        }
    }
}
