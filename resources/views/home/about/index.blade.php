@extends('home.layouts.app')
<style>
    .wrapper-img-banner {
        max-width: 100%;
        height: 400px;
    }

    .img-banner{
        width: 100%;
    }
</style>
@section('content')
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="wrapper-img-banner">
            <img src="/images/banner.jpg" class="img-banner" alt="">
        </div>
        <div class="container">
          <div class="carousel-caption text-center mb-5">
            <h1>Tentang kami</h1>
          </div>
        </div>
      </div>
     
    </div>
</div>

<div class="container pt-5">
    <div class="row">
        <div data-aos="flip-left" class="col-md-4">
            <img src="/images/blog.jpg" width="100%">
        </div>

        <div data-aos="flip-right" class="col-md-8">
            <p>Kami adalah perusahaan yang berkomitmen menghadirkan madu murni berkualitas tinggi langsung dari alam. Dengan peternakan lebah yang dikelola secara profesional dan berkelanjutan, kami memastikan setiap tetes madu yang dihasilkan penuh dengan keaslian dan manfaat alami.

            Sebagai pelopor dalam industri madu, kami tidak hanya memproduksi madu, tetapi juga mengembangkan berbagai produk berbasis madu yang inovatif, seperti minuman kesehatan, makanan, hingga kosmetik alami. Kami percaya bahwa madu bukan hanya sebuah produk, melainkan hadiah alam yang membawa manfaat besar bagi kesehatan dan kehidupan sehari-hari.

            Melalui layanan distribusi yang luas, pengemasan eksklusif, dan pemasaran digital, kami berupaya menjangkau setiap pelanggan dengan kemudahan akses dan produk yang berkualitas. Kami juga membuka peluang kemitraan untuk bersama-sama mengembangkan industri madu di Indonesia.

            Dengan semangat keaslian dan inovasi, kami siap menjadi mitra terpercaya Anda dalam menyediakan madu terbaik untuk keluarga dan komunitas.

            </p>
        </div>
    </div>
</div>
@endsection

