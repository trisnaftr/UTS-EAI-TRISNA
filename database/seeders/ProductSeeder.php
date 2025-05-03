<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
                [
                    'judul_buku' => 'It Ends with Us',
                    'penulis' => 'Colleen Hoover',
                    'penerbit' => 'Atria Books',
                    'tahun_terbit' => '2022',
                    'kategori' => 'Romantis',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'judul_buku' => 'The Midnight Library',
                    'penulis' => 'Matt Haig',
                    'penerbit' => 'Canongate Books',
                    'tahun_terbit' => '2022',
                    'kategori' => 'Fiksi',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'judul_buku' => 'Atomic Habits',
                    'penulis' => 'James Clear',
                    'penerbit' => 'Avery',
                    'tahun_terbit' => '2022',
                    'kategori' => 'Pengembangan Diri',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'judul_buku' => 'Spare',
                    'penulis' => 'Prince Harry',
                    'penerbit' => 'Penguin Random House',
                    'tahun_terbit' => '2023',
                    'kategori' => 'Biografi',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'judul_buku' => 'Fourth Wing',
                    'penulis' => 'Rebecca Yarros',
                    'penerbit' => 'Red Tower Books',
                    'tahun_terbit' => '2023',
                    'kategori' => 'Fantasi',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
        ]);
    }
}
