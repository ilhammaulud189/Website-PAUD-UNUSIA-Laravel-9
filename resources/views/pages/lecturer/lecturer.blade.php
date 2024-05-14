@extends('layout.admin')


@section('content')

                     <div class="container-fluid">
                        <div class="mb-0">
                          <form action="{{route('lecturer.store')}}" method="POST">
                            @csrf
                            <h1>Data Pengajar</h1>
                            <label for="" class="form-label"></label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid    
                            @enderror" placeholder="Nama Pengajar">
                            @error('nama')
                            <div  class="invalid-feedback">
                                 {{ $message }}
                              </div>
                             @enderror
                          </div>

                          <div class="mb-0">
                            <label for="" class="form-label"></label>
                            <input type="text" name="matakuliah" class="form-control @error('matakuliah') is-invalid    
                            @enderror"  placeholder="Keahlian">
                            @error('matakuliah')
                            <div  class="invalid-feedback">
                                 {{ $message }}
                              </div>
                             @enderror
                          </div>
                          
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <button class="btn btn-success mt-3" type="submit">Submit</button>
                        </form>
                          </div>
                        </div>

    <!-- start Our list Lecturer Section -->
    
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
        
  <!-- search -->
    <div class="justify-content-end-50 w-25">
      <form action="" method="get">
      <label for="" class="form-label"></label>
      <input class="form-control" type="text" placeholder="Masukan Nama Pengajar" name="key" aria-label="key">
      </form>
      </div>
 
          <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">Keahlian</th>
              </tr>
            </thead>
            <tbody>
              @php
    $no = 1 + (($guru->currentPage()-1)*$guru->perPage());
    @endphp
    @foreach ($guru as $item)

              <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$item->nama}}</td>
                <td>{{$item->matakuliah}}</td>
                <td><div class="dropdown">
                  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Pengaturan
                  </button>
                  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="editlecturer/{{$item->id}}/edit">Edit Data</a></li>
                    <li><form action="lecturer/{{$item->id}}" class="dropdown-item" method="POST">
                      @csrf
                      @method('DELETE')
                    
                      <input type="submit" value="Hapus">
                    
                    </form></li>
                  </ul>
                </div></td>
              </tr>
             </tbody>
            @endforeach
            
          </table>
         
          {{ $guru->onEachSide(5)->links() 
          
}}
          </div>
            
          
      </section>

      <!-- end Our list Lecturer Section -->

@endsection