<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;


class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            [
                'nama' => 'Trisna Fitri',
                'nim' => '1204220099',
                'email' => 'trisna@example.com',
                'angkatan' => '2022',
                'telepon' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Leon',
                'nim' => '1204230088',
                'email' => 'leon@example.com',
                'angkatan' => '2023',
                'telepon' => '085678912345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Miki',
                'nim' => '1204240011',
                'email' => 'miki@example.com',
                'angkatan' => '2024',
                'telepon' => '081234567892',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'nim' => '1204210086',
                'email' => 'sitiam@example.com',
                'angkatan' => '2021',
                'telepon' => '081234567894',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dian Dion',
                'nim' => '1204200097',
                'email' => 'diandion@example.com',
                'angkatan' => '2020',
                'telepon' => '081234567895',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
