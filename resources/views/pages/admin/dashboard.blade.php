@extends('layout.admin')


@section('content')
            <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Selamat Datang</li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card customgreen text-white mb-4">
                                        <div class="card-body">Artikel
                                          
                                              
                                                
                                           
                                        <h1>{{$blog}}</h1>
                                    
                                      
                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card customgreen text-white mb-4">
                                        <div class="card-body">sponsor
                                            <h1>{{$sponsor}}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card customgreen text-white mb-4">
                                        <div class="card-body">Pengajar
                                            <h1>{{$lecturer}}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card customgreen text-white mb-4">
                                        <div class="card-body">Mahasiswa Aktif
                                            @foreach ($student as $item)
                                            <h1>{{$item->jumlah}}</h1>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
<!--                        
<section id="blog" class="blog">
     group slide item 
      <div class="col-md-12">
        <div class="featured-carousel owl-carousel">
          
          
          option group button 
           <div class="item">
            <div class="work">
              <div class="img d-flex align-items-end justify-content-center" style="background-image: url('carousel-03/images/portrait-1.jpg')">
                <div class="text">
                  <span class="cat">Stafsus Kemendikbud</span>
                  <h3><a href="#">"Kamu akan mendapatkan banyak ilmu disini"</a></h3>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="work">
              <div class="img d-flex align-items-end justify-content-center" style="background-image: url('carousel-03/images/m.jpg');">
                <div class="text w-100">
                  <span class="cat">Web Design</span>
                  <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="work">
              <div class="img d-flex align-items-end justify-content-center" style="background-image: url('carousel-03/images/work-4.jpg');">
                <div class="text w-100">
                  <span class="cat">Web Design</span>
                  <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="work">
              <div class="img d-flex align-items-end justify-content-center" style="background-image: url('carousel-03/images/work-5.jpg');">
                <div class="text w-100">
                  <span class="cat">Web Design</span>
                  <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  sdd -->
@endsection
