<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\order;
use App\Models\banners;
use App\Models\Categories;
use App\Models\Home_categories;
use App\Models\subcategories;



use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Session;

class productController extends Controller
{
    
    public function home()
    {
    //    $data=products::all();
    $allproducts=new products();
        //  $banner=banners::where('status','active')->limit(3)->get();
         $banner=banners::where('status', 1)->get();
        //  $data = products::where('status','active')->orderBy('id','DESC')->limit(8)->get();
        $data = $allproducts::where('status','active')->orderBy('id','DESC')->get();

         $category = Home_categories::find(1);
        $cats = explode(',',$category->sel_categories);
        $categories = Categories::whereIn('Id',$cats)->get(); 
        $no_of_products = $category->no_of_products;
         
        
        return view('product', ['products' => $data,'banner'=>$banner,
        'categories'=>$categories,'no_of_products'=>$no_of_products]);
    }
// 
//     public function products()
//      {  
//         $allproducts=new products();
//         $banner=banners::where('status', 1)->get();
//         $data = $allproducts::where(['status'=>'active','stock_status'=>'instock'])->orderBy('id','DESC')->limit(8)->get();
//         $category = Home_categories::find(1);
//         $cats = explode(',',$category->sel_categories);
//         $categories = Categories::whereIn('Id',$cats)->get(); 
//         $no_of_products = $category->no_of_products;
//         $maincategories=Categories::all();
//         $mainsubcategories=subcategories::all();
//         // dd($maincategories);
//     
//    
// 
//         return view('product', ['products' => $data,
//                                 'banner'=>$banner,
//                                 'categories'=>$categories,
//                                 'no_of_products'=>$no_of_products,
//                                 'maincategories'=>$maincategories,
//                                 'mainsubcategories'=>$mainsubcategories
//                             
//                             
//                             
//                             ]);
//     }

    public function detail($id)
    {
        $data['product1'] = products::find($id);
    
        return view('detail',  $data);
    }

    public function search(Request $req)
    {
        $data3 = products::where('name', 'like', '%' . $req->input('query', '%'))->get();

        return view('search', ['product3' => $data3]);
    }

    public function cartList()
    {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];

            $products = DB::table('cart')

                ->join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $userId)
                ->select('products.*', 'cart.id as cart_id')
                ->get();

            return view('cartlist', ['products' => $products]);
        } else {
            return back();
        }
    }
    public function removeCart($id)
    {
        //      $user = User::find($id);
        //     if($user){
        //         $destroy = User::destroy(2);
        //     }

        Cart::destroy($id);

        return redirect('/cartlist');
    }

    public function Order()
    {
        $userId = Session::get('user')['id'];

        $pro = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*')
            ->get();

        $total = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('orderview', ['pro' => $pro, 'total' => $total, 'userid' => $userId]);
    }

    public function orderClick(Request $r)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order                 = new order();
            $order->user_id        = $cart['user_id'];
            $order->product_id     = $cart['product_id'];
            $order->status         = 'pending';
            $order->payment_method = $r->payment;
            $order->payment_status = 'pending';
            $order->address         = $r->address;
            $order->mobile_number  = $r->mobile_number;
            $order->save();
            Cart:: where('user_id', $userId)->delete();
        }
        $r->input();
        return redirect('/');
    }

    public function myOrders()
    {
        $userId = Session::get('user')['id'];
        $orders = $products = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();
        return view('myorders', ['orders' => $orders]);
    }
}