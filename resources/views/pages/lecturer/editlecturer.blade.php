@extends('layout.admin')



@section('content')

<div class="container-fluid">
  <div class="mb-0">
    <form action="{{route('lecturer.update', $data->id)}}" method="POST">
      @csrf
      @method('PUT')
      <h1>Data Pengajar</h1>
      <label for="" class="form-label"></label>
      <input type="text" name="nama" value="{{$data->nama}}" class="form-control  @error('nama') is-invalid    
      @enderror" placeholder="Nama Pengajar">
      @error('nama')
      <div  class="invalid-feedback">
           {{ $message }}
        </div>
       @enderror
    </div>

    <div class="mb-0">
      <label for="" class="form-label"></label>
      <input type="text" name="matakuliah" value="{{$data->matakuliah}}" class="form-control @error('matakuliah') is-invalid    
      @enderror"  placeholder="Tuliskan mata kuliah">
      @error('matakuliah')
      <div  class="invalid-feedback">
           {{ $message }}
        </div>
       @enderror
    </div>
    
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-success mt-3" type="submit">Simpan</button>
  </form>
    </div>
  </div>
    
@endsection