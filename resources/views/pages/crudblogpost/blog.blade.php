@extends('layout.app')

@section('tittle')
Artikel
@endsection    

@section('content')
    
<main id="main">

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h3>Artikel</h3>
            </div>
          </div>
        </div>
      </div> 
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Artikel</li>
          </ol>
        </div>
      </nav>
    </div>  <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">
          <!-- @@php
              $no = 1 + (($post->currentPage()-1)*$post->perPage());
              @@endphp --> 
          @foreach ($post as $item)
          <div class="col-xl-4 col-md-6" >
            <article>
              
              <div class="post-img">
                <img src="{{asset('storage/public/postfoto/'.$item->foto)}}" alt="" class="img-fluid">
              </div>

              <h2 class="title">
                <a href="blogdetail/{{$item->id}}">{{ Str::limit($item->judul, 30)}}</a>
              </h2>

              <p class="post-category">{!! Str::limit($item->deskripsi, 60)!!}</p>

              <div class="d-flex align-items-center">
                <img src="fronendpaud/assets/img/blog/picture_profile.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">Admin</p>
                  <p class="post-date">
                    <time>{{date('D/M/Y')}}</time> <!-- data hari,bulan dan tanggal
                      diambil dari column timestamp table post-->
                  </p>
                </div>
              </div>

            </article>
          </div>
        @endforeach <!-- End post list item -->
        {{ $post->onEachSide(10)->links() 
          
        }}
        

        </div><!-- End blog posts list -->

       <!-- <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div> End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

@endsection