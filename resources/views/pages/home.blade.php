@extends('layout.app')

@section('title')
paudunusia.ac.id
@endsection

@section('content')
    
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang di <span> Website Prodi PAUD</span></h2>
          <p>Untuk mendaftar silahkan klik link yang tertera dibawah ini</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href={{url("https://ecampus.unusia.ac.id/unusia/pmb.zul")}} class="btn-get-started">Daftar</a>
            <a href={{url("https://www.youtube.com/watch?v=x9kI6VDhB6w&t=2s&ab_channel=UnusiaTV")}}
            class="btn-watch-video d-flex align-items-center">
              <i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 img-fluid">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_nv1d6kvd.json" background="transparent"  speed="1"  style="width: 430px; height: 430px;"  loop autoplay></lottie-player>
          <!--<img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100"-->
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-building"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Kampus Modern</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book-half"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Fasilitas Perpustakaan</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-fill"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lokasi Yang Strategis</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-train-front"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Jangkauan Transportasi Publik</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang</h2>
          <p>Prodi PG PAUD UNUSIA merupakan salah satu program studi yang berada di Fakultas Keguruan dan Ilmu Pendidikan (FKIP). <br> Prodi yang berdiri sejak 17 Oktober 2014 ini telah meluluskan sarjana Pendidikan PG PAUD sebanyak tiga Angkatan dan telah Terakreditasi “BAIK”</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>VISI</h3>
            <img src="fronendpaud/assets/img/unusia4.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <h3>Program Studi PG PAUD Universitas Nahdlatul Ulama Indonesia.</h3>
            <p>MENJADI PRODI UNGGULAN DENGAN MELAHIRKAN GURU – GURU PAUD YANG HANDAL & PROFESIONAL BERWAWASAN GLOBAL BERLANDASKAN AHLU SUNNAH WAL JAMA’AH (ASWAJA) AN-NAHDLIYAH </p>
            
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <h3>MISI</h3>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Menyelenggarakan pendidikan dan pengajaran dalam Ilmu Pendidikan Anak Usia Dini  yang terintegrasi dengan IPTEK, IMTAQ dan Nilai – nilai ASWAJA An Nahdliyah.</li>
                <li><i class="bi bi-check-circle-fill"></i> Melakukan penelitian dalam Ilmu Pendidikan Anak Usia Dini yang terintegrasi dengan IPTEK, IMTAQ dan Nilai – Nilai ASWAJA An Nahdliyah
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Melaksanakan pengabdian kepada masyarakat di bidang Ilmu Pendidikan Anak Usia Dini yang terintegrasi dengan IPTEK, IMTAQ dan dan Nilai-nilai ASWAJA An Nahdliyah.</li>
              </ul>

              <div class="position-relative mt-4">
                <img src="fronendpaud/assets/img/unusia1.jpg" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>

          <div class=" section-header">
            <h3>Profil Lulusan</h3>
            <p>Sebagai program studi yang mencetak guru di bidang PAUD, lulusan PG PAUD dapat berkarir sbg Asesor PAUD, Instansi pemerintah di bidang pendidikan,unit pelaksana teknis bidang pendidikan,konsultan parenting, dan praktisi Selain itu, berpeluang menjadi pengusaha dibidang pendidikan anak usia dini dan berkesempatan berkarir sebagai pegawai di Direktorat PAUD.</p>
            <div>
            <img src="fronendpaud/assets/img/Picture1.png" class="img-fluid rounded-4 mb-4 mt-4 shadow-sm" alt="">
          </div>
          </div>

        </div>
      </div>
      
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

    <div class="section-header">
        <h2>Partnership</h2>

      </div>
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach ($sponsor as $item)
            <div class="swiper-slide"><img src="{{asset('storage/public/sponsor/'.$item->foto)}}" class="img-fluid" alt=""></div>
            @endforeach
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      
                
  
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="fronendpaud/assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>
    

          <div class="col-lg-6">

    
            @foreach($student as $item)
            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="{{ $item->jumlah}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Jumlah Mahasiswa Aktif</strong> yang menempuh pendidikan di prodi paud unusia</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="{{ $item->angkatan}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Angkatan</strong> total berapa angkatan yang sudah berjalan di prodi paud unusia</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="{{ $item->lulusan}}"data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Jumlah Lulusan</strong> yang sudah selesai menempuh pendidikan di prodi paud unusia</p>
            </div><!-- End Stats Item -->
            @endforeach
            

          </div>
         
        </div>

      </div>
      
      
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=_DNRunbQWBw&ab_channel=UnusiaTV" class="glightbox play-btn"></a>
        <h3>Watch Now</h3>
        <p> Wisuda Ke-VIII UNUSIA Bersama Gus Yahya, Mas Nadiem, dan Gus Yaqut | Taman Mini Indonesia Indah</p>
        <a class="cta-btn" href="https://www.youtube.com/watch?v=_DNRunbQWBw&ab_channel=UnusiaTV">Tap to Watch</a>
      </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonial</h2>

        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
         
          <div class="swiper-wrapper">
            @foreach ($test as $item)
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{asset('storage/public/testimoni/'.$item->foto)}}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>{{ Str::limit($item->nama, 20)}}</h3>
                      <h4>&amp; {{ Str::limit($item->detail, 20)}}</h4>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    {{($item->testimoni)}}
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

   


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Artikel Terbaru</h2>
        </div>

        <div class="row gy-4">
          @foreach ($blog as $item)
          <div class="col-xl-4 col-md-6">
            <article>
              <div class="post-img">
                <img src="{{url('storage/public/postfoto/'.$item->foto)}}"  alt="" class="img-fluid">
              </div>
              <h2 class="title">
                <a href="blogdetail/{{$item->id}}">{{ Str::limit($item->judul, 30)}}</a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="fronendpaud/assets/img/blog/picture_profile.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Admin</p>
                  <p class="post-date">
                    <time>{{date('D d, M Y')}}</time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->
          @endforeach
        </div><!-- End recent posts list -->

        <!-- ======= Call To Action Section ======= -->
   <div class="d-grid gap-2 col-3 mx-auto">
       <div class="btn btn-success rounded-pill btn-lg mb-5 mt-5" data-aos="zoom-out">
        <a href="artikel">Lainnya</a>
      </div>
    </div>
    <!-- End Call To Action Section -->
    
      </div>
    </section><!-- End Recent Blog Posts Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kontak</h2>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi:</h4>
                  <p>Jl. Taman Amir Hamzah No.5, Menteng, Jakarta Pusat 10320</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>halo@paudunusia.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telepon:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Jam Operasional:</h4>
                  <p>Sen-Jum: 09:00 - 15:00 WIB</p>
                </div>
              </div><!-- End Info Item -->
            </div>


          </div>
          <div class="col-lg-8">
            <div class="php-email-form">
              <div class="row ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.459495653478!2d106.84882731434043!3d-6.202955662490496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f46f1aa68feb%3A0x1025d8e539e14ede!2sNahdlatul%20Ulama%20University%20of%20Indonesia!5e0!3m2!1sen!2sid!4v1673623565494!5m2!1sen!2sid"
                 width="600" height="450"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
               </div>
              </div>
            
          </div><!-- End Contact Form -->
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection