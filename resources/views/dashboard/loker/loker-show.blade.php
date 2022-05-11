@extends('dashboard.layout.layoutDashboard.masterDashboard')
@section('title','Detail | Web Developer')
@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('dashboard.lokerWebdev')}}" style="float: right;" class="btn btn-default">&laquo; Back</a>
        </div>
        @forelse($loker as $loker1)
        <div class="row">
            <div class="col-md" id="bg-color">
            </div>
            {{-- content --}}
            <div class="col-md-8 py-5 px-5" id="bg-putih">
                <div class="row">
                    <div class="col">
                        <h3 class="display-5"> {{$loker1->nama_perusahaan}} </h3>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                    <div class="col">
                        <h3 class="font-monospace fs-4"> {{$loker1->bagian}} </h3>
                        <p class="font-monospace fs-4"> 
                        {{$loker1->alamat}} <br>
                        Di tayankan pada {{$loker1->created_at}} 
                        </p>
                    </div>
                </div> <br><br>
                <div class="row">
                    <div class="col">
                         <p class="font-monospace fs-4"> Deksripsi Pekerjaan </p>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col">
                        <h5 class="font-monospace fs-4"> <b>Job Description</b> </h5> <br>
                        <p class="font-monospace fs-4"> 
                        Requirements : <br>
                        <ol>
                            {{$loker1->requirements}}
                        </ol>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p>{{$loker1->keterangan}}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="font-monospace fs-4"> Informasi Tambahan </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p> Kualifikasi</p>
                        <p id="FC"> {{$loker1->kualifikasi}} </p>
                    </div>

                    <div class="col">
                        <p> Jenis Pekerjaan </p>
                        <p id="FC"> Penuh Waktu </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p> RENTANG USIA </p>
                        <p id="FC"> Minimal 19 tahun </p>
                    </div>

                    <div class="col">
                        <p> KESEHATAN </p>
                        <p id="FC"> - </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p> PERSYARATAN KHUSUS </p>
                        <p id="FC"> Bisa Mengoperasikan Laptop/Komputer </p>
                    </div>

                    <div class="col">
                        <p> JENIS KELAMIN </p>
                        <p id="FC"> Laki-laki & Perempuan </p>
                    </div>
                </div>

                <hr class="my-4">

            </div>
            {{-- akhir content --}}

            <div class="col-md" id="bg-color">
            </div>
        </div>
        @empty
        <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
    </div>
@endsection