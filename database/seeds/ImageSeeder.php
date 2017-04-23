<?php

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();

        Image::create([
            'path' => '/img/cars/',
            'filename' => '1.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '2.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '3.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '4.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '5.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '6.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '7.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '8.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '9.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '10.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '11.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '12.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '13.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '14.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '15.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '16.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '17.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '18.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '19.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '20.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '21.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '22.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '23.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '24.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '25.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '26.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '27.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '28.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '29.jpg'
        ]);

        Image::create([
            'path' => '/img/cars/',
            'filename' => '30.jpg'
        ]);
    }
}
