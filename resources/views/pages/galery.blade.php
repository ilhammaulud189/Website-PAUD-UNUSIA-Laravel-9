 @extends('layout.app')

@section('tittle')
galery
@endsection    

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Galery</li>
          </ol>

 <!-- ======= Portfolio Section ======= -->
    <section id="Galeri" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeri</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <!--<div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul> End Portfolio Filters 
          </div>-->

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details"></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Galeri Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Galeri Item -->

           <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl4.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl4.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Galeri Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl5.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl5.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl6.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl6.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Galeri Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl7.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl7.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Galeri Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl8.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl8.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Galeri Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="fronendpaud/assets/img/portfolio/gl4.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="fronendpaud/assets/img/portfolio/gl4.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div> <!--End Galeri Item -->

          </div> <!-- End Galeri Container -->

        </div>

      </div>
    </section> <!-- End Galeri Section -->
    </section>

        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <section class="sample-page">

      

  </main><!-- End #main -->
@endsection


