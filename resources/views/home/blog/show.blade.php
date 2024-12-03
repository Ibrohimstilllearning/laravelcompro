<div class="row">
    <div class="offset-2 col-md-6 py-5">    
            <a href="/blog">
            <button class="btn btn-primary px-4"><i class="fas fa-arrow"></i> Kembali</button>
            </a>
            <h4><b>{{$blog->title}}</b></h4>
            <p>created on: {{$blog->created_at}}</p>

            <img src="/{{$blog->cover}}" width="100%" alt="">
            <div class="py-3"></div>
            <p>{!! $blog->body !!}</p>
    </div>
</div>