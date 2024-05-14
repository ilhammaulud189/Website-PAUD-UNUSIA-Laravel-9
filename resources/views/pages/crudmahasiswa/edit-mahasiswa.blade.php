@extends('layout.admin')



@section('content')

   <div class="container-fluid px-4">
    <h1 class="mt-4">Data Mahasiswa</h1>
    <form action="{{route('Student.update', $data->id)}}" method="POST">
      @csrf
      @method('PUT')
            <div class="row">
                <div class="col-md-3">
                  <input type="text" name='jumlah' value="{{$data->jumlah}}" class="form-control" >
                </div>
                <div class="col-md-3">
                  <input type="text" name='angkatan' value="{{$data->angkatan}}" class="form-control">
                </div>
                <div class="col-md-3">
                  <input type="text" name='lulusan' value="{{$data->lulusan}}" class="form-control" >
                </div>
              </div>
              <button class="btn btn-success mt-3 mb-3" type="submit"> <i class="bi bi-gear-wide-connected p-1"></i>Save</button>
      </form>
    </div> 

    
@endsection