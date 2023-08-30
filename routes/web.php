<?php
use Illuminate\Http\Request;
use App\Http\Livewire\CartComponent;


use App\Http\Livewire\HomeComponent;
// use App\Http\Controllers\userController;

// use App\Http\Controllers\frontendController;

use App\Http\Livewire\ShopComponent;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\AboutusComponent;

use App\Http\Livewire\ContactComponent;

use App\Http\Livewire\DetailsComponent;

use Illuminate\Support\Facades\Session;
use App\Http\Livewire\AboutdevComponent;
use App\Http\Livewire\CategoryComponent;

use App\Http\Livewire\NewsletterComponent;

use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Controllers\frontendController;

use App\Http\Livewire\FeturedComponents;

Route::get('/', HomeComponent::class);

Route::get('/detail/{id}', DetailsComponent::class);


Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/product-category/{category_slug}/{scategory_slug?}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/shop', ShopComponent::class);
Route::get('/checkout', CheckoutComponent::class)->name('checkout');

Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');
Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');

Route::get('/contact-us', ContactComponent::class)->name('contact-us');

 Route::post('subscribe',[frontendController::class,'subscribe'])->name('subscribe');
// Route::post('subscribe',[NewsletterComponent::class,'subscribe'])->name('subscribe');

Route::get('contact',[frontendController::class,'contact'])->name('contact');


Route::get('/about-us',AboutusComponent::class)->name('about-us');
Route::get('/about-dev',AboutdevComponent::class)->name('about-dev');

// Sorry my fetrure spelling was wrong \\|
Route::get('/fetured/{name}', FeturedComponents::class)->name('fetured');




Route::get('/dumy',function(){
      return view('dumy');
});






require __DIR__.'/auth.php';
