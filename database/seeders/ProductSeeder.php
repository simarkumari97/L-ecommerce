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
        DB::table('products')->insert([
            ['name'=>'Xiaomi Redmi Note 9 Pro',
            'price'=>'277',
            'category'=>'mobile',
            'description'=>'Released 2020, May 05 209g, 8.8mm thickness Android 10, MIUI 11 64GB/128GB storage, microSDXC',
            'gallery'=>"https://www.xda-developers.com/files/2020/03/redmi-note-9-pro-featured-1.jpg"
            ],

            ['name'=>'Apple Watch Series 5',
            'price'=>'510',
            'category'=>'watch',
            'description'=>'LTPO OLED Always-On Retina Display  Digital Crown with Haptic Feedback Generate Your Own ECG  Fall Detection + SOS Emergency',
            'gallery'=>"https://cdn.vox-cdn.com/thumbor/nNny2s4SXAFkxlRqOuqVQwSPZKQ=/0x0:1073x605/920x613/filters:focal(452x218:622x388):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/67410318/download__1_.0.png"
            ],

            ['name'=>'OnePlus 8T',
            'price'=>'297',
            'category'=>'mobile',
            'description'=>'Released 2020, May 05 209g, 8.8mm thickness Android 10, MIUI 11 64GB/128GB storage, microSDXC',
            'gallery'=>"https://www.xda-developers.com/files/2020/10/OnePlus-8T-Screen-Protector-Feature-Images.jpg"
            ],

            ['name'=>' Apple iPhone Bluetooth Headset',
            'price'=>'120',
            'category'=>'bluetooth',
            'description'=>'Released 2020, May 05 209g, 8.8mm thickness Android 10, MIUI 11 64GB/128GB storage, microSDXC',
            'gallery'=>"https://photos2.insidercdn.com/apple-bluetooth-headset-unbox-7.jpg"
        ],
            ['name'=>'Vivo V20',
            'price'=>'197',
            'category'=>'mobile',
            'description'=>'Released 2020, May 05 209g, 8.8mm thickness Android 10, MIUI 11 64GB/128GB storage, microSDXC',
            'gallery'=>"https://klgadgetguy.com/wp-content/uploads/2020/09/vivoV20SE-2.jpg"
            ]
        ]);
    }
}
