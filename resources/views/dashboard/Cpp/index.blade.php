@extends('dashboard.layout.layoutDashboard.masterDashboard')
@section('title','C++ Course')

@section('content')
                <!-- End of Topbar -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">C++</h1>
                    </div>
                    
                    @if(session()->has('pesan'))
                        <div class="alert alert-success">
                        {{ session()->get('pesan')}}
                        </div>
                    @endif
                    @if(session()->has('hapus'))
                        <div class="alert alert-danger">
                        {{ session()->get('hapus')}}
                        </div>
                    @endif
                    @if(session()->has('update'))
                        <div class="alert alert-success">
                        {{ session()->get('update')}}
                        </div>
                    @endif

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Course  Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Course</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" > 
                                                <p class="card-text"><small class="text-muted"> {{count($joinn)}} Course </small></p>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Total Mentor Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Sumber Course </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                               <p class="card-text"><small class="text-muted"> Web Programing Unpas </small></p>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fab fa-youtube fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Participants Web Developer
                                            </div>
                                        
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><p class="card-text"><small class="text-muted"> {{$user}} Participants </small></p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Mentor Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Mentor</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><p class="card-text"><small class="text-muted"> {{$mentor}} Mentor </small></p></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-edit fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    @if(auth()->user()->level == 'admin')
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"></div>
                        

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Add
                        </button>
          
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('cplusPlus.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4 col-form-label text-md-right">Judul</label>

                                    <div class="col-md-6">
                                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="link" class="col-md-4 col-form-label text-md-right">Alamat Course</label>

                                    <div class="col-md-6">
                                        <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" required autocomplete="link" autofocus>

                                        @error('link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <input type="hidden" value="1" id="user_id" name="user_id">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                            </form>
                        </div>
                        </div> 



                    </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            <!-- Course -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Course</h6>
                                </div>
                                
                                <div class="card-body">
                                @forelse ($cpp as $results)
                                    <div class="row  align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <a href="/cpp/show/{{$results->cpp_id}}">{{$results->judul}}</a></div>
                                        </div>
                                        <div class="col">
                                            <a href="https://www.youtube.com/watch?v={{$results->alamat_course}}"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="col-auto">
                                            <p>{{$results ->created_at}}</p>
                                        </div>
                                    </div>
                                    @empty
                                </div>
                                @endforelse
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection