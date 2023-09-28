<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $reports = [
            [
                'user_id' => 1,
                'tanggal_laporan' => now(),
                'jenis_laporan' => 'harian',
                'total_pemasukan' => 1000.00,
                'total_pengeluaran' => 500.00,
                'saldo_akhir' => 500.00,
            ],
            [
                'user_id' => 2,
                'tanggal_laporan' => now(),
                'jenis_laporan' => 'mingguan',
                'total_pemasukan' => 2000.00,
                'total_pengeluaran' => 1000.00,
                'saldo_akhir' => 1000.00,
            ],
            // Tambahkan data laporan lainnya sesuai kebutuhan
        ];

        // Insert data ke dalam tabel 'reports'
        DB::table('reports')->insert($reports);
    }
}
