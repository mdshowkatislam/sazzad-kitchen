<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminProductComponent;

use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAttributesComponent;
 use App\Http\Livewire\Admin\AdminEditAttributeComponent;
 use App\Http\Livewire\Admin\AdminEditCategoryComponent;
 use App\Http\Livewire\Admin\AdminEditProductComponent;
 use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddAttributesComponent;
use App\Http\Livewire\Admin\AdminHomeBannerComponent;
use App\Http\Livewire\Admin\AdminAddHomeBannerComponent;
use App\Http\Livewire\Admin\AdminEditHomeBannerComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminSettingComponent;


use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserProfileComponent;

use App\Http\Livewire\DetailsComponent;

use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserReviewComponent;


Route::get('/detail/{id}', DetailsComponent::class)->name('detail');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// -------user dashbaoard-----------
 Route::middleware(['auth:sanctum', 'verified'])->group(function(){


    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
  Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');

  Route::get('/user/orders', UserOrdersComponent::class)->name('user.orders');
  Route::get('/user/orders/{order_id}',UserOrderDetailsComponent::class)->name('user.orderdetails');




   Route::get('/user/review/{order_items_id}',UserReviewComponent::class)->name('user.review');
   Route::get('/user/change-password', UserChangePasswordComponent::class)->name('user.changepassword');

   Route::get('/user/profile/edit', UserEditProfileComponent::class)->name('user.editprofile');





});
// -------Admin dashbaoard-----------

  Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){

    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}/{scategory_slug?}', AdminEditCategoryComponent::class)->name('admin.editcategory');



    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_id}', AdminEditProductComponent::class)->name('admin.editproduct');

    Route::get('/admin/attributes',AdminAttributesComponent::class)->name('admin.attributes');
    Route::get('/admin/attribute/add', AdminAddAttributesComponent::class)->name('admin.add_attribute');
    Route::get('/admin/attribute/edit/{attribute_id}',AdminEditAttributeComponent::class)->name('admin.edit.attribute');

    Route::get('/admin/slider', AdminHomebannerComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add', AdminAddHomeBannerComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeBannerComponent::class)->name('admin.edithomeslider');

    Route::get('/admin/home-categories', AdminHomeCategoryComponent::class)->name('admin.homecategories');
    Route::get('/admin/sale', AdminSaleComponent::class)->name('admin.sale');



    Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');

    Route::get('/admin/coupon/add', AdminAddCouponComponent::class)->name('admin.addcoupon');
    Route::get('/admin/coupon/edit/{coupon_id}', AdminEditCouponComponent::class)->name('admin.editcoupon');
//
    Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');

    Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');

  Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');




});
