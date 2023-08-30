@extends('master') @section('content')
<div class="container" style="margin:20px;">




	<div class=" row ">
		<div class="col-sm-6 bg-black">
			<img class=" detail-img " src=" {{ asset('images/products') }}/{{ $product1->image }} " width="300"
				height="800">
		</div>

		<div class=" col-sm-6 ">

			<a style=" font-size:14px; " href={{ '/' }}>Go back</a>
			<h2 class=" oneProductView " style=" font-size:30px; font-family: 'Franklin Gothic Medium' ; ">Name: {{
				$product1['name'] }}</h2>
			<h2 class=" oneProductView ">Price: {{ $product1['pws'] }}</h2>
			<h2 class=" oneProductView ">Category: {{ $product1['category'] }}</h2>
			<h2 class=" oneProductView ">About: {{ $product1['doc'] }}</h2>
			<br><br>
			`


			<a href=" {{ route( 'add_to_cart' ,[ 'id'=>$product1->id]) }}" class="btn btn-success">Add_To_Cart</a>

			<button class="btn btn-success">Buy Now</button>




		</div>

	</div>
</div>
<br>



@endsection