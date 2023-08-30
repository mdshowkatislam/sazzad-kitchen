{{-- In this page there are 3 value getting form Controllers :1) total(as aa arry),2)products(object),3)userid(single and array) --}}

@extends('master')
 @section('content')

<div class="custom-product">

    <div class="col-sm-10">
        <div class="container"  style="border:2px solid rgb(17, 219, 67);font-size:20px;">
            <h2>Order Now:</h2>
            <p>All Your Order Information:</p>
            <table class="table" >

                <tbody>
                    <tr>
                        <td>Amout</td>

                        <td>={{ $total }}</td>

                    </tr>
                    <tr>
                        <td>Tax</td>

                        <td>=$0</td>

                    </tr>
                    <tr>
                        <td>Delivery charge</td>

                        <td>=$10</td>


                    </tr>
                    <tr style="background: rgb(220, 216, 228);">
                        <td>Total</td>

                        <td>={{ $total+10 }}</td>


                    </tr>
                </tbody>
            </table>
      
            {{-- payment are --}}
            <div>
            

          
            
   

 
     
              
             <form class="form" action="orderclick" method="POST">
 
           @csrf
                  <div class="form-group">
                        <textarea type="text" class="form-control" name="address" placeholder="Enter your Address"></textarea>

                    </div>
                    <div class="form-group">

                        <label>Payment Method:</label>
                 

                    </div>
                    <div class="checkbox orderpayment"> 
                      
              {{-- <input type="radio" name="payment"><span>Online Payment</span> <br><br>
                        <input type="radio" name="payment"><span>EMI Payment</span><br><br> --}}

                        <input type="radio"  name="payment"> <span>I will pay after getting order</span><br>

                    </div>
                    <div class="form-group">
                        <label class="form-label">Your Mobile Number:</label><br>

                        <input type="number" name="mobile_number" placeholder="enter Number">

                 


                    </div>    
              
               
                    
                    <input type="submit" class="btn btn-default" >Order Now</input>

                </form>
      
            </div>
            {{-- payment are --}}

        </div>


    </div>



</div>


@endsection
