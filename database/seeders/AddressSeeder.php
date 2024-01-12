<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $address = new Address;
        $address->line_one = 'Urb Villas del Prado'; 
        $address->line_two = 'Calle del Sol'; 
        $address->city = 'Villalba'; 
        $address->zip = '00795';
        $address->default = true;
        $address->save();

        $address = new Address;
        $address->line_one = 'Urb Colinas del Prado'; 
        $address->line_two = 'Calle del Sol'; 
        $address->city = 'Villalba'; 
        $address->zip = '00795';
        $address->default = false;
        $address->save();
    }
}
