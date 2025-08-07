<x-header/>

<main class="float-start w-100 main-body position-relative contact-use-page">

    <section class="contact-hero news-heros float-start w-100">
        <div class="container con p-0">
            <!-- blog hero -->
            <div class="row top-spading align-items-center my-5">
                <div class="col-lg-6">
                    <h2 class="blog-title">ZTS News</h2>
                </div>
                <div class="col-6">
                    <p class="contact-hero-right col-lg-7 ms-lg-auto">
                       Crafting new bright brands, unique visual systems and digital experience focused on a wide range of original collabs.
                    </p>
                </div>
            </div>

            <!-- blog card -->

            <div class="row row-cols-1 row-cols-lg-3 g-5">
               @foreach ($newsItems as $item)
                  <div class="col blog-card">
                        @php
                           $images = explode(',', $item->image);
                           $firstImage = isset($images[0]) ? trim($images[0]) : null;
                        @endphp

                        <img src="{{ asset('uploads/' . $firstImage) }}" alt="">

                        <div class="blog-card-div">
                           <h4 class="blogcard-date">
                              <a href="#" rel="category tag" class="">Our Blog</a>
                              News . {{ \Carbon\Carbon::parse($item->date)->format('F j, Y') }}
                           </h4>
                           <h5 class="blogscard-text">
                              <a href="#">
                                    {{ $item->title }}
                              </a>
                           </h5>

                           <hr>
                           <a href="#" class="blogcard-readmore">
                              Read More <i class="ri-arrow-right-up-line"></i><span></span>
                           </a>
                        </div>
                  </div>
               @endforeach


                  <div class="pagination" aria-label="Pagination navigation">
                     <button aria-current="page" class="active" aria-label="Page 1">1</button>
                     <button aria-label="Page 2">2</button>
                     <button aria-label="Page 2">3</button>
                     <button aria-label="Next page">&gt;</button>
                  </div>

            </div>


            

            <!-- work with us -->
            <div class="cta-content m-auto text-center">
                <p class="cta-badge btn">Work with us</p>
                <h2 class="cta-title my-4 col-lg-5 mx-auto">
                        We would love to hear
                        more about your
                        project
                </h2>
                <div class="about-hero-btn m-auto my-5">

                        <a href="#" class="btn btn-mores mt-4 text-start"> 
                            <span> lets talk us </span> <i class="ri-arrow-right-up-line"></i>  
                        </a>
                </div>
            </div>
        </div>
    </section>

</main>
<x-footer/>