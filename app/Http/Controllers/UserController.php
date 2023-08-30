<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\products;

use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Session;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;

    
    public function register(Request $request){

         $data=$request->validate([

                   'name'=>'required|string|max:191',
                   'email'=>'required|email|max:191|unique:users,email',
                   'password'=>'required|string|confirmed'

         ]);

         $user=User::create([
           'name'=>$data['name'],
           'email'=>$data['email'],
           'password'=>Hash::make($data['password'])
         

         ]);
         $token=$user->createToken('tuhinToken')->plainTextToken;
           $response=[

             'user'=>$user,
             'token'=>$token

           ];
           return response($response,201);
    }



   public  function login(Request $request){
   

       $user=User::where('email',$request->email)->first();
       if(!$user || !Hash::check($request->password,$user->password)){
           return response([

           'message'=>['These credentials do not match our records.......']
         

           ],404);
       }
       $token=$user->createToken('my-app-token')->plainTextToken;
       $response=[
           
        'user'=>$user,
        'token'=>$token
          

       ];

         return response($response,201);
     }
     public function logout(Request $request)
     {
        auth()->user()->tokens()->delete();
        return ['message'=>'logged out'];
     }

}