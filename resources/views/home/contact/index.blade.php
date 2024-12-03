<div class="container">
<div class="container my-4">
    <div class="text-center">
        <h4 class="" >Our contact</h4>
        <p>Telepon kami</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card-body">
                <form action="/contact/send" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" placeholder="Masukkan nama anda" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Isi Pesan</label>
                        <textarea name="desc" cols="30" rows="10" class="form-control @error('desc') is-invalid @enderror" id=""></textarea>
                        @error('desc')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning mt-3">Kirim</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex mt-5 ">
                <i class="fas fa-phone text-center px-3"></i><h5>08080808</h5>
            </div>
            <div class="d-flex mt-3">
                <i class="fas fa-envelope px-3"></i><h5>example@gmail.com</h5>
            </div>
            <div class="d-flex mt-3">
                <i class="fas fa-map-marker px-3"></i><h5>JL.Pop mie</h5>
            </div>
        </div>
    </div>
</div>