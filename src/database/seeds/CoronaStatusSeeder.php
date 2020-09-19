<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoronaStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('corona_status')->insert([
            [
                'code' => 'lt',
                'is_affected' => false,
            ], [
                'code' => 'pl',
                'is_affected' => true,
            ], [
                'code' => 'cz',
                'is_affected' => false,
            ], [
                'code' => 'ru',
                'is_affected' => true,
            ], [
                'code' => 'by',
                'is_affected' => false,
            ], [
                'code' => 'fn',
                'is_affected' => false,
            ]
        ]);
    }
}
