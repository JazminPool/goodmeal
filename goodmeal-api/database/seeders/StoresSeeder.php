<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyNames = [
            'Barracuda Networks, Inc.', 'New Age Beverages Corporation', 'Civitas Solutions, Inc.', 'Astrotech Corporation', 'Medical Transcription Billing, Corp.', 'Nautilus Group, Inc. (The)', 'Stanley Black & Decker, Inc.', 'Mammoth Energy Services, Inc.', 'Western Asset/Claymore U.S Treasury Inflation Prot Secs Fd 2', 'Blackrock MuniYield Pennsylvania Quality Fund', 'Air Transport Services Group, Inc', 'Davis Select Worldwide ETF', 'Zosano Pharma Corporation', 'MSCI Inc', 'First Midwest Bancorp, Inc.', 'Proteostasis Therapeutics, Inc.', 'Corium International, Inc.', 'Cohu, Inc.', 'CareDx, Inc.', 'Nuveen Diversified Dividend and Income Fund',
        ];

        $dummyAddresses = [
            '10644 Ridgeway Lane', '0 Transport Terrace', '8 Maywood Junction', '2920 Glacier Hill Place', '15 Russell Place', '49 Hoepker Alley', '125 Hallows Avenue', '4 Del Mar Crossing', '2938 Kingsford Hill', '157 Jana Terrace', '8 Buell Terrace', '8 Waywood Street', '7710 Kinsman Court', '79 Morning Place', '9342 Barby Drive', '6 Barby Center', '91379 Spohn Trail', '51 Sundown Point', '68998 Crowley Alley', '7245 Jackson Drive',
        ];

        $dummyOpenAt = [
            '15:47:41', '11:26:45', '08:02:27', '08:41:09', '20:43:42', '08:59:02', '16:43:02', '06:58:53', '19:11:12', '09:21:46', '08:16:12', '18:12:19', '15:53:46', '17:42:39', '11:49:03', '11:05:39', '06:25:24', '20:11:22', '08:20:39', '09:18:55',
        ];

        $dummyCloseAt = [
            '02:45:33', '02:48:08', '04:41:56', '05:01:44', '04:28:54', '05:32:21', '02:58:23', '04:51:54', '02:57:18', '02:57:01', '04:36:17', '02:28:05', '03:34:45', '04:47:43', '04:52:54', '03:55:50', '02:03:40', '04:43:05', '02:01:35', '03:59:40',
        ];

        $dummyScores = [
            '2.5', '3', '3', '3', '5', '3.6', '4.3', '3.6', '3.9', '2.3', '4', '4.4', '4.4', '2.2', '3.4', '2.4', '4.8', '2.3', '3.6', '2.9',
        ];

        $dummyBannersUrl = [
            'http://dummyimage.com/172x100.png/cc0000/ffffff', 'http://dummyimage.com/161x100.png/cc0000/ffffff', 'http://dummyimage.com/199x100.png/cc0000/ffffff', 'http://dummyimage.com/170x100.png/cc0000/ffffff', 'http://dummyimage.com/170x100.png/dddddd/000000', 'http://dummyimage.com/159x100.png/ff4444/ffffff', 'http://dummyimage.com/165x100.png/dddddd/000000', 'http://dummyimage.com/164x100.png/cc0000/ffffff', 'http://dummyimage.com/158x100.png/cc0000/ffffff', 'http://dummyimage.com/102x100.png/dddddd/000000', 'http://dummyimage.com/247x100.png/5fa2dd/ffffff', 'http://dummyimage.com/121x100.png/cc0000/ffffff', 'http://dummyimage.com/139x100.png/ff4444/ffffff', 'http://dummyimage.com/217x100.png/dddddd/000000', 'http://dummyimage.com/219x100.png/5fa2dd/ffffff', 'http://dummyimage.com/135x100.png/5fa2dd/ffffff', 'http://dummyimage.com/234x100.png/5fa2dd/ffffff', 'http://dummyimage.com/176x100.png/cc0000/ffffff', 'http://dummyimage.com/238x100.png/5fa2dd/ffffff', 'http://dummyimage.com/140x100.png/5fa2dd/ffffff',
        ];

        $dummyLogosUrl = [
            'https://robohash.org/nihilcommodinon.png?size=50x50&set=set1', 'https://robohash.org/nonquamomnis.png?size=50x50&set=set1', 'https://robohash.org/enimnemominima.png?size=50x50&set=set1', 'https://robohash.org/officiiscommodinon.png?size=50x50&set=set1', 'https://robohash.org/aliquideumerror.png?size=50x50&set=set1', 'https://robohash.org/sequiaspernaturculpa.png?size=50x50&set=set1', 'https://robohash.org/etearepudiandae.png?size=50x50&set=set1', 'https://robohash.org/delectusomnisnon.png?size=50x50&set=set1', 'https://robohash.org/magnamconsequunturdolor.png?size=50x50&set=set1', 'https://robohash.org/culpamolestiaeest.png?size=50x50&set=set1', 'https://robohash.org/voluptasoditfacere.png?size=50x50&set=set1', 'https://robohash.org/doloribusrecusandaequi.png?size=50x50&set=set1', 'https://robohash.org/cumetnobis.png?size=50x50&set=set1', 'https://robohash.org/assumendalaudantiumut.png?size=50x50&set=set1', 'https://robohash.org/eaqueplaceatut.png?size=50x50&set=set1', 'https://robohash.org/omnisearumprovident.png?size=50x50&set=set1', 'https://robohash.org/occaecatimaioressuscipit.png?size=50x50&set=set1', 'https://robohash.org/nemovoluptasiure.png?size=50x50&set=set1', 'https://robohash.org/estvelitearum.png?size=50x50&set=set1', 'https://robohash.org/rationeveritatisvoluptatum.png?size=50x50&set=set1',
        ];

        $dummyDeliveriesAvailable = [
            'all', 'delivery', 'delivery', 'pickup', 'delivery', 'pickup', 'pickup', 'delivery', 'pickup', 'pickup', 'delivery', 'delivery', 'pickup', 'pickup', 'all', 'delivery', 'all', 'pickup', 'delivery', 'pickup',
        ];

        # insert data 
        for ($i = 0; $i < count($dummyNames); $i++) {
            DB::table('stores')->insert(
                [
                    'name'               => 'Food Truck ' . $dummyNames[$i],
                    'address'            => $dummyAddresses[$i],
                    'open_at'            => date('Y-m-d') . ' ' . $dummyOpenAt[$i],
                    'close_at'           => date('Y-m-d') . ' ' . $dummyCloseAt[$i],
                    'score'              => $dummyScores[$i],
                    'banner_url'         => $dummyBannersUrl[$i],
                    'logo_url'           => $dummyLogosUrl[$i],
                    'delivery_available' => $dummyDeliveriesAvailable[$i],
                ],
            );
        }
    }
}
