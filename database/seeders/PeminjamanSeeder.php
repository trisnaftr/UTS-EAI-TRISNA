<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peminjaman;
use Carbon\Carbon;


class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peminjaman::insert([
            [
                'student_id'   => 1,
                'product_id'   => 2,
                'borrowed_at'  => Carbon::now()->subDays(3),
            ],
            [
                'student_id'   => 2,
                'product_id'   => 1,
                'borrowed_at'  => Carbon::now()->subDays(5),
            ],
            [
                'student_id'   => 1,
                'product_id'   => 3,
                'borrowed_at'  => Carbon::now()->subDays(1),
            ],
            [
                'student_id'   => 3,
                'product_id'   => 2,
                'borrowed_at'  => Carbon::now()->subDays(7),
            ],
            [
                'student_id'   => 2,
                'product_id'   => 4,
                'borrowed_at'  => Carbon::now(),
            ],
        ]);

    }
}
