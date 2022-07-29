<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
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
        DB::table('category')->truncate();
        $records = [[
            'id'=>'1',
            'name'=>'food',
        ],[
            'id'=>'2',
            'name'=>'drink',
        ],[
            'id'=>'3',
            'name'=>'medical',
        ],[
            'id'=>'4',
            'name'=>'sport',
        ],[
            'id'=>'5',
            'name'=>'clothes',
        ]];
        DB::table('category')->insert($records);

    }
}
