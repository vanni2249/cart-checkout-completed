<?php

use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome',['items' => Item::all()]);
});

Route::get('/items', function(){
    return view('items.index',['items' => Item::all()]);
})->name('items.index');

Route::get('/items/{item}',function(Item $item){
    return view('items.show',['item' => $item]);
})->name('items.show');

Route::get('/cart', function(){
    return view('cart');
})->name('cart');

Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout');

Route::get('/completed/{order}',function(Order $order){
    return view('completed',['order' => $order]);
})->name('completed');