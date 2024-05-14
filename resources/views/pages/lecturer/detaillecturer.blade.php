@extends('layout.app')

@section('tittle')
lecturer
@endsection

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
        
  <nav>
      <div class="container">
      <ol>
          <li><a href="index.html">Beranda</a></li>
          <li>Staff & Pengajar</li>
      </ol>
    </div>
  </nav>
      
  
  </div><!-- End Breadcrumbs -->
<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
  <div class="container " data-aos="fade-up">

    <div class="section-header ">
      <h2>Pengurus Prodi</h2>
      <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
    </div>

    <div class="row gy-4">

      <div class=" row justify-content-center">
      <div class="col-xl-3 col-md-6 d-flex " data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="fronendpaud/assets/img/team/profileKP.png" class="img-fluid" alt="">
          <h4>Renti Aprisyah, S.Pd., M.Pd</h4>
          <span>Ketua Prodi</span>
         </div>
      </div>
      <!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="fronendpaud/assets/img/team/ProfileWKP.png" class="img-fluid" alt="">
          <h4>Khoirudin, S.Sos.i., M.Pd</h4>
          <span>Sekretaris Prodi</span>
          </div>
      </div>
      <!-- End Team Member -->
    </div>
    </div>
  </div>
</section>
<!-- End Our Team Section -->
    
<!-- start Our list Lecturer Section -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2> Daftar Pengajar</h2>
      <div class="row justify-content-center">
        <div class="col-6">
          <form action="" method="get">
            <input class="form-control" type="text" placeholder="Masukan Nama Pengajar" name="key" aria-label="key">
           </form>
          </div>
        </div>
           <!-- end search form -->
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

              <tbody>
                @foreach ($guru as $item)  
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->matakuliah}}</td><br>
                </tr>
                @endforeach
              </tbody>
            </tbody>
          </table>
          {{ $guru->onEachSide(5)->links()}}
          </div>
      </section>

@endsection