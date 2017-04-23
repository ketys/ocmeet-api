<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->delete();

        $vc1_id = DB::table('voting_categories')->select('id')->where('name', 'mk1')->first()->id;
        $vc2_id = DB::table('voting_categories')->select('id')->where('name', 'mk2')->first()->id;
        $vc3_id = DB::table('voting_categories')->select('id')->where('name', 'mk3')->first()->id;

        $user1_id = DB::table('users')->select('id')->where('nickname', 'ketys')->first()->id;
        $user2_id = DB::table('users')->select('id')->where('nickname', 'raymon')->first()->id;
        $user3_id = DB::table('users')->select('id')->where('nickname', 'kisap')->first()->id;
        $user4_id = DB::table('users')->select('id')->where('nickname', 'monty')->first()->id;
        $user5_id = DB::table('users')->select('id')->where('nickname', 'jack')->first()->id;
        $user6_id = DB::table('users')->select('id')->where('nickname', 'tom')->first()->id;
        $user7_id = DB::table('users')->select('id')->where('nickname', 'jerry')->first()->id;
        $user8_id = DB::table('users')->select('id')->where('nickname', 'lancelot')->first()->id;
        $user9_id = DB::table('users')->select('id')->where('nickname', 'hanes')->first()->id;
        $user10_id = DB::table('users')->select('id')->where('nickname', 'lupino')->first()->id;

        $image1_id = DB::table('images')->select('id')->where('filename', '1.jpg')->first()->id;
        $image2_id = DB::table('images')->select('id')->where('filename', '2.jpg')->first()->id;
        $image3_id = DB::table('images')->select('id')->where('filename', '3.jpg')->first()->id;
        $image4_id = DB::table('images')->select('id')->where('filename', '4.jpg')->first()->id;
        $image5_id = DB::table('images')->select('id')->where('filename', '5.jpg')->first()->id;
        $image6_id = DB::table('images')->select('id')->where('filename', '6.jpg')->first()->id;
        $image7_id = DB::table('images')->select('id')->where('filename', '7.jpg')->first()->id;
        $image8_id = DB::table('images')->select('id')->where('filename', '8.jpg')->first()->id;
        $image9_id = DB::table('images')->select('id')->where('filename', '9.jpg')->first()->id;
        $image10_id = DB::table('images')->select('id')->where('filename', '10.jpg')->first()->id;
        $image11_id = DB::table('images')->select('id')->where('filename', '11.jpg')->first()->id;
        $image12_id = DB::table('images')->select('id')->where('filename', '12.jpg')->first()->id;
        $image13_id = DB::table('images')->select('id')->where('filename', '13.jpg')->first()->id;
        $image14_id = DB::table('images')->select('id')->where('filename', '14.jpg')->first()->id;
        $image15_id = DB::table('images')->select('id')->where('filename', '15.jpg')->first()->id;
        $image16_id = DB::table('images')->select('id')->where('filename', '16.jpg')->first()->id;
        $image17_id = DB::table('images')->select('id')->where('filename', '17.jpg')->first()->id;
        $image18_id = DB::table('images')->select('id')->where('filename', '18.jpg')->first()->id;
        $image19_id = DB::table('images')->select('id')->where('filename', '19.jpg')->first()->id;
        $image20_id = DB::table('images')->select('id')->where('filename', '20.jpg')->first()->id;
        $image21_id = DB::table('images')->select('id')->where('filename', '21.jpg')->first()->id;
        $image22_id = DB::table('images')->select('id')->where('filename', '22.jpg')->first()->id;
        $image23_id = DB::table('images')->select('id')->where('filename', '23.jpg')->first()->id;
        $image24_id = DB::table('images')->select('id')->where('filename', '24.jpg')->first()->id;
        $image25_id = DB::table('images')->select('id')->where('filename', '25.jpg')->first()->id;
        $image26_id = DB::table('images')->select('id')->where('filename', '26.jpg')->first()->id;
        $image27_id = DB::table('images')->select('id')->where('filename', '27.jpg')->first()->id;
        $image28_id = DB::table('images')->select('id')->where('filename', '28.jpg')->first()->id;
        $image29_id = DB::table('images')->select('id')->where('filename', '29.jpg')->first()->id;
        $image30_id = DB::table('images')->select('id')->where('filename', '30.jpg')->first()->id;

        Car::create([
            'number' => 1,
            'description' => '1,9 TDI 66kW - "Otloukánek" - tvrdil jsem že na něho nesáhnu,ale nevydržel jsem. ===> Stage 2: 198Hp by TDIfun',
            'image_id' => $image1_id,
            'voting_category_id' => $vc1_id,
            'user_id' => $user10_id
        ]);

        Car::create([
            'number' => 2,
            'description' => null,
            'image_id' => $image2_id,
            'voting_category_id' => $vc1_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 3,
            'description' => null,
            'image_id' => $image3_id,
            'voting_category_id' => $vc2_id,
            'user_id' => $user9_id
        ]);

        Car::create([
            'number' => 4,
            'description' => 'Škoda Octavia 1.9 TDi AHF 1xxPS@3xxNm - Stage II in progress  ... Proste sa nedá robiť z Trabanta Porsche',
            'image_id' => $image4_id,
            'voting_category_id' => $vc1_id,
            'user_id' => $user8_id
        ]);

        Car::create([
            'number' => 5,
            'description' => null,
            'image_id' => $image5_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 6,
            'description' => null,
            'image_id' => $image6_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 7,
            'description' => null,
            'image_id' => $image7_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 8,
            'description' => '1,9 tdi 81kw asv r,v, 2002 barva šedá stone metaliza vybava 4xel okna+zrcátka,4x airbag, clima manual, vyhřivané sedačky, 16alu kola Enzo cup',
            'image_id' => $image8_id,
            'voting_category_id' => $vc2_id,
            'user_id' => $user7_id
        ]);

        Car::create([
            'number' => 9,
            'description' => null,
            'image_id' => $image9_id,
            'voting_category_id' => $vc1_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 10,
            'description' => null,
            'image_id' => $image10_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 11,
            'description' => null,
            'image_id' => $image11_id,
            'voting_category_id' => $vc1_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 12,
            'description' => null,
            'image_id' => $image12_id,
            'voting_category_id' => $vc3_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 13,
            'description' => 'O1 2.0 MPi /AQY/ 85kW, 2001 - od 87tkm, nyní 124 tkm, LPG OMVL',
            'image_id' => $image13_id,
            'voting_category_id' => $vc1_id,
            'user_id' => $user6_id
        ]);

        Car::create([
            'number' => 14,
            'description' => 'Škoda Octavia 2.0TDI 2013, 135kw, chip na 155kw',
            'image_id' => $image14_id,
            'voting_category_id' => $vc3_id,
            'user_id' => $user5_id
        ]);

        Car::create([
            'number' => 15,
            'description' => null,
            'image_id' => $image15_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 16,
            'description' => null,
            'image_id' => $image16_id,
            'voting_category_id' => $vc3_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 17,
            'description' => null,
            'image_id' => $image17_id,
            'voting_category_id' => $vc1_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 18,
            'description' => null,
            'image_id' => $image18_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 19,
            'description' => null,
            'image_id' => $image19_id,
            'voting_category_id' => $vc1_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 20,
            'description' => null,
            'image_id' => $image20_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 21,
            'description' => 'OII black limited edition, bílá interiér, pouze 10ks vyrobených a prodaných v ČR k 10. výročí Octavie',
            'image_id' => $image21_id,
            'voting_category_id' => $vc2_id,
            'user_id' => $user4_id
        ]);

        Car::create([
            'number' => 22,
            'description' => null,
            'image_id' => $image22_id,
            'voting_category_id' => $vc1_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 23,
            'description' => null,
            'image_id' => $image23_id,
            'voting_category_id' => $vc2_id,
            'user_id' => $user3_id
        ]);

        Car::create([
            'number' => 24,
            'description' => null,
            'image_id' => $image24_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 25,
            'description' => null,
            'image_id' => $image25_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 26,
            'description' => null,
            'image_id' => $image26_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 27,
            'description' => null,
            'image_id' => $image27_id,
            'voting_category_id' => $vc2_id,
            'user_id' => $user2_id
        ]);

        Car::create([
            'number' => 28,
            'description' => null,
            'image_id' => $image28_id,
            'voting_category_id' => $vc1_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 29,
            'description' => null,
            'image_id' => $image29_id,
            'voting_category_id' => $vc2_id,
            'user_id' => null
        ]);

        Car::create([
            'number' => 30,
            'description' => 'MK1 Octavia, RS packet, béžový interiér, 18x8.5J litá kola, snížený sportovní podvozek LOWTEC 40/30, EGR OFF, KAT OFF, FMIC, Hybrid TSA180 - 154PS@320Nm',
            'image_id' => $image30_id,
            'voting_category_id' => $vc1_id,
            'user_id' => $user1_id
        ]);
    }
}
