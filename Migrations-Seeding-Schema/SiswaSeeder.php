<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_siswa')->insert([
            [
                'nama_siswa' => 'Ahmad Fauzi',
                'nis_siswa' => '20250001',
                'kelas' => '10 IPA 1',
            ],
            [
                'nama_siswa' => 'Siti Aminah',
                'nis_siswa' => '20250002',
                'kelas' => '11 IPS 1',
            ],
            [
                'nama_siswa' => 'Doni Setiawan',
                'nis_siswa' => '20250003',
                'kelas' => '12 IPA 3',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
