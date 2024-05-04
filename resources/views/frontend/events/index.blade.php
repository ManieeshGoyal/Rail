@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'events') !!}
@endpush
@section('body')
<head>
 
    
  <style>
    
  .about-banner{
         background-image: url('https://jindal.yourwebsitedemo.in/assets/img/Untitled design (41).jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height:50vh;
    width: 100%;
background-position:center;
    display: flex;
    justify-content: center;
    align-items: flex-end;
  }


.breadcrumb li a {
    color:white;}
    
    .breadcrumb li a:after {
    content: '';
    padding: 0 5px;
    display:none;
}
.breadcrumb-item.active {
    color: #d6d8d9;
}
 </style> 
             
          
 </head> 

 
     <!--<div class="pageContent"> -->
     <!--        <section class="py-4 bg-gray"> -->
     <!--            <div class="container"> -->
     <!--                <div class="row"> -->
     <!--                    <div class="col-lg-8 mt-3"> -->
     <!--                        <div class="border-l mb-4 aos-init" data-aos="fade-up"> -->
     <!--                            <h2 class="txt-lg mb-3">Lorem Ipsum</h2> -->
     <!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus elementum dui sit amet condimentum. Pellentesque vel arcu rhoncus dui ultrices eleifend ut ut purus. Duis ut enim hendrerit, fermentum nisi in, pellentesque velit.</p> -->
     <!--                        </div> -->
     <!--                        <p class="text-left mt-4 mb-5 aos-init" data-aos="fade-up"><a href="#" -->
     <!--                                class="btn btn-gradient">View more</a></p> -->
     <!--                        <div class="row no-gutters mb-3 zoom-img"> -->
     <!--                            <div class="col-md-6 aos-init" data-aos="fade-up"> -->
     <!--                                   <img src="{{ asset('assets/img/vision.png')}}" class="img-fluid w-100" loading="lazy"> -->
     <!--                                                            </div> -->
     <!--                            <div class="col-md-6 sustainability-h aos-init" data-aos="fade-up"> -->
     <!--                                <div class="bg-white p-4 h-100"> -->
     <!--                                    <h3 class="sectionheading">Lorem Ipsum:</h3> -->
     <!--                                    <p>To be the most preferred and reliable provider of value in all our businesses.</p> -->
     <!--                                    <p class="mt-3"><a href="#" class="txt-xs">Read more</a></p> -->
     <!--                                </div> -->
     <!--                            </div> -->
     <!--                        </div> -->
     <!--                    </div> -->
     <!--                    <div class="col-lg-4  mt-3 mb-3"> -->
     <!--                        <div class="row no-gutters h-100 bg-white  zoom-img"> -->
     <!--                            <div class="col-lg-12 col-sm-6"> -->
     <!--                                <img alt="" -->
     <!--                                    src="{{ asset('assets/img/core-values.png')}}" -->
     <!--                                    class="img-fluid w-100 h-100" loading="lazy"> -->
                                         
     <!--                            </div> -->
     <!--                            <div class="col-lg-12 col-sm-6 sustainability-v aos-init" data-aos="fade-up"> -->
     <!--                                <div class="bg-white px-3 pb-3 h-100"> -->
     <!--                                    <h3 class="sectionheading mt-4">Lorem Ipsum:</h3> -->
     <!--                                    <p>Recognise individual's contribution in the growth and development of the Company. Treat all Jindalites with respect and dignity.</p> -->
     <!--                                    <p class="mt-3"><a href="#" class="txt-xs">Read more</a></p> -->
     <!--                                </div> -->
     <!--                            </div> -->
     <!--                        </div> -->
     <!--                    </div> -->
     <!--                </div> -->
     <!--            </div> -->
     <!--        </section> -->

     <!--    </div> -->
   

<section class="about-banner" > 
                      
                       <div> 
                            <div class="container"> 
                               <h2 class="text-white pb-1">India’s fastest growing corporate catering to a billion aspirations</h2>
                               <nav aria-label="breadcrumb">
 
                                    <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="https://jindal.yourwebsitedemo.in/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Events</li>
                                      </ol>
                                    </nav>

                           </div> 
                       </div>
</section>

<section>
    <div class="container"> 
         <div class="row my-5" >
    <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
       <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
  
     <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
       <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
        <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
       <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
  
     <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
       <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
        <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
       <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
  
     <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
       <div class="col-md-6 d-flex justify-content-center align-items-left my-3">
        <div class="icon">  <img src="{{ asset('assets/img/document.png')}}" loading="lazy" height="60px"></div>
          <div class="text ml-2">
              <h5>dummy heading goes here</h5>
              <span>4 days ago</span>
              
          </div>
    </div>
    </div>
    </div>
</section>


@endsection