@extends('dashboard.layout.layoutDashboard.masterDashboard')
@section('title','Job Vacancy | Web Developer')
@section('content')
    <!-- End of Topbar -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Informasi Lowongan Pekerjaan</h1>
    </div>
    <div class="container">
        
                <!-- Tambah Data -->
                     @if(auth()->user()->level == 'admin')
                     <div class="clearfix">
                    <div class="row" style="float: left;">
                        <div class="col"></div>
                        

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" style="margin-bottom: 20px;">
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
                            <form action="{{ route('dashboard.lokerStore') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="nama_perusahaan" class="col-md-4 col-form-label text-md-right">Nama Perusahaan</label>

                                    <div class="col-md-6">
                                        <input id="nama_perusahaan" type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" required autocomplete="nama_perusahaan" autofocus>

                                        @error('nama_perusahaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>

                                    <div class="col-md-6">
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" >

                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bagian" class="col-md-4 col-form-label text-md-right">Bagian</label>

                                    <div class="col-md-6">
                                        <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror" name="bagian" value="{{ old('bagian') }}" required autocomplete="bagian" >

                                        @error('bagian')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="idr" class="col-md-4 col-form-label text-md-right">IDR</label>

                                    <div class="col-md-6">
                                        <input id="idr" type="number" class="form-control @error('idr') is-invalid @enderror" name="idr" value="{{ old('idr') }}" required autocomplete="idr" >

                                        @error('idr')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="requirements" class="col-md-4 col-form-label text-md-right">Requirements</label>

                                    <div class="col-md-6">
                                        <input id="requirements" type="text" class="form-control @error('requirements') is-invalid @enderror" name="requirements" value="{{ old('requirements') }}" required autocomplete="requirements" >

                                        @error('requirements')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kualifikasi" class="col-md-4 col-form-label text-md-right">Kualifikasi</label>

                                    <div class="col-md-6">
                                        <input id="kualifikasi" type="text" class="form-control @error('kualifikasi') is-invalid @enderror" name="kualifikasi" value="{{ old('kualifikasi') }}" required autocomplete="kualifikasi" >

                                        @error('kualifikasi')
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
                    </div>
                    @endif
                <!-- Akhir Tambah Data -->

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
    
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Lowongan Pekerjaan - Web Developer</h6>
                </div>

        
                <!-- Card Body -->
                <div class="card-body">
                    <form action="{{ route('dashboard.lokerFind') }}" style="float: right; " class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        <input type="text"  name="query" value="{{ request()->input('query') }}" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>  
                    </form>
                    <div class="table-responsive-lg">
                     <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>@sortablelink('name', 'Nama Perusahaan')</th>
                                    <th>@sortablelink('alamat', 'Alamat')</th>
                                    <th>@sortablelink('bagian', 'Bagian')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($loker as $loker1)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td> <a href="{{$loker1->website}}">{{$loker1->nama_perusahaan}}</a> </td>
                                    <td> {{$loker1->alamat}} </td>
                                    <td> {{$loker1->bagian}} </td>
                                     <td><a href="{{route('dashboard.showLoker', $loker1->loker_id)}}" class="btn btn-success">Detail</a></td>
                                     @if(auth()->user()->level == 'admin')
                                     <td>
                                        <a href="{{route('dashboard.lokerWebdevEdit', $loker1->loker_id)}}" class="btn btn-warning"><img  src="https://img.icons8.com/carbon-copy/20/000000/pencil.png"/></a>

                                        <form action="{{route('dashboard.lokerWebdevDelete', $loker1->loker_id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" onclick="return confirm ('Apakah Anda Yakin?');"><img  src="https://img.icons8.com/carbon-copy/20/000000/trash.png"/></button>
                                        </form>
                                     </td>
                                     @endif

                                </tr>
                                @empty
                                <td colspan="6" class="text-center">Tidak ada data...</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-info-circle" style="color: rgb(247,144,62);"></i> Information</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <p>Mohon maaf untuk saat ini kami hanya mengambil data dari <a href=" {{url('https://www.jobstreet.co.id/')}} "> <i>Jobstreet</i> </a>Tanpa adanya persetujuan dengan pihak terkait seperti perlu adanya API untuk terintegrasi dengan jobstreet karena website ini masih dalam tahap testing.</p>
                    <footer class="blockquote-footer">E-Kerja <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <script>
        function reload_ajax() {
            table.ajax.reload(null, false);
        }
    </script>
@endsection