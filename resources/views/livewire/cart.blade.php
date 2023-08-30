@extends('master')
@section('content')
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<div class="container">

  <h2 align="center" color="reds" style="font-family:vardena;color:blue;"> Cart page</h2>
  <div class="row">
    <table class="table table-hover table-bordered text-center" style="font-size: 15px;">
      {{-- <div style="background: red;height:100px;width:200px;">
        <h1>div1</h1>
        <h1>{{ session('message') }}</h1>
      </div>

      <div style="background: blue; height:100px; width:200px;">

        <h1>div2</h1>
        <h1>{{ session('message') }}</h1>
      </div>

      <strong>div2</strong> --}}

      @if(session('message'))
      <div class="alert alert-success alert-block"
        style="background: rgba(67, 182, 57, 0.781);color:white; height:35px; width:100%;font-size:15px">

        <strong> {{ session('message') }}</strong>


      </div>
      @endif
      {{-- <div style="background: red">
        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close">×</button>
          <h1>{{ $message }}</h1>
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
          <button type="button" class="close">×</button>
          Check the following errors :(
        </div>
        @endif
        --}}

        {{-- <h1>id is--{{ $id }}</h1>

        @php
        print_r($z[$id]['name']);
        @endphp --}}

        {{-- @php
        dd($z[$id])->all();
        @endphp --}}

        <thead class="thead-dark">
          <tr>
            <th widht=8%>product id</th>
            <th widht=8%>user id</th>
            <th widht=20%>product name</th>
            <th widht=30%>product image</th>

            <th widht=10%> product price</th>
            <th widht=10%> product quantity</th>
            <th widht=8%> sub total amount</th>
            <th widht=6%> <strong>Remove item</strong></th>


          </tr>
        </thead>

        <tbody>
          @php
          $total=0;
          @endphp
          @if(session('cart'))


          @foreach(session('cart') as $id => $x)
          @php
          $amount=$x['price'] * $x['quantity'];
          $total +=$amount;
          @endphp
          <tr>
            <td class="align-middle">{{ $x['product_id'] }}</td>
            <td class="align-middle">{{ $x['user_id'] }}</td>
            <td class="align-middle">{{ $x['name'] }}</td>
            <td><img src="{{ $x['image'] }}" alt="{{ $x['name'] }}" class="image-fluid" width="100"></td>

            <td class="align-middle">{{ $x['price'] }}</td>
            <td class="align-middle">{{ $x['quantity'] }}</td>
            <td class="align-middle"><strong>{{ $amount }}</strong></td>
            <td class="align-middle no-padding"><strong><a href="{{ route('remove-item',[$id]) }}"
                  class="btn btn-info btn-lg btn-block">x</a></strong>
            </td>
          </tr>
          @endforeach
          @endif

        </tbody>
        <tfoot>

          <tr>
            <td class="bg-dark"> <a href="{{ route('products') }}" class="btn btn-warning btn-lg btn-block"> <b>
                  Continue shoping
                </b></a> </td>
            <td class="bg-dark" colspan="1"></td>
            <td class="bg-dark" colspan="2"> <a href="{{ route('products') }}" class="btn btn-success btn-lg btn-block">
                <b>
                  Order Now
                </b></a> </td>
            <td class="bg-dark" colspan="1"></td>
            <td colspan="4" class="text-warning bg-dark" align="center" style="font-size:15p"><strong>Total
                Price=
                {{$total}} &#2547 </strong></td>
          </tr>
        </tfoot>



    </table>

  </div>
</div>

@php

@endphp
<script>
  // $('div.alert').delay(2500).slideUp(800);
  $('div.alert').delay(2500).hide(800);
  // $('div.alert').delay(2500).fadeOut(800);

</script>


@endsection