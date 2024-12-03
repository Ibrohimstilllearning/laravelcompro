<style>
    .wrapper-card-blog {
        width: 100%;
        height: 150px;
        overflow: hidden;
    }
    .img-card-blog {
        width: 100%;
    }
   </style>


<div class="container my-4">
    <div class="text-center">
        <h4 class="" >BLog</h4>
        <p>Kami punya layanan 24 jam</p>
    </div>
    <div class="row">
        @foreach ($blog as $item )
        <div class="col-md-3 my-3">
            <div class="card shadow">
                <div class="wrapper-card-blog">
                    <img src="/{{$item->cover}}" alt="" class="img-card-blog">
                </div>
                <div class="p-3">
                    <a href="/blog/show/{{$item->id}}" class="text-decoration-none"><h5>{{$item->title}}</h5></a>
                    <p>{!! Illuminate\Support\Str::limit($item->body, 100) !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    