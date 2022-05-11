@extends('welcome.layout.master')
@section('title','Category Teknologi Informasi dan Komunikasi')

@section('content')
        </div>
        <div class="tik">

        <div class="row justify-content-center tik-judul ">
            <div class="col">
                <p>Kejuruan Teknologi Informasi dan Komunikasi</p>
            </div>
        </div>
           <ul>
            <li>
            <div class="card" style="width: 15rem; margin-right: 10px;">
            <img src=" {{asset('img/web.jpg')}} " class="card-img-top" alt="web">
            <div class="tik-kategori">
                <h5 class="card-title">Web Developer</h5>
                <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai Web Developer.</p>
                <a href="{{route('tik.webdev')}}" class="btn btn-primary">Detail</a>
            </div>
            </div>
            </li>

            <li>
            <div class="card" style="width: 15rem; margin-right: 10px;">
            <img src="{{asset('img/java.jpg')}}" class="card-img-top" alt="java">
            <div class="tik-kategori">
                <h5 class="card-title">Java OOP</h5>
                <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai Java OOP.</p>
                <a href=" {{route('tik.java')}} " class="btn btn-primary">Detail</a>
            </div>
            </div>
            </li>
            
            <li>
            <div class="card" style="width: 15rem; margin-right: 10px;">
            <img src="{{asset('img/c.jpg')}}" class="card-img-top" alt="c">
            <div class="tik-kategori">
                <h5 class="card-title">C++</h5>
                <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai C++.</p>
                <a href="{{route('tik.cpp')}}" class="btn btn-primary">Detail</a>
            </div>
            </div>
            </li>

            <li>
            <div class="card" style="width: 15rem; margin-right: 10px;">
            <img src="{{asset('img/pemrograman.jpg')}}" class="card-img-top" alt="pemrograman">
            <div class="tik-kategori">
                <h5 class="card-title">Pemgrogrman dasar</h5>
                <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai Pemrograman Dasar.</p>
                <button type="button" disabled>Not Yet</button>
            </div>
            </div>
            </li>

            <li>
            <div class="card" style="width: 15rem; margin-right: 10px;">
            <img src="{{asset('img/iot.jpg')}}" class="card-img-top" alt="iot">
            <div class="tik-kategori">
                <h5 class="card-title">IOT</h5>
                <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai Internet Of Things.</p>
                <button type="button" disabled>Not Yet</button>
            </div>
            </div>
            </li>

           
           </ul>
        </div>
@endsection

