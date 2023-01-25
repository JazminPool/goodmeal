<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = 50;

        # insert data 
        for ($i = 0; $i < $records; $i++) {
            DB::table('products_stores')->insert(
                [
                    'id_products'  => rand(1, 20),
                    'id_store'     => rand(1, 20),
                    'price'        => rand(4, 100),
                    'discount'     => rand(0, 100),
                ],
            );
        }
    }
}
