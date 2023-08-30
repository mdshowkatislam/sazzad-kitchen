<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit product
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All
                                    products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif


                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Product Name" class="form-control input-md"
                                        wire:model="name" />
                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-6" wire:ignore>
                                    <textarea class="form-control" id="short_desc" placeholder="Short Description"
                                        wire:model="short_desc"></textarea>
                                    @error('short_desc') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group" wire:ignore>
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="des" placeholder="Description"
                                        wire:model="des"></textarea>
                                    @error('des') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Aditional_description</label>
                                <div class="col-md-6" wire:ignore>
                                    <textarea class="form-control" id="aditional_desc"
                                        placeholder="Aditional Description" wire:model="aditional_desc"></textarea>
                                    @error('aditional_desc') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Price</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Price" class="form-control input-md"
                                        wire:model="price" />
                                    @error('price') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Quantity" class="form-control input-md"
                                        wire:model="quantity" />
                                    @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Category</label>
                                <div class="col-md-6">
                                    <select class="form-control" wire:model="category">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->title}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('category') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Category_id(See your category 1st)</label>

                                <div class="col-md-6">
                                    <select class="form-control" wire:model="categories_id">
                                        <option value="">Select Category id</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->id}}={{$category->title}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('categories_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label">Gellary path</label>
                                <div class="col-md-6" wire:ignore>
                                    <textarea class="form-control" id="gallery"
                                        placeholder="write full image path with image extention"
                                        wire:model="gallery"></textarea>
                                    @error('gallery') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label">File_path</label>
                                <div class="col-md-6" wire:ignore>
                                    <textarea class="form-control" id="file_path" placeholder="file_path"
                                        wire:model="file_path"></textarea>
                                    @error('file_path') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Image</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control input-md" wire:model="newimage" />
                                    @if($newimage)
                                    <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                    @else
                                    <img src="{{asset('images/products')}}/{{$image}}" width="120" />
                                    @endif
                                    @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Gallery</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control input-md" wire:model="newimages" multiple />
                                    @if($newimages)
                                    @foreach($newimages as $newimage)
                                    @if($newimage)
                                    <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                    @endif
                                    @endforeach
                                    @else
                                    @foreach($images as $image)
                                    @if($image)
                                    <img src="{{asset('images/products')}}/{{$image}}" width="120" />
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Discount</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="discount amount" class="form-control input-md"
                                        wire:model="discount" />
                                    @error('price') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Condition</label>
                                <div class="col-md-6">
                                    <select class="form-control" wire:model="condition">
                                        <option value="new">new</option>
                                        <option value="hot">hot</option>
                                        <option value="special">special</option>
                                        <option value="popular">popular</option>
                                        <option value="top-selling">top-selling</option>
                                    </select>
                                    @error('condition') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(function() {
            tinymce.init({
                selector:'#short_desc',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_desc').val();
                        @this.set('short_desc', sd_data);
                    });
                }
            });

            tinymce.init({
                selector:'#des',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#des').val();
                        @this.set('des', d_data);
                    });
                }
            });
        });
</script>
@endpush
