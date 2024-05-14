@extends('layout.admin')


@section('content')
 
<section>
  <div class="container" data-aos="fade-up">
        <div class="container-fluid">
           <div class="mb-0">
            
               
               <h1>Kaprodi Paud</h1>
               <label for="" class="form-label"></label>
               <input type="text" name="judul" class="form-control @error('Nama Kaprodi') is-invalid    
               @enderror" placeholder="Masukan Nama Dan gelar">
               @error('Nama Kaprodi')
               <div  class="invalid-feedback">
                    {{ $message }}
                 </div>
                @enderror
             </div>

             <div class="mb-3" >
               <label for="file" class="form-label"></label>
               <input class="form-control" name="foto" type="file">
               
             </div>
             <p class="card-text">gambar transparan dengan dimensi 720x450 px</p>
             
             <div class="d-grid gap-3 d-md-flex justify-content-md-end">
             <button class="btn btn-success mt-3" type="submit">Submit</button>
             </form>
             </div>
           </div>
           </div>
         </section>


   
@endsection
