<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['line_one','line_two', 'city', 'zip', 'default'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
