<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert(
            [
                'npm' => '2226240092',
                'nama_mahasiswa' =>'Alya Putri Rizaldy',
                'tanggal_lahir'=>'2005-01-01',
                'tempat_lahir'=> 'Palembang',
                'alamat' => 'Jl.Sersan Sani',
                'prodi_id' => 1,
                'created_at' => now()
            ]
        );
    }
}
