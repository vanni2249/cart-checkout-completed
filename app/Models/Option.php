<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['attribute_id','name'];

    use HasFactory;

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
