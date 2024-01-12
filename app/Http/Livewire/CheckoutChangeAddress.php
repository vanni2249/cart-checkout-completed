<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Livewire\Component;

class CheckoutChangeAddress extends Component
{
    public $address;
    public $address_id;
    public $modal;
    public $test;


    public function render()
    {
        return view('livewire.checkout-change-address',[
            'addresses' => Address::all()
        ]);
    }

    public function select($id)
    {
        $this->address_id = $id;
        $this->sendDataFromCheckotChangeAddress();
        $this->modal = false;
    }

    public function sendDataFromCheckotChangeAddress()
    {
        $data = [
            'address_id' => $this->address_id,
        ];
        $this->emit('recivedDataFromCheckotChangeAddress', $data);
    }
}
