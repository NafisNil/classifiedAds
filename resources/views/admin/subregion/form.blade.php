
                @include('admin.sessionMsg')
                <div class="card-body">
                 {{-- <div class="form-group row">
                    <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
                    <div class="col-md-6">
                    
                    <img id="showImage" src="{{(!empty($edit->logo))?URL::to('storage/'.$edit->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="logo" class="custom-file-input"  id="image">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
--}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                 
                  <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Region</label>
                 
                  <select class="form-control" id="exampleFormControlSelect1" name="region">
                    @foreach ($region as $item)
                    <option value="{{$item->id}}" {{$item->id ==@$edit->region?'selected':''}}>{{$item->name}}</option>
                    @endforeach
                  
                  </select>
                 
                </div>

        
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
      