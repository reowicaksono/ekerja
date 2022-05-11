@extends('dashboard.layout.layoutDashboard.masterDashboard')
@section('title','My Profile')
@section('content')
<?php
    $gambar = auth()->user()->gambar;
    $kategori = auth()->user()->nama_kategori;
    $nama = auth()->user()->name;
    $email = auth()->user()->email;
    $level = auth()->user()->level;
    $email_verified = auth()->user()->email_verified_at;
    $created_at = auth()->user()->created_at;
?>
 <!-- End of Topbar -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    
                    <div class="row">
                        <div class="col">
                            <!-- Course -->
                            <div class="card shadow mb-4" ">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"> Profile Acount </h6>
                                </div>
                                
                               <div class="card mb-3" margin: 30px auto;">
                                    @foreach($joinn as $usr)
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                        @if($gambar == '')
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="defaultprofile" width="350px">
                                        @else
                                            <img src="{{asset('img/')}}/{{$gambar}}" alt="profile" width="350px">
                                        @endif
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title ml-6"> {{$usr->name}} </h5>
                                            <p>Alamat : {{$usr->Tempat_Tinggal}}, {{$usr->Provinsi}}</p>
                                            <p>Email : {{$email}} </p>
                                            @if( $level == 'user')
                                            <p>Kategori : {{$kategori}} </p> 
                                            @endif
                                            <p>No Telepon : {{$usr->No_Telepon}}</p>
                                            <p>Pekerjaan : {{$usr->pekerjaan}}</p>
                                            <p>Tanggal Lahir : {{$usr->tanggal_lahir}}</p>
                                            <p>Verifikasi Email : {{$email_verified}} </p>
                                            <p>Akun di buat : {{$created_at}} </p>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->


            <!-- End of Main Content -->    
@endsection