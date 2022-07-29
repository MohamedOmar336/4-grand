<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisement')->truncate();
        $records =  [[
            'id'=>1,
            'titile'=>'cocaCola title',
            'description'=>'cocaCola',
            'type'=>'free',
            'category_id'=>2,
            'tag_id'=>2
        ],[
            'id'=>2,
            'titile'=>'KFC',
            'description'=>'chicken food',
            'type'=>'paid',
            'category_id'=>1,
            'tag_id'=>1
        ],
        [
            'id'=>3,
            'titile'=>'Adidas',
            'description'=>'clothes is important',
            'type'=>'paid',
            'category_id'=>5,
            'tag_id'=>4
        ],[
            'id'=>4,
            'titile'=>'Spurs',
            'description'=>' football team',
            'type'=>'paid',
            'category_id'=>4,
            'tag_id'=>2
        ],[
            'id'=>5,
            'titile'=>'Brancalona',
            'description'=>'football best team',
            'type'=>'paid',
            'category_id'=>4,
            'tag_id'=>3
        ]];

        DB::table('advertisement')->insert($records);

    }
}
