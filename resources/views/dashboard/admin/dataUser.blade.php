@extends('dashboard.layout.layoutDashboard.masterDashboard')
@section('title','Data User')

@section('content')
 <!-- End of Topbar -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
        </div>

        @if(session()->has('pesan'))
            <div class="alert alert-danger">
            {{ session()->get('pesan')}}
            </div>
        @endif
        
        @if(session()->has('success'))
            <div class="alert alert-success">
            {{ session()->get('success')}}
            </div>
        @endif

        <!-- Content Row -->
    
        <div class="row">
            <div class="col">
                <!-- Course -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Data User  </h6>
                    </div>
                    
                    <div class="card-body">
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-4">
                                    <form class="form-inline" method="GET">
                        <div class="form-group mb-2">
                        <label for="fliter">Show</label>
                            <select name="filter" id="filter" >
                                <option value="5">5</option>
                                <option value="10">10</option>
                            </select>

                        </div>
                        
                        <button type="submit" class="btn btn-default mb-2">Filter</button>
                       
                    </form>
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('dashboard.printpdfDataUser')}}" target="_blank" class="btn btn-danger"><i class="fas fa-file-pdf"></i>  Print PDF</a>
                                <a href="{{route('dashboard.excel')}}" target="_blank" class="btn btn-success" style="margin-top: 5px;"><i class="fas fa-file-excel"></i>  Export Excel</a>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ route('dashboard.search') }}" style="float: right; " class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                <input type="text"  name="query" value="{{ request()->input('query') }}" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>  
                            </form>
                            </div>
                        </div>
                     

                                
                            <div class="row"><span class="text-danger">@error('query'){{ $message }} @enderror</span></div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>@sortablelink('name', 'Nama')</th>
                                    <th>@sortablelink('email', 'Email Address')</th>
                                    <th>@sortablelink('nama_kategori', 'Kategori')</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datauser as $dataUSer)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td> {{$dataUSer->name}} </td>
                                    <td> {{$dataUSer->email}} </td>
                                    <td> {{$dataUSer->nama_kategori}} </td>
                                    <td>
                                    <form action="{{url('/dashboard/data-user/'.$dataUSer->user_id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm ('Apakah Anda Yakin?');"><img  src="https://img.icons8.com/carbon-copy/20/000000/trash.png"/></button>
                                    </form>

                                    <a href="{{route('dashboard.edit', $dataUSer->user_id)}}" class="btn btn-warning"><img  src="https://img.icons8.com/carbon-copy/20/000000/pencil.png"/></a>                                                


                                    </td> 
                                </tr>
                                @empty
                                <td colspan="6" class="text-center">Tidak ada data...</td>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="pull-left">
                            Showing
                            {{$datauser->firstItem()}}
                            to
                            {{$datauser->LastItem()}}
                            entries
                            {{$datauser->total()}}
                        </div>
                        <div class="pull-right" style="float: right;">
                            {{$datauser->links('dashboard.admin.pagination')}}
                        </div>
                    </div>
                    
                    
                </div>
            </div>
                                    <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-info-circle" style="color: rgb(247,144,62);"></i> Information</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <p>"Hak Akses Anda hanya dapat mengedit dan menghapus data user saja.</p>
                        <footer class="blockquote-footer">E-Kerja <cite title="Source Title"></cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">       
        </div>
        
    </div>
    <!-- /.container-fluid -->


<!-- End of Main Content -->



@endsection