<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Livewire\Component;

class CheckoutSelectedAddress extends Component
{
    public $address;
    public $address_id;

    protected $listeners = ['recivedDataFromCheckotChangeAddress','recivedDataFromCheckoutAddAddress'];
    
    public function mount()
    {
        $this->address = Address::where('default',true)->first();
        $this->address_id = $this->address->id;
        $this->sendDataFromCheckoutSelectedAddress();
    }

    public function recivedDataFromCheckotChangeAddress($data)
    {
        $this->address = Address::find($data['address_id']);
        $this->address_id = $this->address->id;
        $this->sendDataFromCheckoutSelectedAddress();
    }

    public function recivedDataFromCheckoutAddAddress($data)
    {
        $this->address = Address::find($data['address_id']);
        $this->address_id = $this->address->id;
        $this->sendDataFromCheckoutSelectedAddress();
    }


    public function render()
    {
        return view('livewire.checkout-selected-address',[
            'address' => $this->address
        ]);
    }

    public function sendDataFromCheckoutSelectedAddress()
    {
        $data = [
            'address_id' => $this->address_id
        ];
        $this->emit('recivedDataFromCheckoutSelectedAddress',$data);
    }
}
