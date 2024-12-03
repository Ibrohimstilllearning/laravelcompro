<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if(isset($blog)) <!--Isset untuk mengecek ada variabel nggak-->
                    <form action="/admin/posts/blog/{{ $blog->id }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/posts/blog" method="post" enctype="multipart/form-data">

                @endif
                    @csrf
                  <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" id="" value="{{isset($blog) ? $blog->title : old('name')}}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                           <select name="kategori_id" class="form-control" id="">
                            <option value="">Kategori</option>
                            @foreach($kategori as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                           </select>
                            @error('kategori_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                            <div class="form-group">
                                <label for="">Cover</label>
                                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror"  id="">
                                @error('cover')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror

                                @if(isset($blog))
                                    <img src="/{{ $blog->cover }}" width="100%" alt="">
                                @endif
                          </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea type="text" name="body" class="form-control @error('body') is-invalid @enderror" placeholder="Body" id="summernote" value="">{{isset($blog) ? $blog->body : old('email')}}</textarea><!--biar kalo error gak ilang tulisannya-->
                            @error('body')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                 </div>
                   
                   
                   
                  
                    
                   

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>