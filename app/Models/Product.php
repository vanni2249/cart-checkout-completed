<?php

namespace App\Models;

use Jackiedo\Cart\Traits\CanUseCart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jackiedo\Cart\Contracts\UseCartable;

class Product extends Model implements UseCartable
{
    use CanUseCart;

    protected $fillable = ['price','options'];


    use HasFactory;

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function inventories_sum()
    {
        return $this->inventories()->sum('quantity');
    }
    public function purchases_sum()
    {
        return $this->purchases()->sum('quantity');
    }

    public function available()
    {
        return $this->inventories_sum() - $this->purchases_sum();
    }


}
