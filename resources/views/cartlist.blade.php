

@extends('master')
@section('content')

     <div class="custom-product">
        
          <div class="col-sm-10">

        <div class="trending-wrapper">
         <h4>All Cart  Product</h4>

          <a href="{{ url('/order') }}" class="btn btn-success" style="margin:20px;">Order</a>


        @foreach ($products as $item)     

          <div class="row searched-item cart-separator">
            <div class="col-sm-3">

                <a href="detail/{{ $item->id }}">
                    <img src="{{ $item->gallery }}" alt="" class="trending-img">
                 
             
             </a>


              </div>
              <div class="col-sm-4">

         
                  
                    <div >
                          <h2>{{ $item->name }}</h2>
                          <h5>{{ $item->doc }}</h5>
                        
                    </div>



              </div>
              <div class="col-sm-3">

  
             
         {{-- <a href="{{ url('/removecart/{{  $item->cart_id }} ') }}" class="btn btn-warning">Remove-Item</a> --}}
         <a href="{{ URL::to('removecart',$item->cart_id) }}" class="btn btn-warning">Remove-Item</a>
                        
                  
             



              </div>
            
          </div>
             
         @endforeach


        </div>
        <a href="{{ url('/order') }}" class="btn btn-success" style="margin-bottom:20px;">Order Now</a>

        </div>
    
 
    
    </div>   


@endsection