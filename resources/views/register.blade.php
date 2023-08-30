@extends('master') 
@section('content')
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">


    <form class="form" action="register" method="post">
      @csrf
      <div class="form-group">
        <label for="exampleDropdownFormEmail2" class="form-label">User Name:</label>
        <input type="text" name="name" class="form-control" id="exampleDropdownFormEmail2" placeholder="name">
      </div>
        <div class="form-group">
          <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
        </div>
        <div class="form-group">
          <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
        </div>
        
        <button type="submit" class="btn btn-primary">Register</button>
    </form>

</div>
</div>


</div>

 @endsection