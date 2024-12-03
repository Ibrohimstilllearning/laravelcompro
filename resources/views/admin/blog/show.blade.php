<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/blog">
                <button class="btn btn-primary px-4"><i class="fas fa-arrow"></i> Kembali</button>
                </a>
                <h4><b>{{$blog->title}}</b></h4>
                <p>created on: {{$blog->created_at}}</p>

                <img src="/{{$blog->cover}}" width="100%" alt="">
                <div class="py-3"></div>
                <p>{!! $blog->body !!}</p>
            </div>
        </div>
    </div>
</div>