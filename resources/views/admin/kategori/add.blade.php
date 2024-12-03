<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if(isset($kategori)) <!--Isset untuk mengecek ada variabel nggak-->
                    <form action="/admin/posts/kategori/{{ $kategori->id }}" method="post">
                    @method('PUT')
                @else
                <form action="/admin/posts/kategori" method="post">

                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Title" id="" value="{{isset($kategori) ? $kategori->name : old('name')}}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>