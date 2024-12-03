<style>
    .wrapper-img-banner {
        max-width: 100%;
        height: 400px;
    }

    .img-banner{
        width: 100%;
    }
</style>
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    

    <div class="carousel-inner">
     @foreach($banner as $key=>$item)
      <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
        <div class="wrapper-img-banner">
            <img src="/{{$item->gambar}}" class="img-banner" alt="">
        </div>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>{{$item->headline}}</h1>
            <p class="opacity-75">{{$item->desc}}</p>
          </div>
        </div>
      </div>
      @endforeach
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
   
   <div class="container">
    <div data-aos="fade-down" class="text-center mt-5">
        <h4 >About</h4>
        <p>Gausah Sok asik sama kita</p>
    </div>
    <div class="row">
        <div data-aos="fade-right" class="col-md-6">
            <img src="/images/about.jpg" width="100%" alt="">
        </div>
        <div data-aos="fade-left" class="col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, vitae! Accusamus, eum nam voluptatem, id sequi non accusantium pariatur corporis temporibus, eligendi labore laboriosam. Animi id expedita harum, suscipit quibusdam fuga amet recusandae, corporis aliquid, quod corrupti. Hic provident quo cumque quibusdam. Nostrum molestiae laboriosam culpa fuga dolore praesentium similique ex quo ratione, maxime, nihil accusantium dolor nam tempora exercitationem libero nisi neque ipsa suscipit rerum voluptas, eos molestias. Unde error, voluptatem culpa, harum quasi sapiente possimus ut velit placeat molestias dolore, illo debitis alias qui incidunt dolores non. Quidem, illum? Maxime, in maiores. Repellendus eius aliquid sit iste cupiditate!
        </div>
    </div>
   </div>
   <div class="bg-warning my-5">
    <div class="container py-5">
        <div class="text-white">
            <h5>Pelajari Tentang kami</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ipsum necessitatibus repellat, delectus temporibus iste excepturi aliquam eius! Dignissimos rem maxime odio debitis veniam praesentium maiores necessitatibus saepe beatae. Voluptatem?</p>
        </div>
    </div>
   </div>
   <div class="container my-4">
    <div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500" class="text-center">
        <h4 class="">Services</h4>
        <p>Kami punya layanan 24 jam</p>
    </div>
    <div class="row">

        @foreach($services as $item)
        <div  data-aos="zoom-in-up" class="col-md-3">
            <div class="card shadow">
                <div class="text-center">
                    <i class="{{$item->icon}} py-3"></i>
                    <p><b>{{$item->title}}</b></p>
                    <p class="my-2">{{$item->desc}}</p>
                </div>
            </div>
        </div>
        @endforeach

   </div>

   <div data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500" class="text-center mt-3">
    <a href="/services" class="btn btn-warning px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
   </div>

   <div class="bg-light my-5">
    <div class="container py-5">
        <div class="text-dark">
            <h5>Pelajari Tentang kami</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ipsum necessitatibus repellat, delectus temporibus iste excepturi aliquam eius! Dignissimos rem maxime odio debitis veniam praesentium maiores necessitatibus saepe beatae. Voluptatem?</p>
        </div>
    </div>
   </div>
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
    <div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500" class="text-center">
        <h4 class="" >BLog</h4>
        <p>Kami punya layanan 24 jam</p>
    </div>
    <div class="row">
        @foreach($blog as $item)
        <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000" class="col-md-3">
            <div class="card shadow">
                <div class="wrapper-card-blog">
                    <img src="/{{$item->cover}}" alt="" class="img-card-blog">
                </div>
                <div class="p-3">
                    <a href="#" class="text-decoration-none"><h5>{{$item->title}}</h5></a>
                    <p>{!! Illuminate\Support\Str::limit($item->body, 100) !!}</p>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500" class="text-center mt-3">
    <a href="/blog" class="btn btn-warning px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
   </div>
</div>
