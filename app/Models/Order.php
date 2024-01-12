<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['address_id','amount'];
    
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function address()
    {
        return  $this->hasOne(Address::class);
    }
}
