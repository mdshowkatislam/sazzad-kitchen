@extends('master')
@section('content')
<div class="container custom-login">
    <h1>This login from resource/vendor/log.blade.php</h1>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">


            <form class="form" action="login" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail2"
                        placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword2"
                        placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">login</button>
            </form>

        </div>
    </div>

</div>

@endsection
