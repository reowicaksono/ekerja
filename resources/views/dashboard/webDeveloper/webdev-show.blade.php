@extends('dashboard.layout.layoutDashboard.masterDashboard')
@section('title','Web Developer Course')

@section('content')


                <!-- End of Topbar -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Web Developer</h1>
                        <a href="{{route('webDev')}}" style="float: right;" class="btn btn-default">&laquo; Back</a>
                    </div>
                       

                        




                    <!-- Content Row -->
                    @if(auth()->user()->level == 'admin')
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"></div>
                        @forelse ($web as $web1)
                        <div class="col-auto">
                            <a href=" {{route('webDev.edit', $web1->webdevs_id)}} " class="btn btn-warning">Update</a>
                        </div>    
                        <div class="col-auto">
                        
                        <form action="{{url('/web-developer/show/'.$web1->webdevs_id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm ('Apakah Anda Yakin?');"> Delete</button>
                        @empty
                        <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                        </form>
                        </div>    

                    </div>
                    @endif
                    @foreach($web as $webdevs)
                    <div class="row">
                        <div class="col">
                            <!-- Course -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"> {{$webdevs->judul}} </h6>
                                </div>
                                
                                <div class="card-body">
                                @forelse ($web as $results)
                                    <div class="row  align-items-center">
                                       <div class="col-lg-3">
                                            
                                       </div>
                                       <div class="col">
                                       <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/{{$results->alamat_course}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                    </div>
                                    @empty
                                </div>
                                @endforelse
                                <div class="row">
                        

                        @if(!session('kuis') )
                                                                <!-- Nav Item - Quizz Collapse Menu -->
                        <li class="nav-item" >
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuizz"
                                aria-expanded="true" aria-controls="collapseQuizz" style="background-color: blue;">
                                
                                <span style="color: white;">Quizz - Click Here..</span>
                            </a>
                            
                            <div id="collapseQuizz" class="collapse" aria-labelledby="headingQuizz"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    @forelse($soal as $pertanyaan)
                                    <?php $a = $loop->iteration; $b = $loop->index; ?>
                                    <h6 class="collapse-header">{{$a}}  {{$pertanyaan->soal}}</h6>
                                    <form action="{{route('webDev.jawab',$pertanyaan->webdevs_id)}}" method="get">
                                        <p>A.{{$pertanyaan->A}}    B.{{$pertanyaan->B}}</p>
                                        <p>C.{{$pertanyaan->C}}    D.{{$pertanyaan->D}}</p>
                                        <select name="kuis{{$b}}" id="kuis{{$b}}">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                        
                                     @empty
                                    @endforelse
                                    
                                    <center><button type="submit" class="btn btn-primary" onclick="return confirm ('Apakah Anda Yakin?');">Save</button></center>
                                    </form>
                                    
                                </div>
                            </div>
                        </li> 
                        @endif
                          
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