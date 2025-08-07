@php
    use App\Models\Branch;
    use App\Models\Technology;

    $branches = Branch::all();
    $technologies = Technology::all();

@endphp
<footer class="float-start w-100">
    <div class="tops-footer w-100">
      <div class="container-fluid">
        <div class="row  align-items-center">
            <div class="col-lg-8">
              <a href="#" class="logo-footers">
                 <img src="images/ZTS-logo.webp" alt="logo-footer" loading="lazy"/>
              </a>
                <p> ZTS Infotech Private Limited manages high definition web design & development services for USA, UK, Canada, Australia, UAE, India base clientele. If you’d like to advance the way your business, website, or
                   marketing looks and performance, drop us a line or pop in for a chat. The coffee’s on us.</p>
            </div>
            <div class="col-lg-4 right-footers ps-lg-5">
               <h3> Social Media </h3>
               <p> Don’t Miss To Follow Us On Our Social Networks Accounts. </p>
               <ul class="footers-soclias">
                 <li>
                    <a href="#" class="btn"> <i class="ri-facebook-circle-fill"></i> </a>
                    <a href="#" class="btn"> <i class="ri-instagram-line"></i> </a>
                    <a href="#" class="btn"> <i class="ri-twitter-x-line"></i> </a>
                    <a href="#" class="btn"> <i class="ri-youtube-fill"></i> </a>
                 </li>
               </ul>
            </div>
        </div>
        <hr/>
      </div>
    </div>
    <div class="bottoms-div015 w-100">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-8">
               <div class="row row-cols-1 row-cols-lg-3">
                  <div class="col">
                      <div class="comon-list015">
                          <h3> About Us </h3>
                          <ul>
                             <li>
                                <a href="#"> Company Profile </a>
                             </li>
                             <li>
                                <a href="#"> Life At ZTS </a>
                             </li>
                             <li>
                                <a href="#"> Client on Boarding Process </a>
                             </li>
                             <li>
                                <a href="#"> Work with Top Developers </a>
                             </li>
                             <li>
                                <a href="#"> CSR Program </a>
                             </li>
                             <li>
                                <a href="#"> Case Studies </a>
                             </li>
                             <li>
                                <a href="#"> Awards and Recognition </a>
                             </li>
                          </ul>
                      </div>
                  </div>
                   <div class="col">
                      <div class="comon-list015">
                          <h3> Our Services </h3>
                          <div class="row">
                             <div class="col">
                                <ul>
                                    <li>
                                       <a href="#"> Woocommerce Development </a>
                                    </li>
                                    <li>
                                       <a href="#"> Shopify Development </a>
                                    </li>
                                    <li>
                                       <a href="#"> Hire React Native Developer </a>
                                    </li>
                                    <li>
                                       <a href="#"> Hire Flutter Developer </a>
                                    </li>
                                    <li>
                                       <a href="#"> Responsive Website Development </a>
                                    </li>
                                    <li>
                                       <a href="#"> Hire Node.js Developer </a>
                                    </li>
                                    
                                </ul>
                             </div>
                          </div>
                          
                      </div>
                  </div>
                  <div class="col">
                      <div class="comon-list015 mt-lg-5">
                        <ul>
                              <li>
                                 <a href="#"> Hire Custom PHP Developer </a>
                              </li>
                              <li>
                                 <a href="#"> iOS App Development </a>
                              </li>
                              <li>
                                 <a href="#"> UI/UX Design </a>
                              </li>
                              <li>
                                 <a href="#"> Android App Development </a>
                              </li>
                              <li>
                                 <a href="#"> Magento Development </a>
                              </li>
                              <li>
                                 <a href="#"> Laravel Development </a>
                              </li>
                              <li>
                                 <a href="#"> WordPress Website Development </a>
                              </li>
                              
                        </ul>
                      </div>
                  </div>
               </div>
               <div class="subscribe-sections mt-5">
                    <h4 class="text-white"> Subscribe To Our Newsletter </h4>
                    <div class="d-flex col-lg-7 ms-lg-3 mt-2 align-items-center">
                       <input type="text" class="form-control" placeholder="Enter your Email"/>
                       <button class="btn Subscribe-btn"> Subscribe </button>
                    </div>
               </div>
            </div>
            <div class="col-lg-4">
                <div class="row row-cols-1 row-cols-lg-2">
                   <div class="col">
                        <div class="comon-list015">
                          <h3> Industries </h3>
                              <ul>
                                 <li>
                                    <a href="#"> Fintech </a>
                                 </li>
                                 <li>
                                    <a href="#"> Healthcare </a>
                                 </li>
                                 <li>
                                    <a href="#"> Law </a>
                                 </li>
                                 <li>
                                    <a href="#"> Retail </a>
                                 </li>
                                 <li>
                                    <a href="#"> Tourism </a>
                                 </li>
                                 <li>
                                    <a href="#"> Edtech </a>
                                 </li>
                                 <li>
                                    <a href="#"> Real estate </a>
                                 </li>
                                 <li>
                                    <a href="#"> Agri Tech </a>
                                 </li>
                                 <li>
                                    <a href="#"> Event Management </a>
                                 </li>
                                 
                              </ul>
                        </div>
                   </div>
                   <div class="col">
                     <div class="last-footers06">
                           <h3> Have a Project in Your Mind? </h3>
                           <a href="#" class="btn contacts-btn">
                             <span>  Contact Us <i class="ri-arrow-right-up-line"></i> </span>
                           </a>
                     </div>
                     <div class="monday-div-text d-block w-100">
                          <h4> Monday - Friday </h4>
                          <p> 10 : 00 AM - 7 : 00 PM </p>
                     </div>
                  </div>
                </div>
            </div>
         </div>
      </div>
    </div>
    <div class="address-div015 w-100">
        <div class="container-fluid">
           <div class="row">
            @foreach($branches as $branch)
               <div class="col">
                   <div class="comon-address d-inline-block w-100">
                     <figure>
                         <img src="{{ asset('uploads/' . $branch->photo) }}" alt="address" loading="lazy"/>
                     </figure>
                      <h4> {{ $branch->name }} </h4>
                      <p> {{ $branch->address }}</p>
                      <ul>
                         <li> <a href="tel:+91-8910802928"> Phone: {{ $branch->phone }} </a> </li>
                         <li> <a href="tel:+91-8910802928"> Email: {{ $branch->email }}  </a> </li>
                      </ul>
                   </div>
               </div>
           @endforeach


           </div>
        </div>
    </div>
    <div class="clients-logosd w-100">
      <div class="container-fluid">
        <div class="slider-footer owl-carousel owl-theme">
          <div class="items-logos">
              <figure>
                 <img src="images/Upwork-Award.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          <div class="items-logos">
              <figure>
                 <img src="images/Enterprise-Award.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          <div class="items-logos">
              <figure>
                 <img src="images/SEMRUSH-Certified-Agency-Partner-Logo.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          
          <div class="items-logos">
              <figure>
                 <img src="images/Top-Rated-Plus-Logo.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          <div class="items-logos">
              <figure>
                 <img src="images/Clutch-Top-SEO-Firms-2019.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          <div class="items-logos">
              <figure>
                 <img src="images/Nasscom-Award.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          <div class="items-logos">
              <figure>
                 <img src="images/Small-business-2018.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          <div class="items-logos">
              <figure>
                 <img src="images/SEMRUSH-Certified-Agency-Partner-Logo.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          <div class="items-logos">
              <figure>
                 <img src="images/Nasscom-Award.png" alt="logo" loading="lazy"/>
              </figure>
          </div>
          
          
          
        </div>
      </div>
    </div>
    <div class="footer-last-sections w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                   <p> Copyright © 2025 #1 Web Development & Designing Company in india - ZTS India
                      | Powered by #1 Web Development & Designing Company in india - ZTS India </p>
                </div>
                <div class="col-lg-6">
                    <ul class="d-flex justify-content-end flex-wrap align-items-center">
                      <li>
                         <a href="#"> Privacy Policy </a>
                      </li>
                      <li>
                         <a href="#"> Terms & Conditions </a>
                      </li>
                      <li>
                         <a href="#"> Cookie Policy </a>
                      </li>
                      <li>
                         <a href="#"> Refund Policy Disclaim </a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('js/jquery.min.js') }}" ></script>
<script src="{{ asset('js/custom.js') }}" ></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src="{{ asset('js/aos.js') }}"></script>

<script src="{{ asset('js/mixitup.min.js') }}"></script>
<script>
  feather.replace();
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const technologies = @json($technologies);
        const icons = document.querySelectorAll('.tech-icon');
        const title = document.getElementById('tech-title');
        const description = document.getElementById('tech-description');

        icons.forEach((img) => {
            img.addEventListener('click', () => {
                const index = img.getAttribute('data-index');
                const tech = technologies[index];
                title.textContent = tech.name;
                description.innerHTML = tech.description;
            });
        });
    });
</script>

<script>
$(document).ready(function(){
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
});

</script> 
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>


</body>
</html>
