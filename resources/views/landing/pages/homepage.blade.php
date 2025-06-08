@extends('base.app')
@section('title', 'Homepage')
@section('content')
<div class="p-homepage">
@include('landing.layouts.navbar')
@include('landing.component.hero', [
    'image' => asset('assets/images/hero-image.png'),
    'title1' => 'Cek Keaslian Barang dengan',
    'span' => 'Luxury Checker',
    'title2' => '',
    'span2' => '',
    'subTitle' => "Analisis barang mewah dan koleksi kesayangan Anda. Keahlian kami lebihdari 49 merek ternama",
    'button' => 'Cek Sekarang',
    ])
<section class="cek" id="cek">
    <div class="old-container">
    <div class="container">
        <h1>Mengapa<br><span>Cek Keaslian Penting?</span></h1>
        <div class="img-mobile">
    <img src="{{asset('assets/images/mascot.png')}}" alt="">
    </div>   
    </div>
    
    <div class="inner-cont">
            <div class="inner1">
                @include('landing.component.case-card',[
                    'img' => asset('assets/images/Checkmark.png'),
                    'title' => 'Sed auctor tortor sapien',
                    'subtitle' => "Nullam sed mauris lacinia, sodales mi nec, venenatis orci. Sed sed imperdiet tellus metus. "
                    ])
                @include('landing.component.case-card',[
                    'img' => asset('assets/images/Checkmark.png'),
                    'title' => 'Sed auctor tortor sapien',
                    'subtitle' => "Nullam sed mauris lacinia, sodales mi nec, venenatis orci. Sed sed imperdiet tellus metus. "
                    ])
            </div>
            <div class="inner2">
                <img src="{{asset('assets/images/mascot.png')}}" alt="">
            </div>
            <div class="inner3">
                 @include('landing.component.case-card',[
                    'img' => asset('assets/images/Checkmark.png'),
                    'title' => 'Sed auctor tortor sapien',
                    'subtitle' => "Nullam sed mauris lacinia, sodales mi nec, venenatis orci. Sed sed imperdiet tellus metus. "
                    ])
                 @include('landing.component.case-card',[
                    'img' => asset('assets/images/Checkmark.png'),
                    'title' => 'Sed auctor tortor sapien',
                    'subtitle' => "Nullam sed mauris lacinia, sodales mi nec, venenatis orci. Sed sed imperdiet tellus metus. "
                    ])
            </div>
            </div>
        </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="box-left">
            <img src="{{asset('assets/images/box-left.png')}}" alt="">
        </div>
        <div class="about-inner">
            <h1>Tentang Luxury Checker</h1>
            <p>Pellentesque consectetur augue ligula, in tincidunt lacus fermentum. Conse quam quis ipsum ultrices placerat. Curabitur ut tincidunt turpis. Nunc suscipit mi aliquet felis efficitur, vitae viverra.</p> <button class="button" href ="">Selengkapnya
            </button>
        </div>
        <div class="box-right">
        <img src="{{asset('assets/images/box-right.png')}}" alt="">
        </div>
    </div>
</section>

<section class="cara-kerja" id="cara-kerja">
    <div class="container">
    <div class="title">
        <h1>Cara <span>Kerja</span></h1>
        <p>Vivamus odio enim, vehicula eget nulla eget, gravida auctor nunc facilisi</p>
    </div>
        <div class="wrapper">
            <div class="wrapper-left">
                <div class="inner-wrapper">
                    <span>01</span>
                    <img  src="{{asset('assets/images/b1.png')}}" style="width: 352px; height: 352px; margin-left:68px" alt="">
                    <h2>Diskusi dengan Admin</h2>
                    <p>Vestibulum in mi maximus, efficitur felis et, suscipit dolor. Vestibulum justo sapien, finibus quis ultrices sed, posuere sed augue. Quisque ac porttitor sapien, vel vestibulum lacus.</p>
                </div>
                <div class="inner-wrapper">
                    <span>03</span>
                    <img src="{{asset('assets/images/b3.png')}}" style="width: 338px; height: 338px;margin-left:68px" alt="">
                    <h2>Pengecekan Oleh Tim kami</h2>
                    <p>Vestibulum in mi maximus, efficitur felis et, suscipit dolor. Vestibulum justo sapien, finibus quis ultrices sed, posuere sed augue. Quisque ac porttitor sapien, vel vestibulum lacus.</p>
                </div>
            </div>
            <div class="wrapper-right">
                <div class="inner-wrapper">
                    <span>02</span>
                    <img src="{{asset('assets/images/b2.png')}}" style="width:492px; height: 274px; margin-left:68px" alt="">
                    <h2>Unggah Foto Barang</h2>
                    <p>Sed sed imperdiet tellus. Nullam varius pharetra tellus, non sodales dolor rutrum sit amet. Curabitur ac egestas mauris. Fusce imperdiet metus nec orci mattis.</p>
                </div>
                <div class="inner-wrapper">
                    <span>04</span>
                    <img src="{{asset('assets/images/b4.png')}}" style="width:416px; height:288.412px; margin-left:68px"alt="">
                    <h2>Pencetakan Sertifikat</h2>
                    <p>Suspendisse potenti. Curabitur id accumsan odio, at pulvinar massa. Proin lobortis augue in aliquam placerat. Donec vel urna dapibus, porttitor massa et, tincidunt urna.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-mobile">
        <div class="wrapper-mobile">
                <div class="inner-wrapper-mobile">
                    <span>01</span>
                    <img  src="{{asset('assets/images/b1.png')}}" style="width: 316px;height: 257px;" alt="">
                    <h2>Diskusi dengan Admin</h2>
                    <p>Vestibulum in mi maximus, efficitur felis et, suscipit dolor. Vestibulum justo sapien, finibus quis ultrices sed, posuere sed augue. Quisque ac porttitor sapien, vel vestibulum lacus.</p>
                </div>
                <div class="inner-wrapper-mobile">
                    <span>02</span>
                    <img src="{{asset('assets/images/b2.png')}}" style="width: 358px;height: 199px;" alt="">
                    <h2>Unggah Foto Barang</h2>
                    <p>Sed sed imperdiet tellus. Nullam varius pharetra tellus, non sodales dolor rutrum sit amet. Curabitur ac egestas mauris. Fusce imperdiet metus nec orci mattis.</p>
                </div>
                <div class="inner-wrapper-mobile">
                    <span>03</span>
                    <img src="{{asset('assets/images/b3.png')}}" style="width: 252px;height: 252px;" alt="">
                    <h2>Pengecekan Oleh Tim kami</h2>
                    <p>Vestibulum in mi maximus, efficitur felis et, suscipit dolor. Vestibulum justo sapien, finibus quis ultrices sed, posuere sed augue. Quisque ac porttitor sapien, vel vestibulum lacus.</p>
                </div>
                <div class="inner-wrapper-mobile">
                    <span>04</span>
                    <img src="{{asset('assets/images/b4.png')}}" style="width: 366px;height: 265px;" alt="">
                    <h2>Pencetakan Sertifikat</h2>
                    <p>Suspendisse potenti. Curabitur id accumsan odio, at pulvinar massa. Proin lobortis augue in aliquam placerat. Donec vel urna dapibus, porttitor massa et, tincidunt urna.</p>
                </div>
        </div>
    </div>
</section>

<section class="penilaian">
    <div class="container">
        <div class="inner-penilaian">
            <div class="title">
                <h1>Penilaian Mereka tentang <span>Kami</span></h1>
                <p>Vivamus odio enim, vehicula eget nulla eget, gravida auctor nunc facilisi</p>
            </div>
            <div class="testimoni-item-wrapper">
                <div class="testimoni-item">
                    <img src="{{asset('assets/images/testimoni1.png')}}" alt="">
                    <img src="{{asset('assets/images/testimoni-2.png')}}" alt="">
                </div>
                <div class="testimoni-item">
                    <img src="{{asset('assets/images/testimoni-3.png')}}" alt="">
                    <img src="{{asset('assets/images/testimoni-4.png')}}" alt="">
                </div>
                <div class="testi-hilang">
                <div class="testimoni-item">
                    <img src="{{asset('assets/images/testimoni-5.png')}}" alt="">
                    <img src="{{asset('assets/images/testimoni-6.png')}}" alt="">
                </div>
                </div>
            </div>
            <div class="tombol-testi">
            <a href="#penilaian"> Lihat Semua Testimoni<svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none">
                <path d="M16.5 6.37598L1.5 6.37598" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.5 1.37598L16.7929 5.66887C17.1262 6.0022 17.2929 6.16887 17.2929 6.37598C17.2929 6.58308 17.1262 6.74975 16.7929 7.08308L12.5 11.376" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></a>
            </div>
        </div>
    </div>
</section>
@include('landing.component.faq')
@include('landing.component.contact')
@include('landing.layouts.footer')
</div>
@endsection