<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>#</td>
                        <td width="250x">Name</td>
                        <td>Message</td>
                        <td>Action</td>
                    </tr>
                    @foreach($pesan as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <a href="/admin/pesan/{{$item->id}}"><b>{{$item->name}}</b></a>
                        </td>
                        <td>{!! Illuminate\Support\Str::limit($item->desc, 100) !!}</td>
                        <td>
                        <form action="/admin/pesan/{{$item->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>