<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Settings
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="saveSettings" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Some description" class="form-control imput-md"
                                        wire:model="description" />
                                    @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Short description</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Some short description"
                                        class="form-control imput-md" wire:model="short_des" />
                                    @error('short_des') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Logo1(144x70)</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control input-md" wire:model="newlogo" />
                                    @if($newlogo)
                                    <img src="{{$newlogo->temporaryUrl()}}" width="120" />
                                    @else
                                    <img src="{{asset('images/slogo')}}/{{$logo}}" width="120" />
                                    @endif
                                    @error('newlogo') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Logo2(144x70)</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control input-md" wire:model="newphoto" />
                                    @if($newphoto)
                                    <img src="{{$newphoto->temporaryUrl()}}" width="120" />
                                    @else
                                    <img src="{{asset('images/slogo')}}/{{$photo}}" width="120" />
                                    @endif
                                    @error('newphoto') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" class="form-control imput-md"
                                        wire:model="email" />
                                    @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Phone</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Phone" class="form-control imput-md"
                                        wire:model="phone" />
                                    @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Phone2</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Phone2" class="form-control imput-md"
                                        wire:model="phone2" />
                                    @error('phone2') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Address</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Address" class="form-control imput-md"
                                        wire:model="address" />
                                    @error('address') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Map</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Map" class="form-control imput-md"
                                        wire:model="map" />
                                    @error('map') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Twiter</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Twiter" class="form-control imput-md"
                                        wire:model="twiter" />
                                    @error('twiter') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Facebook</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Facebook" class="form-control imput-md"
                                        wire:model="facebook" />
                                    @error('facebook') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Pinterest</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Pinterest" class="form-control imput-md"
                                        wire:model="pinterest" />
                                    @error('pinterest') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Instagram</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Instagram" class="form-control imput-md"
                                        wire:model="instagram" />
                                    @error('instagram') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Youtube</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Youtube" class="form-control imput-md"
                                        wire:model="youtube" />
                                    @error('youtube') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
