<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if(isset($banner)) <!--Isset untuk mengecek ada variabel nggak-->
                    <form action="/admin/banner/{{ $banner->id }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/banner" method="post" enctype="multipart/form-data">

                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Headline</label>
                        <input type="text" name="headline" class="form-control @error('headline') is-invalid @enderror" placeholder="Headline" id="" value="{{isset($banner) ? $banner->headline : old('name')}}">
                        @error('headline')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">desc</label>
                        <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="desc" id="" value="{{isset($banner) ? $banner->desc : old('email')}}"><!--biar kalo error gak ilang tulisannya-->
                        @error('desc')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror"  id="">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror

                        @if(isset($banner))
                            <img src="/{{ $banner->gambar }}" width="100%" alt="">
                        @endif
                    </div>
                    
                   

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>