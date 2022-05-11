@extends('dashboard.layout.layoutDashboard.masterDashboard')
@section('title','C++ Course')

@section('content')
                <!-- End of Topbar -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">C++</h1>
                        <a href="{{route('cplusPlus')}}" style="float: right;" class="btn btn-default">&laquo; Back</a>
                    </div>

                    <!-- Content Row -->
                    @if(auth()->user()->level == 'admin')
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"></div>
                        @forelse ($cpp as $cppd)
                        <div class="col-auto">
                            <a href=" {{route('cplusPlus.edit', $cppd->cpp_id)}} " class="btn btn-warning">Update</a>
                        </div>    
                        <div class="col-auto">
                        
                        <form action="{{url('cpp/show/'.$cppd->cpp_id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm ('Apakah Anda Yakin?');"> Delete</button>
                        </form>
                        </div>    
                        @empty
                        <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </div>
                    @endif
                    @foreach($cpp as $cpps)
                    <div class="row">
                        <div class="col">
                            <!-- Course -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"> {{$cpps->judul}} </h6>
                                </div>
                                
                                <div class="card-body">
                                
                                    <div class="row  align-items-center">
                                       <div class="col-lg-3">
                                            
                                       </div>
                                       <div class="col">
                                       <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/{{$cpps->alamat_course}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection