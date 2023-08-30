<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>All Attirbutes</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.add_attribute')}}" class="pull-right"> <button
                                    class="btnbtn-success">Add new</button></a>
                        </div>
                        <div class="panel-body">
                            @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>


                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pat as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.attribute',['attribute_id'=>$item->id])  }}">
                                                <i class="fa fa-edit fa-2x"></i> </a>
                                            <a href="#" onclick="confirm('Are you sure?')"
                                                wire:click.prevent="deleteAttribute({{ $item->id }})"> <i
                                                    class="fa fa-times fa-2x text-danger "></i></a>


                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="wrap-pagination-info">
                                {{ $pat->links() }}
                            </div>


                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
