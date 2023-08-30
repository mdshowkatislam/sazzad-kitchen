

@extends('master')
@section('content')

     <div class="custom-product">
        
          <div class="col-sm-10">

        <div class="trending-wrapper">
         <h4>All My Ordered Products:</h4>

     


        @foreach ($orders as $item)     

          <div class="row searched-item cart-separator">
            <div class="col-sm-3">

                <a href="detail/{{ $item->id }}">
                    <img src="{{ $item->gallery }}" alt="" class="trending-img">
                 
             
             </a>


              </div>
              <div class="col-sm-4">

         
                  
                    <div >
                          <h2>Name:{{ $item->name }}</h2>
                          <h5>Delivery:{{ $item->status }}</h5>
                          <h5>Address:{{ $item->address }}</h5>
                          <h5>Payment-status:{{ $item->payment_status }}</h5>
                          <h5>Payment-method:{{ $item->payment_method }}</h5>
                        
                    </div>



              </div>
            
            
          </div>
             
         @endforeach


        </div>
    

        </div>
    
 
    
    </div>   


@endsection