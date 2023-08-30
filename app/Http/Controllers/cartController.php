<?php
namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\User;
use App\Models\products;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Session;

class cartController extends Controller
{  
 public function addToCart2(Request $request, $id)
    { 
     
      //    Session::flush();
      //   dd($id);
       $data['pro'] = products::find($id);
      //  $a=Session::get('user')['name'];

       

      //  $t=$cart->where('user_id', $userid)->count();
   
  if ($request->session()->has('user')) {

          $cart =$request-> session()->get('cart');
           
         if (!$cart) {
          
            $cart = [
             
             $id=> $this->sessionData($data['pro'],$id)

            ];

            session()->put('cart', $cart);
            // $t=count(Session::get('cart'));
            // dd($t);
            Session::flash('message','cart insertion success-1');
            Session::save();

           return view('livewire.cart'); 

         }
           if (isset($cart[$id])) {
         
            // Session::flush();
            // dd($request)->all();
             
            $cart[$id]['quantity']++;
           
               session()->put('cart',$cart);
             
            //    $t=count(Session::get('cart'));
            // dd($t);
            Session::flash('message','inserted into same cart-2 ! ');
            Session::save();
          
            // $z= $request->session()->get('cart');

       
            return view('livewire.cart');
      

               }
               else{
                
               $cart[$id] = $this->sessionData($data['pro'],$id);
               
        session()->put('cart', $cart);

      //   $t=count(Session::get('cart'));
      //   dd($t);
        Session::flash('message','inserted into with new cart itme-3 !');
        Session::save();
      //   $z= $request->session()->get('cart');

        return view('livewire.cart');
   
 
         }
         } else {
            return redirect('/login');
     }
 
      
      }
      public function removeitem($id)
      {
             $cart=session()->get('cart');
              if(isset($cart[$id])){
                     
               unset($cart[$id]);
               session()->put('cart',$cart);
              }
        
              Session::flash('message','cart item deleted successfull');
              Session::save();

  
              return view('livewire.cart');
      }

      public function sessionData($x,$id){
                    
         return [
            'product_id'  => $x['id'],
            'name'  => $x['name'],
            'image'  => $x['gallery'],
            'user_id'  => Session::get('user.id'),

            'price' => $x['price'],
            'quantity' => 1

         ];
      }

      
}