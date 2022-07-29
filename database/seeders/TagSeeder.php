<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag')->truncate();
        $records = [
            [
                'id'=>1,
                'name'=>'tag1',
            ],[
                'id'=>2,
                'name'=>'tag2',
            ],[
                'id'=>3,
                'name'=>'tag3',
            ],[
                'id'=>4,
                'name'=>'tag4',
            ],[
                'id'=>5,
                'name'=>'tag5',
            ]
        ];
        DB::table('tag')->insert($records);

    }
}
