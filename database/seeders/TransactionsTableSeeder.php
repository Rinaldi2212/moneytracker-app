<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $transactions = [
            [
                'user_id' => 1,
                'tanggal' => now(),
                'jenis_transaksi' => 'pemasukan',
                'nominal_transaksi' => 1000.00,
                'keterangan' => 'Pemasukan pertama',
            ],
            [
                'user_id' => 2,
                'tanggal' => now(),
                'jenis_transaksi' => 'pengeluaran',
                'nominal_transaksi' => 500.00,
                'keterangan' => 'Pengeluaran pertama',
            ],
            // Tambahkan data transaksi lainnya sesuai kebutuhan
        ];

        // Insert data ke dalam tabel 'transactions'
        DB::table('transactions')->insert($transactions);
    }
}
