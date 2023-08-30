@extends('master') 
@section('content')
<div class="custom-product" style="margin:20px;" >

<div class="row">

  <div class="col-sm-4">

  </div>
  <div class="col-sm-4">
    
 

    <div class="trending-wrapper">
      <h2 class="trending-text" style="color:blue">Trending Products</h2>


      @foreach ($product3 as $item)
  
      <div class="Your Searched Item:" >
        <a href="detail/{{ $item['id'] }}">
          <img class="searchin-img" src="{{ $item['gallery'] }}" alt="Second slide">
          <div class=""  >
              <h3>{{ $item['name'] }}</h3>
              <h5>{{ $item['doc'] }}</h5>
            
          </div>

        </a>
        </div>
    
        @endforeach



</div>
</div>
<div class="col-sm-4"></div>
</div>

    </div>












@endsection 


