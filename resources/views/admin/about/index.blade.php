<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                    <form action="/admin/about/update" method="post" enctype="multipart/form-data">
                    @method('PUT')
                
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                        <label for="">Nama Perusahaan</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Perusahaan" id="" value="{{isset($about) ? $about->name : old('name')}}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                        <div class="form-group">
                        <label for="">cover</label>
                        <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror"  id="">
                        @error('cover')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror

                        @if(isset($about))
                            <img src="/{{ $about->cover }}" width="100%" class="mt-4" alt="">
                        @endif
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" id="summernote" name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="desc" id="" value="{{$about->desc}}"><!--biar kalo error gak ilang tulisannya-->
                        @error('desc')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                           </div>  
                           
                    <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>