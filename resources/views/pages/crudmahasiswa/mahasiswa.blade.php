@extends('layout.admin')



@section('content')



    
@foreach ($student as $item)
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Mahasiswa</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card customgreen text-white mb-4">
                        <div class="card-body">Jumlah Mahasiswa Aktif
                        <h1>{{$item->jumlah}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card customgreen text-white mb-4">
                        <div class="card-body">Angkatan
                            <h1>{{$item->angkatan}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card customgreen text-white mb-4">
                        <div class="card-body">Jumlah Lulusan
                            <h1>{{$item->lulusan}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        <div class="btn btn-success mt-3 mb-3"><i  class="bi bi-gear-wide-connected p-1"></i>
            <a href="student/{{$item->id}}/edit">Pengaturan</a>
        </div>
    </div> 
@endforeach
    
@endsection