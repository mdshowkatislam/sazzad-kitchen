<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Slider
                            </div>
                            <div class="col-md-6">

                                <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right">Add
                                    New
                                    Slider</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-boby">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>SubTitle</th>
                                    <th>Price</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Group</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{$slider->id}}</td>
                                    <td><img src="{{asset('images/MainSliders')}}/{{$slider->image}}" width="120" />
                                    </td>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->subtitle}}</td>
                                    <td>{{$slider->price}}</td>
                                    <td>{{$slider->link}}</td>
                                    <td>{{$slider->status == 1 ? 'Active':'Inactive'}}</td>
                                    <td>{{$slider->group}}</td>
                                    <td>

                                        <a href="{{route('admin.edithomeslider',['slide_id'=>$slider->id])}}"><i
                                                class="fa fa-edit fa-2x text-info"></i></a>

                                        <a href="" wire:click.prevent="deleteSlide({{$slider->id}})"><i
                                                class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
