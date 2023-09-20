<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('payments')->delete();
        $payments = [
            [
                'id' => '1',
                'id_user' => '1',
                'id_product' => '9',
                'bank_account_number' => '112412452',
                'bank' => 'ACB',
                'account_holder_name' => 'TEST',
                'total_amount' => '10150000',
                'state' => '1',
            ],
            [
                'id' => '2',
                'id_user' => '2',
                'id_product' => '9',
                'bank_account_number' => '345346534',
                'bank' => 'BIDV',
                'account_holder_name' => 'TEST2',
                'total_amount' => '10150000',
                'state' => '1',
            ],
        ];
        DB::table('payments')->insert($payments);
    }
}
