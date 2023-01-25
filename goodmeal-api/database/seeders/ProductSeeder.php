<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyNames = [
            'Cheese - Manchego, Spanish', 'Wine - Cave Springs Dry Riesling', 'Cheese - Taleggio D.o.p.', 'Wine - White, French Cross', 'Bread - Multigrain Oval', 'Swiss Chard - Red', 'Vinegar - Red Wine', 'Dr. Pepper - 355ml', 'Longos - Grilled Chicken With', 'Cheese - Pied De Vents', 'Potatoes - Yukon Gold 5 Oz', 'Tomatoes Tear Drop', 'Orange Roughy 4/6 Oz', 'Carbonated Water - White Grape', 'Pasta - Fettuccine, Dry', 'Broom - Corn', 'Salmon - Atlantic, No Skin', 'Oil - Macadamia', 'Fiddlehead - Frozen', 'Club Soda - Schweppes, 355 Ml',
        ];

        $dummyImages = [
            'https://robohash.org/nihilcommodinon.png?size=50x50&set=set1', 'https://robohash.org/nonquamomnis.png?size=50x50&set=set1', 'https://robohash.org/enimnemominima.png?size=50x50&set=set1', 'https://robohash.org/officiiscommodinon.png?size=50x50&set=set1', 'https://robohash.org/aliquideumerror.png?size=50x50&set=set1', 'https://robohash.org/sequiaspernaturculpa.png?size=50x50&set=set1', 'https://robohash.org/etearepudiandae.png?size=50x50&set=set1', 'https://robohash.org/delectusomnisnon.png?size=50x50&set=set1', 'https://robohash.org/magnamconsequunturdolor.png?size=50x50&set=set1', 'https://robohash.org/culpamolestiaeest.png?size=50x50&set=set1', 'https://robohash.org/voluptasoditfacere.png?size=50x50&set=set1', 'https://robohash.org/doloribusrecusandaequi.png?size=50x50&set=set1', 'https://robohash.org/cumetnobis.png?size=50x50&set=set1', 'https://robohash.org/assumendalaudantiumut.png?size=50x50&set=set1', 'https://robohash.org/eaqueplaceatut.png?size=50x50&set=set1', 'https://robohash.org/omnisearumprovident.png?size=50x50&set=set1', 'https://robohash.org/occaecatimaioressuscipit.png?size=50x50&set=set1', 'https://robohash.org/nemovoluptasiure.png?size=50x50&set=set1', 'https://robohash.org/estvelitearum.png?size=50x50&set=set1', 'https://robohash.org/rationeveritatisvoluptatum.png?size=50x50&set=set1',
        ];

        # insert data 
        for ($i = 0; $i < count($dummyNames); $i++) {
            DB::table('products')->insert(
                [
                    'name'        => $dummyNames[$i],
                    'image_url'   => $dummyImages[$i],
                    'id_category' => rand(1, 7),
                ],
            );
        }
    }
}
