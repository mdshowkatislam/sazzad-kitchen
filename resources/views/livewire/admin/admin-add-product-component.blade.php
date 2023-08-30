<div>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New product
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
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Name</label>
                                <div class="col-md-7">
                                    <input type="text" placeholder="Product Name" class="form-control input-md"
                                        wire:model="name" />
                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Quantity</label>
                                <div class="col-md-7">
                                    <input type="text" placeholder="Quantity" class="form-control input-md"
                                        wire:model="quantity" />
                                    @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Price</label>
                                <div class="col-md-7">
                                    <input type="text" placeholder="Price" class="form-control input-md"
                                        wire:model="price" />
                                    @error('price') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Category</label>
                                <div class="col-md-7">
                                    <select class="form-control" wire:model="category">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->title}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('categories_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Category id ( Be careful on choosing)</label>
                                <div class="col-md-7">
                                    <select class="form-control" wire:model="categories_id">
                                        <option value="">Select Category id (must be as same-category)</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">
                                            {{$category->id}}
                                            <<={{$category->title}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('categories_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Short Description</label>
                                <div class="col-md-7" wire:ignore>
                                    <textarea class="form-control" id="short_desc" placeholder="Short Description"
                                        wire:model="short_desc"></textarea>
                                    @error('short_desc') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group" wire:ignore>
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-7">
                                    <textarea class="form-control" id="des" placeholder="Description"
                                        wire:model="des"></textarea>
                                    @error('des') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Aditional_description</label>
                                <div class="col-md-7" wire:ignore>
                                    <textarea class="form-control" id="aditional_desc"
                                        placeholder="Aditional Description" wire:model="aditional_desc"></textarea>
                                    @error('aditional_desc') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Gellary path</label>
                                <div class="col-md-7" wire:ignore>
                                    <textarea class="form-control" id="gallery"
                                        placeholder="write full image path with image extention"
                                        wire:model="gallery"></textarea>
                                    @error('gallery') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-3 control-label">File_path</label>
                                <div class="col-md-7" wire:ignore>
                                    <textarea class="form-control" id="file_path" placeholder="file_path"
                                        wire:model="file_path"></textarea>
                                    @error('file_path') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Image</label>
                                <div class="col-md-7">
                                    <input type="file" class="form-control input-md" wire:model="image" />
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                    @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Gallery</label>
                                <div class="col-md-7">
                                    <input type="file" class="form-control input-md" wire:model="images" multiple />
                                    @if($images)
                                    @foreach($images as $image)
                                    <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endforeach
                                    @endif
                                    @error('images') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Condition</label>
                                <div class="col-md-7">
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
                                <label class="col-md-3 control-label">Discount</label>
                                <div class="col-md-7">
                                    <input type="text" placeholder="discount amount" class="form-control input-md"
                                        wire:model="discount" />
                                    @error('price') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>







                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
                selector:'#short_description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description', sd_data);
                    });
                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description', d_data);
                    });
                }
            });
        });
</script>
@endpush
