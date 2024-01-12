<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CheckoutAddAddress extends Component
{
    public $modal;
    public $address;
    public $address_id;
    public $line_one = 'hc 01 box 7023';
    public $line_two;
    public $city = 'villalba';
    public $zip = '00766';
    public $default;

    public function render()
    {
        return view('livewire.checkout-add-address');
    }

    public function create()
    {
        DB::transaction(function () {
            if ($this->default) {
                
                $this->address = Address::where('default',true)->first();
                $this->address->update([
                    'default' => false
                ]);

                $this->store();
    
            }else{
                $this->default = false;

                $this->store();
            }
            
        });
    }

    public function store()
    {
        $address = new Address;
        $this->address = $address->create([
            'line_one' => $this->line_one,
            'line_two' => $this->line_two,
            'city' => $this->city,
            'zip' => $this->zip,
            'default' => $this->default
        ]);

        $this->address_id = $this->address->id;

        $this->sendDataFromCheckoutAddAddress();

        $this->modal = false;

    }

    public function sendDataFromCheckoutAddAddress()
    {
        $data = [
            'address_id' => $this->address_id
        ];
        $this->emit('recivedDataFromCheckoutAddAddress',$data);
    }
}
