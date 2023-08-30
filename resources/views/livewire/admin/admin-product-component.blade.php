<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                All Products
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search..."
                                    wire:model="searchTerm" />
                            </div>
                            <div class="col-md-4">

                                <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add
                                    New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>

                                    <th>Price</th>

                                    <th>Category</th>

                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img src="{{asset('images/products')}}/{{$product->image}}" width="60">
                                    </td>
                                    <td>{{$product->name}}</td>

                                    <td>{{$product->price}}</td>

                                    <td>{{$product->category}}</td>

                                    <td>{{$product->created_at}}</td>
                                    <td>

                                        <a href="{{route('admin.editproduct',['product_id'=>$product->id])}}"><i
                                                class="fa fa-edit fa-2x text-info"></i></a>
                                       
                                        <a href="#"
                                            onclick="confirm('Are you sure, you want to delete this product?') || event.stopImmediatePropagation()"
                                            style="margin-left: 10px;"
                                            wire:click.prevent="deleteProduct({{$product->id}})"><i
                                                class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
