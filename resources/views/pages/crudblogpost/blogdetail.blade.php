@extends('layout.app')

@section('tittle')
blog detail
@endsection

@section('content')
    
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                <h2>Blog Details</h2>
        
                </div>
            </div>
            </div>
        </div>
        <nav>
            <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li>Blog Details</li>
            </ol>
            </div>
        </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

        <div class="row g-5">
        
                <div class="col-lg-8">

                <article class="blog-details"{{$data->id}}>

                <h2 class="title">{{$data->judul}}</h2>

                <div class="meta-top">
                    <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Admin</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time>{{date('D/M/Y')}}</time></a></li>
                    </ul>
                </div><!-- End meta top -->
                <div class="post-img">
                    <img src="{{url('storage/public/postfoto/'.$data->foto)}}" class="img-fluid">
                </div>

                <div class="content">
                    <!-- fungsi explode untuk memecah konten artikel
                        menjadi paragraf berdasarkan baris baru (\n).
                        Kemudian, menggunakan loop foreach untuk menampilkan setiap paragraf dengan elemen p.-->
                    @foreach (explode("\n", $data->deskripsi) as $paragraph)
                    <p>{!! $paragraph !!}</p>
                @endforeach
                  
                
                    
            
                   

                   <!-- <blockquote>
                    <p>
                        Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                    </p>
                    </blockquote>

                    <p>
                    Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                    Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                    Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                    </p>

                    <h3>Et quae iure vel ut odit alias.</h3>
                    <p>
                    Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                    Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                    Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                    </p>
                    <img src="fronendpaud/assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                    <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                    <p>
                    Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                    Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                    </p>
                    <p>
                    Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                    </p>-->

                </div><!-- End post content -->
               
                </article><!-- End blog post -->
             </div>


        <div class="col-lg-4">
            <div class="sidebar">
                <div class="sidebar-item recent-posts">      
                    <h3 class="sidebar-title">Recent Posts</h3>
                    <!--recent adalah variabel dari data $blog dalam fungsi show -->
                    @foreach ($post as $item)
                    <div class="mt-3">

                    <div class="post-item mt-3">
                        <img src="{{url('storage/public/postfoto/'.$item->foto)}}" alt="">
                        <div>
                        <h4 class="title">
                            <a href="{{$item->id}}">{{ Str::limit($item->judul, 30)}}</a>
                        </h4>
                        <time>{{date('D d, M Y')}}</time>
                        </div>
                    </div><!-- End recent post item-->
                    </div>
                @endforeach
                    </div><!-- End sidebar recent posts-->
                </div><!-- End Blog Sidebar -->
            </div>
        </div>
           

        </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->


@endsection