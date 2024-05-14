@extends('layout.admin')


@section('content')
    

<section>
    <div class="container" data-aos="fade-up">
          <div class="container-fluid">
             <div class="mb-0">
               <form action="{{route('testimoni.update', $test->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                 <input type="hidden" name="foto" value="{{$test->foto}}">
                 
                 <h1>Edit Testimonial</h1>
                 <label for="" class="form-label"></label>
                 <input type="text" name="nama" value="{{$test->nama}}"class="form-control @error('nama') is-invalid    
                 @enderror" placeholder="nama">
                 @error('nama')
                 <div  class="invalid-feedback">
                      {{ $message }}
                   </div>
                  @enderror
                 <label for="" class="form-label"></label>
                 <input type="text" name="detail" value="{{$test->detail}}"class="form-control @error('detail') is-invalid    
                 @enderror" placeholder="detail">
                 @error('detail')
                 <div  class="invalid-feedback">
                      {{ $message }}
                   </div>
                  @enderror
               </div>
  
               <div class="mb-3">
                 <label for="" class="form-label"></label>
                 <textarea class="form-control" type="text" name="testimoni" rows="12">{{$test->testimoni}}
                 </textarea>
               </div>
  
               @if ($test->foto)
               <div class="mb-3">
                <img width="300px" src="{{url('storage/public/testimoni/'.$test->foto)}}">
               </div>
                   @endif
               <div class="mb-3" >
                 <label for="file" class="form-label"></label>
                 <input class="form-control form-control-sm" name="foto" {{$test->foto}} type="file" >
               </div>
               
               <div class="d-grid gap-3 d-md-flex justify-content-md-end">
               <button class="btn btn-success mt-3" type="submit">Simpan</button>
               </form>
               </div>
             </div>
             </div>
           </section>
 @endsection