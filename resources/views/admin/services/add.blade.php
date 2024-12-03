<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if(isset($services)) <!--Isset untuk mengecek ada variabel nggak-->
                    <form action="/admin/services/{{ $services->id }}" method="post">
                    @method('PUT')
                @else
                <form action="/admin/services" method="post">

                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" id="" value="{{isset($services) ? $services->title : old('title')}}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Icon</label>
                        <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" placeholder="Icon" id="" value="{{isset($services) ? $services->icon : old('icon')}}">
                        <a href="https://fontawesome.com/search" target="_blank">Klik untuk menambahkan icon</a>
                        @error('icon')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="desc" class="form-control" id="" cols="30" rows="20">{{isset($services) ? $services->desc : ''}}</textarea>
                        @error('desc')
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