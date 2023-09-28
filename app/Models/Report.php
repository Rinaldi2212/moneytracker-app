<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate random reports data
        foreach (range(1, 10) as $index) {
            DB::table('reports')->insert([
                'user_id' => $faker->numberBetween(1, 10),
                'tanggal_laporan' => $faker->date(),
                'jenis_laporan' => $faker->randomElement(['harian', 'mingguan', 'bulanan']),
                'total_pemasukan' => $faker->randomFloat(2, 100, 1000),
                'total_pengeluaran' => $faker])
            }
        }
    }
