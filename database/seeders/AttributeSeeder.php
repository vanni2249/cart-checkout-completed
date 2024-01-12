<?php

namespace Database\Seeders;

use Attribute;
use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $item = Item::find(2);

        $item->attributes()->createMany(
            [

                [
                    'name' => 'color'
                ],
                [
                    'name' => 'size'
                ]
            ]
        );

        $item = Item::find(3);

        $item->attributes()->create(
            [
                'name' => 'color'
            ]
        );
    }
}
