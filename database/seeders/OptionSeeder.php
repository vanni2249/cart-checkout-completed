<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attribute = Attribute::find(1);


        $attribute->options()->createMany(
            [

                [
                    'name' => 'red'
                ],
                [
                    'name' => 'blue'
                ]
            ]
        );

        $attribute = Attribute::find(2);

        $attribute->options()->createMany(
            [

                [
                    'name' => 'x-small'
                ],
                [
                    'name' => 'small'
                ]
            ]
        );

        $attribute = Attribute::find(3);

        $attribute->options()->createMany(
            [

                [
                    'name' => 'white'
                ],
                [
                    'name' => 'black'
                ]
            ]
        );
    }
}
