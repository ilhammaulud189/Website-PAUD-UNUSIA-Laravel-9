@extends('layout.admin')


@section('content')
 
<section>
    <div class="container" data-aos="fade-up">
          <div class="container-fluid">
             <div class="mb-0">
               <form action="{{route('testimoni.store')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <h1>Testimonial</h1>
                 <label for="" class="form-label"></label>
                 <input type="text" name="nama" placeholder="nama" class="form-control @error('nama') is-invalid    
                 @enderror" >
                 @error('nama')
                 <div  class="invalid-feedback">
                      {{ $message }}
                   </div>
                  @enderror
                 <label for="" class="form-label"></label>
                 <input type="text" name="detail" placeholder="detail" class="form-control @error('detail') is-invalid    
                 @enderror" >
                 @error('detail')
                 <div  class="invalid-feedback">
                      {{ $message }}
                   </div>
                  @enderror
               </div>

               <div class="mb-3">
                <label for="" class="form-label"></label>
                <textarea class="form-control" placeholder="testimoni" name="testimoni" rows="12">
                </textarea>
              </div>
  
               <div class="mb-3" >
                 <label for="file" class="form-label"></label>
                 <input class="form-control" name="foto" type="file">
               </div>
               
               <div class="d-grid gap-3 d-md-flex justify-content-md-end">
               <button class="btn btn-success mt-3" type="submit">Submit</button>
               </form>
               </div>
             </div>
             </div>
           </section>
  
 <!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container mt-3" data-aos="fade-up">

    <div class="row gy-4 posts-list">
      
  <div class="row">
  @foreach ($testimoni as $item)
  <div class="col-sm-3 mt-4">
    <div class="card">
      <img src="{{asset('storage/public/testimoni/'.$item->foto)}}" class="image">
      <div class="card-body">
        <div class="container p-1">
        <h5 class="title">{{ Str::limit($item->testimoni, 10)}}</h5>
      </div>
        
      </div>
       <!-- option group button -->
       <div class="pt-1">
        <div class="dropdown p-3">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            Pengaturan
           </button>
           <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="edittestimoni/{{$item->id}}/edit">Edit Data</a></li>
           <li><form action="testimoni/{{$item->id}}" method="POST">
              @csrf
              @method('DELETE')
          
          <input class="dropdown-item" type="submit" value="Hapus" >
         </form></li>
         </ul>
        </div>
      </div>
      <!-- option group button -->
    </div>
  </div>
  @endforeach
</div>

 
    </section>
  
     
  @endsection
