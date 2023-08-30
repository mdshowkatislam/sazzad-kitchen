<style type="text/css">
   .t1{
	   background:blue;
	   height:200px;
	   color:white;
	   text-align:center;
	   
   }
    .t2{
	   background:green;
	   height:200px;
	   color:red;
	   text-align:right;
	   
   }
   


</style>

@extends('app')

@section('content')
<div class="t2">
 <h3>hi  i am showkat</h3>
 
 <script type="text/javascript"> alert('This is alert');</script
</div>



@section('footer')
<div class="t1" ><h1>I am {{ $b }}</h1></div>
