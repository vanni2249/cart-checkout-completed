<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventory = new Inventory([
            'quantity' => 13,
            'amount' => 12.34
        ]);
        $product = Product::find(1);
        $product->inventories()->save($inventory);

        $inventory = new Inventory([
            'quantity' => 23,
            'amount' => 25
        ]);
        $product = Product::find(2);
        $product->inventories()->save($inventory);

        $inventory = new Inventory([
            'quantity' => 13,
            'amount' => 16
        ]);
        $product = Product::find(3);
        $product->inventories()->save($inventory);

        $inventory = new Inventory([
            'quantity' => 15,
            'amount' => 17.55
        ]);
        $product = Product::find(4);
        $product->inventories()->save($inventory);

        $inventory = new Inventory([
            'quantity' => 14,
            'amount' => 11.55
        ]);
        $product = Product::find(5);
        $product->inventories()->save($inventory);

        $inventory = new Inventory([
            'quantity' => 10,
            'amount' => 12.55
        ]);
        $product = Product::find(6);
        $product->inventories()->save($inventory);

        $inventory = new Inventory([
            'quantity' => 10,
            'amount' => 13.50
        ]);
        $product = Product::find(7);
        $product->inventories()->save($inventory);

    }
}
