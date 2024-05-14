@extends('layout.admin')


@section('content')
    

<section>
    <div class="container" data-aos="fade-up">
          <div class="container-fluid">
             <div class="mb-0">
               <form action="{{route('blog.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                 <input type="hidden" name="foto" value="{{$data->foto}}">
                 
                 <h1>Artikel</h1>
                 <label for="" class="form-label"></label>
                 <input type="text" name="judul" value="{{$data->judul}}"class="form-control @error('judul') is-invalid    
                 @enderror" placeholder="Judul">
                 @error('judul')
                 <div  class="invalid-feedback">
                      {{ $message }}
                   </div>
                  @enderror
               </div>
  
               <div class="mb-3">
                 <label for="" class="form-label"></label>
                 <textarea class="form-control" type="text" name="deskripsi" rows="12" id="deskripsi">{!!$data->deskripsi!!}
                 </textarea>
               </div>
  
               @if ($data->foto)
               <div class="mb-3">
                <img width="300px" src="{{url('storage/public/postfoto/'.$data->foto)}}">
               </div>
                   @endif
               <div class="mb-3" >
                 <label for="file" class="form-label"></label>
                 <input class="form-control form-control-sm" name="foto" {{$data->foto}} type="file" >
               </div>
               
               <div class="d-grid gap-3 d-md-flex justify-content-md-end">
               <button class="btn btn-success mt-3" type="submit">Simpan</button>
               </form>
               </div>
             </div>
             </div>
           </section>
 @endsection

 @section('scriptjs')
<script>
  ClassicEditor
      .create( document.querySelector( '#deskripsi' ),{
        toolbar: [ 'undo','redo','|','heading','|','bold','italic','link','blockQuote', 'codeBlock',
        '|', 'bulletedList', 'numberedList'],
      } )
      .catch( error => {
          console.error( error );
      } );
</script>

@endsection