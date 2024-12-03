<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if(isset($user)) <!--Isset untuk mengecek ada variabel nggak-->
                    <form action="/admin/user/{{ $user->id }}" method="post">
                    @method('PUT')
                @else
                <form action="/admin/user" method="post">

                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Username" id="" value="{{isset($user) ? $user->name : old('name')}}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="" value="{{isset($user) ? $user->email : old('email')}}"><!--biar kalo error gak ilang tulisannya-->
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  id="">
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror"  id="">
                        @error('re_password')
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