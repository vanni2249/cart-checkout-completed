<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductSelect extends Component
{
    public $item;
    public $options = [];
    public $product;

    public function mount()
    {
        $this->geProductDefault();
        $this->sendDataFromProductSelect();
    }

    public function render()
    {
        return view('livewire.product-select');
    }

    public function updated()
    {
        $this->getProductHandleOptions();
        $this->sendDataFromProductSelect();
    }

    public function geProductDefault()
    {
        $this->product = Product::with(['item'])->where('item_id', $this->item->id)->first();
    }

    public function getProductHandleOptions()
    {
        $this->product = Product::with(['item'])->where('item_id', $this->item->id)->whereJsonContains('options', $this->options)->first();
    }

    public function sendDataFromProductSelect()
    {
        $data = [
            'product' => $this->product,
            'available' => $this->product->available(),
        ];
        $this->emit('recivedDataFromProductSelect',$data);
    }
}
