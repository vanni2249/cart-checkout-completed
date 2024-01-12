<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = new Item();
        $item->title = 'Primer item';
        $item->save();

        $item = new Item();
        $item->title = 'Segundo item';
        $item->save();

        $item = new Item();
        $item->title = 'Tercer item';
        $item->save();
        
    }
}
