<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <a href="/admin/pesan">
                        <button class="btn btn-primary my-3">Kembali</button>
                    </a>
                    <h4><b>From: {{$pesan->name}}</b></h4>
                    <p>Created On: {{$pesan->created_at}}</p>
                    <p>{!! $pesan->desc !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>