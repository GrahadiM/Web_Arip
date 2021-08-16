<?php

namespace Database\Seeders;

use App\Models\SubTopik;
use Illuminate\Database\Seeder;

class SubTopikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubTopik::truncate();
        $subtopik = [
            //Dasar Matematika = 7
            [
                'topik_id' => '1',
                'nama' => 'Aljabar Boolean',
            ],
            [
                'topik_id' => '1',
                'nama' => 'Matematika Diskrit',
            ],
            [
                'topik_id' => '1',
                'nama' => 'Kalkulus',
            ],
            [
                'topik_id' => '1',
                'nama' => 'Teori Graf',
            ],
            [
                'topik_id' => '1',
                'nama' => 'Teori Informasi',
            ],
            [
                'topik_id' => '1',
                'nama' => 'Logika Simbolik',
            ],
            [
                'topik_id' => '1',
                'nama' => 'Peluang dan Statistik',
            ],
            // Teori Ilmu Komputer = 5
            [
                'topik_id' => '2',
                'nama' => 'Teori Informasi Algoritmik',
            ],
            [
                'topik_id' => '2',
                'nama' => 'Kompilator',
            ],
            [
                'topik_id' => '2',
                'nama' => 'Kriptografi',
            ],
            [
                'topik_id' => '2',
                'nama' => 'Semantik Denotasional',
            ],
            [
                'topik_id' => '2',
                'nama' => 'Teori Komputasi',
            ],
            // Perangkat Lunak = 6
            [
                'topik_id' => '3',
                'nama' => 'Program Komputer (Spesifikasi dan Verifikasi Program)',
            ],
            [
                'topik_id' => '3',
                'nama' => 'Teknik Pemrograman',
            ],
            [
                'topik_id' => '3',
                'nama' => 'Perangkat Komputer',
            ],
            [
                'topik_id' => '3',
                'nama' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'topik_id' => '3',
                'nama' => 'Bahasa Pemrograman',
            ],
            [
                'topik_id' => '3',
                'nama' => 'Sistem Operasi',
            ],
            // Organisasi Sistem Komputer = 6
            [
                'topik_id' => '4',
                'nama' => 'Arsitektur Komputer',
            ],
            [
                'topik_id' => '4',
                'nama' => 'Jaringan Komputer',
            ],
            [
                'topik_id' => '4',
                'nama' => 'Komputasi Terdistribusi',
            ],
            [
                'topik_id' => '4',
                'nama' => 'Komputasi Grid',
            ],
            [
                'topik_id' => '4',
                'nama' => 'Kinerja dari Sistem',
            ],
            [
                'topik_id' => '4',
                'nama' => 'Implementasi dari Sistem Komputer',
            ],
            // Data dan Sistem Informasi = 7
            [
                'topik_id' => '5',
                'nama' => 'Struktur Data',
            ],
            [
                'topik_id' => '5',
                'nama' => 'Representasi Penyimpanan Data',
            ],
            [
                'topik_id' => '5',
                'nama' => 'Entripsi Data',
            ],
            [
                'topik_id' => '5',
                'nama' => 'Komperasi Data',
            ],
            [
                'topik_id' => '5',
                'nama' => 'Pengkodean dan Teori Informasi',
            ],
            [
                'topik_id' => '5',
                'nama' => 'Berkas',
            ],
            [
                'topik_id' => '5',
                'nama' => 'Sistem Informasi',
            ],
            // Metodologi Kumputasi = 8
            [
                'topik_id' => '6',
                'nama' => 'Manipulasi Simbolik dan Aljabar',
            ],
            [
                'topik_id' => '6',
                'nama' => 'Kecerdasan Buatan',
            ],
            [
                'topik_id' => '6',
                'nama' => 'Grafik Komputer',
            ],
            [
                'topik_id' => '6',
                'nama' => 'Pengolahan Citra dan Visi Komputer',
            ],
            [
                'topik_id' => '6',
                'nama' => 'Pengenalan Pola',
            ],
            [
                'topik_id' => '6',
                'nama' => 'Simulasi dan Pemodelan',
            ],
            [
                'topik_id' => '6',
                'nama' => 'Pengolahan Dokumen dan Teks',
            ],
            [
                'topik_id' => '6',
                'nama' => 'Pengolahan Sinyal Digital',
            ],
            // Aplikasi Komputer = 7
            [
                'topik_id' => '7',
                'nama' => 'Pengolahan Data Administratif',
            ],
            [
                'topik_id' => '7',
                'nama' => 'Perangkat Lunak Matematika',
            ],
            [
                'topik_id' => '7',
                'nama' => 'Ilmu dan Teknik Fisika',
            ],
            [
                'topik_id' => '7',
                'nama' => 'Ilmu Hayati dan Medis',
            ],
            [
                'topik_id' => '7',
                'nama' => 'Robotik',
            ],
            [
                'topik_id' => '7',
                'nama' => 'Interaksi Manusia dan Komputer',
            ],
            [
                'topik_id' => '7',
                'nama' => 'Rekayasa berbantuan Komputer',
            ],
            // Lingkungan Komputer = 8
            [
                'topik_id' => '8',
                'nama' => 'Industri Komputer',
            ],
            [
                'topik_id' => '8',
                'nama' => 'Sejarah dari Perhitungan',
            ],
            [
                'topik_id' => '8',
                'nama' => 'Komputer dan Pendidikan',
            ],
            [
                'topik_id' => '8',
                'nama' => 'Komputer dan Masyarakat',
            ],
            [
                'topik_id' => '8',
                'nama' => 'Aspek Hukum dari Komputer',
            ],
            [
                'topik_id' => '8',
                'nama' => 'Manajemen dari Komputasi dan Sistem Informasi',
            ],
            [
                'topik_id' => '8',
                'nama' => 'Personal Komputer',
            ],
            [
                'topik_id' => '8',
                'nama' => 'Komputer dan Keamanan Informasi',
            ],
        ];
        
        foreach ($subtopik as $key => $value) {
            SubTopik::create($value);
        }
    }
}
