@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Home') !!}
@endpush
@section('body')
    
    <head>
         <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <!-- swiper.js -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    </head>
  <section>
   <div class="home-demo">
      <div class="owl-carousel owl-theme">
         <div class="item">
            <img src="{{asset('assets//images/banner4.jpeg')}}">
            <div class="cover">
               <div class="container">
                  <div class="header-content">
                     <div class="line"></div>
                     <h1>WHY CHOOSE US</h1>
                     <h2>Meeting Global Standards of Engineering Excellence.
                     </h2>
                     <!--<h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>-->
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <img src="{{asset('assets//images/banner1.jpg')}}">
            <div class="cover">
               <div class="container">
                  <div class="header-content">
                     <div class="line"></div>
                     <h1>Wagon Manufacturing & Financial Year's
                     </h1>
                     <h2>Wagon Manufacturing Performance in Last 3 Years
                     </h2>
                     <!--<h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>-->
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <img src="{{asset('assets//images/banner5.jpeg')}}">
            <div class="cover">
               <div class="container">
                  <div class="header-content">
                     <div class="line"></div>
                     <h1>Performance Track Record</h1>
                     <h2>Leadership position in innovation, design, planning, execution and quality
                     </h2>
                     <!--<h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="featured-services" class="featured-services section-bg">
   <div class="container">
      <div class="row no-gutters">
         <div class="col-lg-4 col-md-6">
            <div class="icon-box">
               <div class="icon"><i class="fa fa-subway" aria-hidden="true"></i></div>
               <h4 class="title p-0"><a href="">Complete Freight Car Solutions</a></h4>
               <p class="description">Our comprehensive freight car solutions encompass everything you need for seamless cargo transportation.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="icon-box">
               <div class="icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
               <h4 class="title p-0"><a href="">Indian Engineering Excellence</a></h4>
               <p class="description"> Our Indian engineering expertise drives the development of world-class solutions that cater to global demands.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="icon-box">
               <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
               <h4 class="title p-0"><a href="">Global Perspective</a></h4>
               <p class="description">Our global perspective ensures solutions for diverse needs of clients worldwide for every market.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="new-image">
   <section class="about-section">
      <div class="container">
         <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
               <div class="inner-column">
                  <div class="sec-title">
                     <!--<span class="title">Lorem Ipsum</span>-->
                     <h2>Meeting Global Standards of Engineering Excellence</h2>
                  </div>
                  <div class="text">
                     <p>Jindal Rail Infrastructure Limited (Jindal Rail) stands as a crucial component of Jindal SAW Limited, under the esteemed Over US$ 36 Billion OP Jindal group, spanning the realms of Steel, Power, and Infrastructure. Guided by the visionary leadership , this enterprise operates from New Delhi and boasts a state-of-the-art facility in Vadodara, Gujarat, which serves as a hub for corporate activity.</p>
                  </div>
                  <div class="text">
                     <p>Since its inception in 2012, Jindal Rail has surpassed expectations, delivering over 8,000 wagons that meet both Indian Railway and global standards. Its client base extends to Indian Railways, the Public and Private Sectors, as well as export markets. At the core of Jindal Rail's mission is excellence in design, engineering, and manufacturing, with a dedicated commitment to delivering top-tier products on time. Furthermore, the company places immense importance on Quality, Health, Safety, and Environmental considerations, ensuring responsible and sustainable operations.</p>
                  </div>
                  <div class="btn-box">
                     <a href="about-us.html" class="btn-style-one">Read More</a>
                  </div>
               </div>
            </div>
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
               <div class="inner-column wow fadeInLeft">
                  <div class="author-desc">
                     <h3>Jindal</h3>
                     <span>Rail Infrastructure</span>
                  </div>
                  <figure class="image-1"><img title="" src="{{asset('assets/images/Rail-166.jpg')}}" alt="" class="img-fluid">
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="why-us" class="why-us">
      <div class="container">
         <div class="sec-title">
            <!--<span class="title">Lorem Ipsum</span>-->
            <h2>Congratulations to Jindalites</h2>
         </div>
         <div class="row no-gutters">
            <div class="col-lg-4 col-md-6 content-item">
               <span>01</span>
               <!--<h4>Lorem Ipsum</h4>-->
               <p>Eye to platform to reduce loading/unloading infrastructure cost</p>
            </div>
            <div class="col-lg-4 col-md-6 content-item">
               <span>02</span>
               <!--<h4>Lorem Ipsum</h4>-->
               <p>Controlled & Distributed loading</p>
            </div>
            <div class="col-lg-4 col-md-6 content-item">
               <span>03</span>
               <!--<h4>Lorem Ipsum</h4>-->
               <p>Resilient liner for Coils</p>
            </div>
            <div class="col-lg-4 col-md-6 content-item">
               <span>04</span>
               <!--<h4>Lorem Ipsum</h4>-->
               <p>Adjustable looking according to coil dia and width</p>
            </div>
            <div class="col-lg-4 col-md-6 content-item">
               <span>05</span>
               <!--<h4>Lorem Ipsum</h4>-->
               <p>Max 10 numbers of coils can be loaded</p>
            </div>
            <div class="col-lg-4 col-md-6 content-item">
               <span>06</span>
               <!--<h4>Lorem Ipsum</h4>-->
               <p>First ever RDSO JV with Private under PWDA policy - Record time line from concept to completion</p>
            </div>
         </div>
      </div>
   </section>
   
 <section class="review faq-container featured-services" id="review">
            <h4 class="faq-head texto"></h4>
            <div class="swiper-container review-slider">
                <div class="swiper-wrapper">
                    @foreach($testimaonials as $testimaonial)
                    <div class="swiper-slide slide">
                        <i class="fas fa-quote-right"></i>
                        <div class="user">
                            @if(!empty($testimaonial->mediaLibrary->url))
                                        <img src="{{ asset($testimaonial->mediaLibrary->url) }}">
                                        @else
                                        <img src="{{ asset('/images/user.png') }}">
                            @endif
                            <div class="user-info">
                                <h3>{{ $testimaonial->name }}</h3>
                                <!--<div class="stars">-->
                                <!--    <i class="fas fa-star"></i>-->
                                <!--    <i class="fas fa-star"></i>-->
                                <!--    <i class="fas fa-star"></i>-->
                                <!--    <i class="fas fa-star"></i>-->
                                <!--    <i class="fas fa-star-half-alt"></i>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <h2>{{ $testimaonial->designation }}</h2>
                        <p class="paras">{{ $testimaonial->comments }}</p>
                    </div>
                    @endforeach 
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
</section>
<!--<section class="work-process">-->
<!--   <div class="container">-->
<!--      <div class="row">-->
<!--         <div class="col-md-3">-->
<!--            <h3 class="text-white">Wagon Manufacturing & Financial Year's</h3>-->
<!--         </div>-->
<!--         <div class="col-md-9">-->
<!--            <p class="text-white border-left">Wagon Manufacturing Performance in Last 3 Years</p>-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="industris-space"></div>-->
<!--      <div class="row">-->
<!--         <div class="col-md-4">-->
<!--            <div class="process process-light">-->
<!--               <div class="process-icon"><i class="icon ion-ios-briefcase"></i></div>-->
<!--               <h4>( 343 )<br> 2014-2015</h4>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-4">-->
<!--            <div class="process process-light">-->
<!--               <div class="process-icon"><i class="icon ion-ios-briefcase"></i></div>-->
<!--               <h4>( 1250 )<br> 2015-2016</h4>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-4">-->
<!--            <div class="process process-light">-->
<!--               <div class="process-icon"><i class="icon ion-ios-briefcase"></i></div>-->
<!--               <h4>( 1316 )<br> 2016-2017</h4>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->


<section class="services-boxed services-off-grid mega-section  " id="services">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-4 align-self-center">
            <div class=" light-title mb-4 ">
               <div class="sec-title">
                  <span class="title">Performance Track Record
                  </span>
                  <h2>Leadership position in innovation, design, planning, execution and quality</h2>
               </div>
            </div>
            <!--Start .see-more-area-->
            <!--<div class="see-more-area d-none d-lg-flex justify-content-start wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">-->
            <!--    <div class="btn-box">-->
            <!--         <a href="#" class="btn-style-one">See all services</a>-->
            <!--      </div>-->
            <!--</div>-->
            <!--End Of .see-more-area                    -->
         </div>
         <div class="col-12 col-lg-8">
            <div class="row ">
               <div class="col-12 col-md-6 mt-md-5">
                  <div class="row gx-4 gy-4 services-row ">
                     <div class="col-12 mx-auto  ">
                        <!--Start First service box-->
                        <div class="service-box  wow fadeInUp featured" data-wow-offset="0" data-wow-delay=".2s" data-tilt="data-tilt">
                           <div class="service-icon">
                              <!--<i class="fa fa-handshake-o font-icon"></i>-->
                           </div>
                           <span class="service-num hollow-text">1    </span>
                           <div class="service-content">
                              <!--<h3 class="service-title">Lorem Ipsum</h3>-->
                              <p class="service-text">
                                 One of the largest suppliers for all types of Broad Gauge Freight Cars to Indian Railways and Private Sector.                        
                              </p>
                           </div>
                           <!--<a class="read-more" href="">read more<i class="fa fa-arrow-right icon"> </i></a>-->
                        </div>
                        <!-- End First service box-->
                     </div>
                     <div class="col-12  my-4 ">
                        <!--Start Second service box-->
                        <div class="service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".6s" data-tilt="data-tilt" >
                           <div class="service-icon">
                              <!--<i class="fa fa-handshake-o font-icon"></i>-->
                           </div>
                           <span class="service-num hollow-text">2    </span>
                           <div class="service-content">
                              <!--<h3 class="service-title">Lorem Ipsum</h3>-->
                              <p class="service-text">
                                 The only Freight Car manufacturer in India to have successfully developed and manufactured Special-Purpose Freight Cars for transportation of 260 meters long welded rail panels in 5 tiers                        
                              </p>
                           </div>
                           <!--<a class="read-more" href="">read more<i class="fa fa-arrow-right icon"> </i></a>-->
                        </div>
                        <!-- End Second service box-->
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6">
                  <div class="row gx-4 gy-4 services-row">
                     <div class="col-12   mx-auto ">
                        <!--Start Third service box-->
                        <div class="service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".4s" data-tilt="data-tilt">
                           <div class="service-icon">
                              <!--<i class="fa fa-handshake-o font-icon"></i>-->
                           </div>
                           <span class="service-num hollow-text">3    </span>
                           <div class="service-content">
                              <!--<h3 class="service-title">Lorem Ipsum</h3>-->
                              <p class="service-text">
                                 Successfully designed & developed Freight Cars suitable for tippling operation using a combination of rotary and fixed couplers - Gondola Cars for Export Market (Cape Gauge, Africa).
                              </p>
                           </div>
                           <!--<a class="read-more" href="">read more<i class="fa fa-arrow-right icon"> </i></a>-->
                        </div>
                        <!-- End Third service box-->
                     </div>
                     <div class="col-12  my-4">
                        <!--Start fourth service box-->
                        <div class="service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".2s" data-tilt="data-tilt">
                           <div class="service-icon">
                              <!--<i class="fa fa-handshake-o font-icon"></i>-->
                           </div>
                           <span class="service-num hollow-text">4    </span>
                           <div class="service-content">
                              <!--<h3 class="service-title">Lorem Ipsum</h3>-->
                              <p class="service-text">
                                 Bogie frames for Indian Railways Mainline Passenger Coaches and Floor frame assembly for Indian Railways Mainline diesel Electric Locomotives .                        
                              </p>
                           </div>
                           <!--<a class="read-more" href="">read more<i class="fa fa-arrow-right icon"> </i></a>-->
                        </div>
                        <!-- End fourth service box -->
                     </div>
                  </div>
                  <!--Start .see-more-area-->
               </div>
            </div>
         </div>
      </div>
      <!--End Of .see-more-area -->
   </div>
</section>
<!--<section id="respons">  -->
<!-- <div class="container"> -->
<!--  <div class="row">-->
<!--    <div class="col-md-12">-->
<!--      <div class="csr-link"> -->
<!--        <div class="res-lft">           -->
<!--           <h3>-->
<!--            Our social <br>responsibility                  <!-- Our social <br>responsibility --> 
<!--          </h3> -->
<!--        </div> -->
<!--       <div class="res-rgt">-->
<!--        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--          </div>             -->
<!--       </div> -->
<!--      </div>     -->
<!--     </div>-->
<!--  </div>   -->
<!--</section>-->
<section class="blog blog-home mega-section p-0 " id="blog">
   <div class="container ">
      <div class="sec-title">
         <!--<span class="title">Lorem Ipsum</span>-->
         <h2>Latest News</h2>
      </div>
      <div class="row ">
         <div class="col-12 ">
            <div class="posts-grid ">
               <div class="row">
                  <div class="col-12 col-lg-4 ">
                     <div class="post-box">
                        <a class="post-link" href="">
                           <div class="post-img-wrapper  ">
                              <div class="overlay-color"></div>
                              <div class="simpleParallax simple-parallax-initialized" style="overflow: hidden;"><img class=" parallax-img   post-img" loading="lazy" src="{{asset('assets/images/jindalmp.png')}}" alt="" style="transform: translate3d(0px, 18px, 0px) scale(1.3); will-change: transform; transition: transform 1s cubic-bezier(0, 0, 0, 1) 0s;"></div>
                           </div>
                        </a>
                        <div class="post-summary">
                           <h4 class="post-date"><span class="day">08 </span>05th, 2017     </h4>
                           <div class="post-info"><a class="info post-cat" href="#"> <i class="fa fa-user icon"></i>Ron Weasley</a><a class="info post-author" href="#"> <i class="fa fa-user icon"></i>Inspiration</a></div>
                           <div class="post-text">
                              <a class="post-link" href="">
                                 <h2 class=""> Jindal Rail News</h2>
                              </a>
                              <p class="post-excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                              <a class="read-more text-dark" href="">read more<i class="fa fa-arrow-right icon"> </i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 ">
                     <div class="post-box">
                        <a class="post-link" href="">
                           <div class="post-img-wrapper  ">
                              <div class="overlay-color"></div>
                              <div class="simpleParallax simple-parallax-initialized" style="overflow: hidden;"><img class=" parallax-img   post-img" loading="lazy" src="{{asset('assets/images/jindalmp.png')}}" alt="" style="transform: translate3d(0px, 18px, 0px) scale(1.3); will-change: transform; transition: transform 1s cubic-bezier(0, 0, 0, 1) 0s;"></div>
                           </div>
                        </a>
                        <div class="post-summary">
                           <h4 class="post-date"><span class="day">08 </span>05th, 2017     </h4>
                           <div class="post-info"><a class="info post-cat" href="#"> <i class="fa fa-user icon"></i>admin</a><a class="info post-author" href="#"> <i class="fa fa-user icon"></i>Business
                              </a>
                           </div>
                           <div class="post-text">
                              <a class="post-link" href="">
                                 <h2 class="">Morroco Shopping Center by KONS Co.</h2>
                              </a>
                              <p class="post-excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                              <a class="read-more text-dark" href="">read more<i class="fa fa-arrow-right icon"> </i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 ">
                     <div class="post-box">
                        <a class="post-link" href="">
                           <div class="post-img-wrapper  ">
                              <div class="overlay-color"></div>
                              <div class="simpleParallax simple-parallax-initialized" style="overflow: hidden;"><img class=" parallax-img   post-img" loading="lazy" src="{{asset('assets/images/jindalmp.png')}}" alt="" style="transform: translate3d(0px, 18px, 0px) scale(1.3); will-change: transform; transition: transform 1s cubic-bezier(0, 0, 0, 1) 0s;"></div>
                           </div>
                        </a>
                        <div class="post-summary">
                           <h4 class="post-date"><span class="day">08 </span>05th, 2017     </h4>
                           <div class="post-info"><a class="info post-cat" href="#"> <i class="fa fa-user icon"></i>admin</a><a class="info post-author" href="#"> <i class="fa fa-user icon"></i>Community</a></div>
                           <div class="post-text">
                              <a class="post-link" href="">
                                 <h2 class="">Akao’s Coffee Bar, Italy Winner AMMA Award 2017</h2>
                              </a>
                              <p class="post-excerpt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                              <a class="read-more text-dark" href="">read more<i class="fa fa-arrow-right icon"> </i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="banner1" class="banner banner-1 fancybox-white p-0">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-6 background-banner bg-overlay bg-overlay-2 bg-img" style="background-image: url(https://yourwebsitedemo.in/jindalrail/images/product-01.jpg); background-size: cover; background-position: center center;">
            <div class="cta__banner bg-img" >
               <h5 class="cta__title">Professional Liability</h5>
               <p class="cta__desc">Plant located in India’s fastest growing state Gujarat, known for excellent infrastructure industry friendly Government
               </p>
               <a href="#" class="btn btn__white btn__link">
                  <!--<i class="fa fa-arrow-right"></i>-->
                  <!--<span>View Our Works</span>-->
               </a>
            </div>
            <!-- /.cta__banner -->
         </div>
         <!-- /.col-lg-6 -->
         <div class="col-sm-12 col-md-12 col-lg-6 inner-padding bg-overlay bg-overlay-theme bg-parallax bg-img" style="background-image: url(https://yourwebsitedemo.in/jindalrail/images/product-01.jpg); background-size: cover; background-position: center center;">
            <div class="heading heading-white mb-40">
               <h3 class="heading__title">WHY CHOOSE US</h3>
               <p class="heading__desc">Meeting Global Standards of Engineering Excellence.</p>
               <p class="fancybox__desc text-light">The $18 billion OP Jindal Group is one of the largest Indian business conglomerates diversified across Steel, Power and Infrastructure sectors. Jindal Rail Infrastructure Limited (JRIL) has been promoted by Jindal SAW Limited, a leading global manufacturer of submerged arc welded pipes, specialized carbon, alloy & stainless steel pipes & tubes and ductile iron pipes with its products finding applications in oil & gas, water, energy, petrochemicals, engineering and transportation.
               </p>
            </div>
            <!-- /.heading -->
            <div class="row">
               <!-- fancybox item #1 -->
               <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="fancybox-item">
                     <div class="fancybox__icon">
                        <i class="fa fa-user"></i>
                     </div>
                     <!-- /.fancybox-icon -->
                     <div class="fancybox__content">
                        <h4 class="fancybox__title">Dedicated To Our Clients
                        </h4>
                        <p class="fancybox__desc">Plant spread across more than 50 hectares of land adjacent to Miyagam Karjan Railway station.</p>
                     </div>
                     <!-- /.fancybox-content -->
                  </div>
                  <!-- /.fancybox-item -->
               </div>
               <!-- /.col-lg-6 -->
               <!-- fancybox item #2 -->
               <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="fancybox-item">
                     <div class="fancybox__icon">
                        <i class="fa fa-user"></i>
                     </div>
                     <!-- /.fancybox-icon -->
                     <div class="fancybox__content">
                        <h4 class="fancybox__title">Outstanding Services</h4>
                        <p class="fancybox__desc">Flanked by Mumbai-New Delhi Main Railway line to the West and Mumbai-New Delhi Highway (NH-8) to the East.</p>
                     </div>
                     <!-- /.fancybox-content -->
                  </div>
                  <!-- /.fancybox-item -->
               </div>
               <!-- /.col-lg-6 -->
               <div>
                  <!--<a href="#" class="btn btn__white btn__bordered btn__lg">Schedule An Appointment</a>-->
               </div>
            </div>
            <!-- /.row -->
         </div>
         <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!--    <section class="faq-section">-->
<!--<div class="container">-->
<!--     <div class="sec-title">-->
<!--                     <span class="title">Lorem Ipsum</span>-->
<!--                     <h2>Lorem Ipsum is simply dummy text</h2>-->
<!--                  </div>-->
<!--  <div class="row">-->
<!-- ***** FAQ Start ***** -->
<!--  <div class="col-md-6 offset-md-3">-->
<!--      <div class="sec-title">-->
<!--   <span class="title">Lorem Ipsum</span>-->
<!--   <h2>Lorem Ipsum is simply dummy text</h2>-->
<!--</div>-->
<!--  </div>-->
<!--                    <div class="col-md-12 offset-md-3 mt-3">-->
<!--                        <div class="faq" id="accordion">-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="faqHeading-1">-->
<!--                                    <div class="mb-0">-->
<!--                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">-->
<!--                                            <span class="badge">1</span>What is Lorem Ipsum?-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">-->
<!--                                    <div class="card-body">-->
<!--                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="faqHeading-2">-->
<!--                                    <div class="mb-0">-->
<!--                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">-->
<!--                                            <span class="badge">2</span> Where does it come from?-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">-->
<!--                                    <div class="card-body">-->
<!--                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="faqHeading-3">-->
<!--                                    <div class="mb-0">-->
<!--                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">-->
<!--                                            <span class="badge">3</span>Why do we use it?-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">-->
<!--                                    <div class="card-body">-->
<!--                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="faqHeading-4">-->
<!--                                    <div class="mb-0">-->
<!--                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">-->
<!--                                            <span class="badge">4</span> Where can I get some?-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">-->
<!--                                    <div class="card-body">-->
<!--                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="faqHeading-5">-->
<!--                                    <div class="mb-0">-->
<!--                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">-->
<!--                                            <span class="badge">5</span> What is Lorem Ipsum?-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">-->
<!--                                    <div class="card-body">-->
<!--                                        <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="faqHeading-6">-->
<!--                                    <div class="mb-0">-->
<!--                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">-->
<!--                                            <span class="badge">6</span> Where does it come from?-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">-->
<!--                                    <div class="card-body">-->
<!--                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="faqHeading-7">-->
<!--                                    <div class="mb-0">-->
<!--                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">-->
<!--                                            <span class="badge">7</span> Why do we use it?-->
<!--                                        </h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">-->
<!--                                    <div class="card-body">-->
<!--                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--                </section>-->
<section>
   <div class="block no-padding">
      <div class="container">
         <div class="partners-section style2">
            <div class="container">
               <div class="sec-title">
                  <!--<span class="title">Lorem Ipsum</span>-->
                  <h2>Certification & Approvals</h2>
               </div>
               <ul class="mt-3">
                  <li><a href="images/ISO-OHSAS-%20CERT_001.jpg" title=""><img src="{{asset('assets/images/ISO-OHSAS-%20CERT_001.jpg')}}" alt=""></a></li>
                  <li><a href="images/ISO%209001_2008%20Certificate%20New.jpg" title=""><img src="{{asset('assets/images/ISO%209001_2008%20Certificate%20New.jpg')}}" alt=""></a></li>
                  <li><a href="images/ISO%2014001%20NEW.jpg" title=""><img src="{{asset('assets/images/ISO%2014001%20NEW.jpg')}}" alt=""></a></li>
                  <li><a href="images/G-105_2018_certificate.jpg" title=""><img src="{{asset('assets/images/G-105_2018_certificate.jpg')}}" alt=""></a></li>
                  <li><a href="images/JRIL%20EN%2015085%20Certificate%20271114_001.jpg" title=""><img src="{{asset('assets/images/JRIL%20EN%2015085%20Certificate%20271114_001.jpg')}}" alt=""></a></li>
                  <li><a href="images/tracNo416675781530.jpg" title=""><img src="{{asset('assets/images/tracNo416675781530.jpg')}}" alt=""></a></li>
               </ul>
            </div>
         </div>
         <!--partners-section end-->
      </div>
   </div>
</section>
  
  


@endsection
@push('footer')



<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* faq */
.faq-head h1 {
    text-align: center;
}



@media (max-width: 768px) {
    .faq-container {
        min-width: 60.99999%;

    }
}

.review {
    overflow-x: hidden;
}

/* faq */
.faq-head h1 {
    text-align: center;
}

/* .faq-container {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
  } */



@media (max-width: 768px) {
    .faq-container {

        min-width: 60.99999%;

    }
}

/* /testomonial.css.start/  */

.swiper-container {
    overflow-x: hidden;

}
.swiper-slide .paras{
        display: inline-block;
        max-width: 350px;
        white-space: nowrap;
        overflow: hidden; 
        text-overflow: ellipsis; 
    
}
.review .slide .fa-quote-right {
    position: absolute;
    top: 2rem;
    right: 2rem;
    font-size: 24px;
    color: #ccc;
}

.review .slide .user {
    display: flex;
    gap: 1.5rem;
    align-items: center;
    padding-bottom: 1.5rem;
}

.review .slide .user img {
    /* height: 7rem; */
    width: 6rem;
    border-radius: 50%;
    object-fit: contain;

}


.review .slide .user h3 {
    color: #192a56;
    font-size: 16px;
    padding-bottom: .5rem;
}

.sub-heading,
.heading {
    text-align: center;
    font-size: 20px;
    color: #1877F2;
}

.heading {
    color: #1c5a96;
    text-align: center;
    font-weight: 600;
    font-size: 40px;
    padding: 40px 0 !important;
    line-height: 1;
    text-transform: capitalize;
}


.review .slide .user i {
    font-size: 1.3rem;
    color: #27ae60;
}

.review .slide p {
    font-size: 16px;
    line-height: 1.8;
    color: #666;
}
.swiper-slide.slide.swiper-slide-active{border: .1rem solid rgba(0, 0, 0, .2);box-shadow: 0.2rem 0.5rem rgba(0, 0, 0, .1);}

.review .slide {
    padding: 2rem;
    
    border-radius: .5rem;
    position: relative;
    margin-bottom: 20px;
    margin-right: 20px;
    /*height: 380px;*/
    min-width: 31.99999%;
    
}

.review {
    position: relative;
}

.review .slide h2 {
    font-size: 20px;
    color: #393939;
}

@media (max-width: 480px) {

    /* .faq-container {
   
    } */
    .review .slide {
        min-width: 99.99999%;

    }
}
    
</style>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".review-slider", {
  spaceBetween:20,
  slidesPerView: 3,
  centeredSlides:true,
  autoplay:{
      delay:1500,
      disableOnInteraction:false,
  },
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
   
   loop:true,
   breakpoints: {
      0: {
          slidesPerView:1,
      },
      640:{
          slidesPerView:2,
      },
      768:{
          slidesPerView:2,
      },
      1024:{
          slidesPerView:3,
      },
   },
});
    </script>

@endpush
  