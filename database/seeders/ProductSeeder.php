<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = Item::find(1);

        $item->products()->create(
            [
                'price' => 14.50
            ]
        );

        $item = Item::find(2);

        $item->products()->createMany(
            [

                [
                    'price' => 14.50,
                    'options' => json_encode(
                        [
                            'color' => [
                                'label' => 'red',
                                'value' => '#f00'
                            ],
                            'size' => [
                                'label' => 'x-small',
                                'value' => 'xs'
                            ]
                        ]
                    )
                ], 
                [
                    'price' => 13.50,
                    'options' => json_encode(
                        [
                            'color' => [
                                'label' => 'red',
                                'value' => '#f00'
                            ],
                            'size' => [
                                'label' => 'small',
                                'value' => 'sm'
                            ]
                        ]
                    )

                ],
                [
                    'price' => 14.50,
                    'options' => json_encode(
                        [
                            'color' => [
                                'label' => 'blue',
                                'value' => '#0000ff'
                            ],
                            'size' => [
                                'label' => 'x-small',
                                'value' => 'xs'
                            ]
                        ]
                    )
                ], 
                [
                    'price' => 13.50,
                    'options' => json_encode(
                        [
                            'color' => [
                                'label' => 'blue',
                                'value' => '#0000ff'
                            ],
                            'size' => [
                                'label' => 'small',
                                'value' => 'sm'
                            ]
                        ]
                    )

                ]
            ]
        );

        $item = Item::find(3);

        $item->products()->createMany(
            [

                [
                    'price' => 14.50,
                    'options' => json_encode(
                        [
                            'color' => [
                                'label' => 'white',
                                'value' => '#ffffff'
                            ],
                        ]
                    )
                ], [
                    'price' => 14.50,
                    'options' => json_encode(
                        [
                            'color' => [
                                'label' => 'black',
                                'value' => '#000000'
                            ],
                        ]
                    )

                ]
            ]
        );
    }
}
