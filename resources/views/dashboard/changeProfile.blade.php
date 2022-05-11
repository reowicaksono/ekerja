@extends('dashboard.layout.layoutDashboard.masterDashboard')
@section('title','My Profile')
@section('content')
<?php
    $gambar = auth()->user()->gambar;
    $kategori = auth()->user()->nama_kategori;
    $nama = auth()->user()->name;
    $email = auth()->user()->email;
    $id = auth()->user()->user_id;
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
                                    
                                    <div class="row g-0">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <div class="p-5">
                                                            <div class="text-center">
                                                                <h1 class="h4 text-gray-900 mb-4">Update an Account!</h1>
                                                            </div>
                                                            <form method="POST" action="{{ route('dashboard.changeProfileUpdate', $id) }}" enctype="multipart/form-data">
                                                            @method('PATCH')
                                                            @csrf

                                                            @foreach($joinn as $usr)   
                                                            <div class="form-group row">
                                                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>

                                                                <div class="col-md-6">
                                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$nama}}" autocomplete="name" disabled>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$email}}" autocomplete="email" disabled>

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="Tempat_Tinggal" class="col-md-4 col-form-label text-md-right">Tempat Tinggal</label>

                                                                <div class="col-md-6">
                                                                    <input id="Tempat_Tinggal" type="Tempat_Tinggal" class="form-control @error('Tempat_Tinggal') is-invalid @enderror" name="Tempat_Tinggal" value="{{$usr->Tempat_Tinggal}}" required autocomplete="Tempat_Tinggal">

                                                                    @error('Tempat_Tinggal')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="No_Telepon" class="col-md-4 col-form-label text-md-right">No Telepon</label>

                                                                <div class="col-md-6">
                                                                    <input id="No_Telepon" type="No_Telepon" class="form-control @error('No_Telepon') is-invalid @enderror" name="No_Telepon" value="{{$usr->No_Telepon}}" required autocomplete="No_Telepon">

                                                                    @error('No_Telepon')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">Pekerjaan</label>

                                                                <div class="col-md-6">
                                                                    <input id="pekerjaan" type="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{$usr->pekerjaan}}" required autocomplete="pekerjaan">

                                                                    @error('pekerjaan')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="gambar" class="col-md-4 col-form-label text-md-right">Photo Profile</label>

                                                                <div class="col-md-6">
                                                                    <input id="gambar" type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{$gambar}}"  autocomplete="gambar">

                                                                    @error('gambar')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            @endforeach

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-6 offset-md-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->


            <!-- End of Main Content -->    
@endsection