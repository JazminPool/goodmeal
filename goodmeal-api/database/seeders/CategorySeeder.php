<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyNames = ['Snacks', 'Lácteos y quesos', 'Congelados', 'Aderezos', 'Harinas', 'Enlatados', 'Pastas',];

        $dummyCodes = ['snacks', 'dairy_cheeses', 'frozen', 'dressings', 'flours', 'canned', 'pasta'];

        # insert data 
        for ($i = 0; $i < count($dummyNames); $i++) {
            DB::table('categories')->insert(
                [
                    'code' => $dummyCodes[$i],
                    'name' => $dummyNames[$i],
                ],
            );
        }
    }
}
