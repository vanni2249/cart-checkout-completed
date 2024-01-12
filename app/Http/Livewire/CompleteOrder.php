<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Address;
use Livewire\Component;
use Jackiedo\Cart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class CompleteOrder extends Component
{
    public $completed;
    public $address;
    public $address_id;

    protected $listeners = ['recivedDataFromCheckoutSelectedAddress'];

    public function recivedDataFromCheckoutSelectedAddress($data)
    {
        $this->address_id = $data['address_id'];
    }

    public function mount()
    {
        $this->address = Address::where('default',true)->first();
        $this->address_id = $this->address->id;
    }
    
    public function render()
    {
        return view('livewire.complete-order');
    }

    public function store()
    {
        DB::transaction(function () {
            $cart = Cart::name('shopping');
            $order = Order::create([
                'address_id' => $this->address_id,
                'amount' => $cart->getTotal() 
            ]);
    
            $items = $cart->getItems();
            
            foreach ($items as $key => $item) {
                $order->purchases()->create([
                    'product_id' => $item->getId(),
                    'amount' => $item->getPrice(),
                    'quantity' => $item->getQuantity()
                ]);
            }
    
            $cart->destroy();
     
            return redirect()->to('/completed/'.$order->id);       
    
            $this->completed = 'success';
            
        });
    }
}
