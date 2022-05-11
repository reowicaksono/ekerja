@extends('welcome.layout.master')
@section('title','Home Page | E-Kerja')

@section('content')
            <!-- WorkingSpace -->

            <div class="row workingspace" >
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="400" >
                    <h3> <span>Why </span>Lern  With <span>Us</span> </h3>
                    <p>Seluruh materi bersifat gratis tanpa di pungut biaya apapun. <br>
                        Materi sudah di sesuikan dengan kebutuhan industri 4.0 <br>
                        Jadi, kamu bisa belajar dengan materi yang sudah up-to-date.
                    </p>
                    <a href="/register" class="btn btn-primary tombol" style="margin: 20px ;">Get started</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('img/learn.jpg')}}" alt="workingspace" class="img-fluid" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="400">
                </div>
            </div>
            <div class="row workingspace">
                <div class="col-lg-6">
                    <img src="{{asset('img/daring.jpg')}}" alt="workingspace" class="img-fluid" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="250">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="250">
                    <h3> <span>Get </span>New Skill  </h3>
                    <p>Kami berkomitmen untuk meningkatkan kualitas kerja Anda. <br>
                        Oleh karena itu, kami menyarankan Anda untuk memilih pelatihan kerja di E-Kerja <br>
                        Anda tidak hanya mendapatkan materi saja melainkan sertifkat dan relasi.
                    </p>

                    <a href="" class="btn btn-primary tombol" style="margin-bottom: -30px ;">Get Started</a>
                </div>
            </div>

        </div>
            <!-- Akhir WorkingSpace -->

            <!-- Kategori -->
            <div class="kategori" >
                <div class="row">
                    <p><span>Find Your Favourite Course</span></p>
                </div>
                <div class="row">
                    <div class="col-lg-3" >
                        <div class="card1" style="width: 17.5rem;" data-aos="flip-left" data-aos-delay="200" data-aos-offset="370" data-aos-duration="2000" >
                        <img src="{{asset('img/ti.jpg')}}" class="card-img-top" alt="ti">
                        <div class="card-body">
                            <h5 class="card-title">Teknologi Informasi</h5>
                            <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai kejuruan Teknologi Informasi dan Komunikasi</p>
                            <a href="/tik" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="card2" style="width: 17.5rem;" data-aos="flip-left" data-aos-delay="400" data-aos-offset="370" data-aos-duration="2000" >
                        <img src="{{asset('img/elektro.jpg')}}"  class="card-img-top" alt="te">
                        <div class="card-body">
                            <h5 class="card-title">Teknik Elektronika</h5>
                            <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai kejuruan Teknik Elektronika</p>
                            <button type="button" disabled>Not Yet</button>
                        </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card3" style="width: 17.5rem;" data-aos="flip-right" data-aos-delay="600"
                        data-aos-offset="370" data-aos-duration="2000">
                        <img src="{{asset('img/agribisnis.jpg')}}" class="card-img-top" alt="agribisnis">
                        <div class="card-body">
                            <h5 class="card-title">Agribisnis</h5>
                            <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai kejuruan di bidang Agribisnis</p>
                            <button type="button" disabled>Not Yet</button>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card3" style="width: 17.5rem;" data-aos="flip-right" data-aos-delay="800"
                        data-aos-offset="370" data-aos-duration="2000">
                        <img src="{{asset('img/ekonomi.jpg')}}" class="card-img-top" alt="bisnis">
                        <div class="card-body">
                            <h5 class="card-title">Manajemen Ekonomi </h5>
                            <p class="card-text">Pelajari dan ikuti pelatihan kerja mengenai kejuruan Manajemen Ekonomi dan Bisnis</p>
                            <button type="button" disabled>Not Yet</button>
                        </div>
                    </div>


                </div>
            </div>

            <!-- Akhir Kategori -->

            <!-- Tutorial -->
                <div class="container" >
                   <div class="tutorial">
                        <div class="row">
                            <h3>Simple Step Your Developments</h3>
                        </div>
                        <div class="row">
                        
                            <div class="col-md-1" >
                                <img src="{{asset('img/skill.png')}}" alt="ti" width="100px">
                            </div>
                        
                            <div class="col-md-3">
                                <div class="card-body">
                                <h5 class="card-title">Choose a Skill</h5>
                                <p class="card-text">Pilih pelatihan kerja sesuai keinginan atau kesukaan Anda</p>
                             
                                </div>
                            </div>

                            <div class="col-md-1" >
                                <img src="{{asset('img/calendar.png')}}" alt="ti" width="100px" style="margin-left: 10px;">
                            </div>
                        
                            <div class="col-md-3">
                                <div class="card-body">
                                <h5 class="card-title">Learn Anywhere and Anytime </h5>
                                <p class="card-text">Belajar di mana saja dan kapan saja hanya bermodalkan internet saja.</p>
                                
                                </div>
                            </div>

                            <div class="col-md-1" >
                                <img src="{{asset('img/certificate.png')}}" alt="sertifikat" width="100px" style="margin-left: 10px;">
                            </div>
                        
                            <div class="col-md-3">
                                <div class="card-body">
                                <h5 class="card-title">Get a Certificate</h5>
                                <p class="card-text">Dapatkan sertifikat pelatihan kerja sesuai jurusan yang Anda pilih secara gratis</p>
                               
                                </div>
                            </div>

    

                        </div>
                   </div>
                </div>
            <!-- Akhir Tutorial -->
@endsection