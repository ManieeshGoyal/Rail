@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'services') !!}
@endpush
@section('body')
<head>
 
    
  <style>
    
  .about-banner{
         background-image: url('https://jindal.yourwebsitedemo.in/assets/img/services.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height:50vh;
    width: 100%;
background-position:center;
    display: flex;
    justify-content: center;
    align-items: flex-end;
  }
  
  .cta .container {
    padding: 80px;
    background: #eceeef;
    border-radius: 15px;
}
.cta .content h3 {
    color: black;
    font-size: 48px;
    font-weight: 700;
}
.cta .content p {
    color: black;
    font-weight: 500;
    font-size: 18px;
}
.cta .content .cta-btn {
    color: white;
    font-weight: 500;
    font-size: 16px;
    display: inline-block;
    padding: 12px 40px;
    border-radius: 5px;
    transition: 0.5s;
    margin-top: 10px;
    background: #1893a8;
}
.icon-box {
    padding: 60px 30px;
    position: relative;
    overflow: hidden;
    background:#1893a8;
    box-shadow: 0 0 29px 0 rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
    z-index: 1;
    height: 100%;
    width: 100%;
    text-align: center;
}
.heading_underline{
        width: 56%;
    height: 4px;
    background-color:#1893a8;
    transition: all .4s ease-in-out;
      }

        .mainbox:hover>a{
          text-decoration: none;
        }
        .flex-b{
          justify-content: space-evenly;
        }
        
          .card{
      background:#ebebeb;
      border:none;
  }
  
 
    .badge{
        background: #1378be;
        color: white;
            font-weight: 500;
    }
    .meta ul {
        list-style: none;
        display: flex;
    
    }
    .meta ul li{
        background: #1378be;
        padding: 1.5px;
        color: white;
       width: 100px;
       margin:0px 2px 0px;
       text-align: center;
    
    }
    .meta ul li a{ 
      
        color: white;
        
    }
    .meta .badge{
        font-weight:400;
        padding: 5px;
        width:80px;
    }
    .card-fotter{
        padding: 0px 20px 20px 20px;
    }
    .badge svg{
        fill: white;
        margin-right: 5px;
    }
.card-fotter{
    border-bottom-left-radius:12px;
    border-bottom-right-radius:12px;
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
                               <h2 class="text-white pb-5">India’s fastest growing corporate catering to a billion aspirations</h2>
                               
                                    <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="https://jindal.yourwebsitedemo.in/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                                      </ol>
                                    </nav>
                               
                           </div> 
                       </div>
</section>


<section>
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box text-center">
              <div class="icon"> <img src="assets/img/wired-outline-1103-confetti (2).gif" alt="" class="img-fluid" ></div>
              <h1 class="font-weight-bold text-white"><div class="count">45</div> </h1>
            </div>
          </div><!--End Icon Box -->

         <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box text-center">
              <div class="icon"> <img src="assets/img/wired-outline-1103-confetti (2).gif" alt="" class="img-fluid" ></div>
              <h1 class="font-weight-bold text-white"><div class="count">45</div> </h1>
            </div>
          </div><!--End Icon Box -->

         <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box text-center">
              <div class="icon"> <img src="assets/img/wired-outline-1103-confetti (2).gif" alt="" class="img-fluid" ></div>
              <h1 class="font-weight-bold text-white"><div class="count">45</div> </h1>
            </div>
          </div><!--End Icon Box -->

         <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box text-center">
              <div class="icon"> <img src="assets/img/wired-outline-1103-confetti (2).gif" alt="" class="img-fluid" ></div>
              <h1 class="font-weight-bold text-white"><div class="count">45</div> </h1>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </section>
   
   
   <section id="cta" class="cta m-5">
      <div class="container aos-init aos-animate" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Alias sunt quas <em>Cupiditate</em> oluptas hic minima</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn align-self-start" href="#">Hire us</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/cta.jpg" alt="" class="img-fluid">
            </div>
          </div>

        </div>
        


      </div>
    </section>

   
   
   <section>
      <div class="container mb-5">
          
           <div class="row">

 <div class="col-xl-4 col-md-6 col-10 mt-4 mt-xl-0 offset-1 offset-md-0 card aos-init aos-animate  p-3 rounded bg-grey " data-aos="fade-up" data-aos-delay="100">
     <div class="box-one bg-white p-4 rounded">
    <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px">
        <h3>Nesciunt Mete</h3>
        <div class="heading_underline mb-2"></div>
        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
       
       </div> 
 </div>
 
 <div class="col-xl-4 col-md-6 col-10 mt-4 mt-xl-0 offset-1 offset-md-0 card aos-init aos-animate  p-3 rounded bg-grey " data-aos="fade-up" data-aos-delay="100">
     <div class="box-one bg-white p-4 rounded">
    <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px">
        <h3>Nesciunt Mete</h3>
        <div class="heading_underline mb-2"></div>
        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
       
       </div> 
 </div>
 
 <div class="col-xl-4 col-md-6 col-10 mt-4 mt-xl-0 offset-1 offset-md-0 card aos-init aos-animate  p-3 rounded bg-grey " data-aos="fade-up" data-aos-delay="100">
     <div class="box-one bg-white p-4 rounded">
    <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px">
        <h3>Nesciunt Mete</h3>
        <div class="heading_underline mb-2"></div>
        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
     
       </div> 
 </div>
 
  <div class="col-xl-4 col-md-6 col-10 mt-4 mt-xl-0 offset-1 offset-md-0 card aos-init aos-animate  p-3 rounded bg-grey " data-aos="fade-up" data-aos-delay="100">
     <div class="box-one bg-white p-4 rounded">
    <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px">
        <h3>Nesciunt Mete</h3>
        <div class="heading_underline mb-2"></div>
        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
        
       </div> 
 </div>
 
  <div class="col-xl-4 col-md-6 col-10 mt-4 mt-xl-0 offset-1 offset-md-0 card aos-init aos-animate  p-3 rounded bg-grey " data-aos="fade-up" data-aos-delay="100">
     <div class="box-one bg-white p-4 rounded">
    <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px">
        <h3>Nesciunt Mete</h3>
        <div class="heading_underline mb-2"></div>
        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
        
       </div> 
 </div>
 
  <div class="col-xl-4 col-md-6 col-10 mt-4 mt-xl-0 offset-1 offset-md-0 card aos-init aos-animate  p-3 rounded bg-grey " data-aos="fade-up" data-aos-delay="100">
     <div class="box-one bg-white p-4 rounded">
    <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px">
        <h3>Nesciunt Mete</h3>
        <div class="heading_underline mb-2"></div>
        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
        
       </div> 
 </div>
 
 
   
    

          </div>


         

        </div>
      </div>

      
      
    </section>
   
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   
<script>
$(document).ready(function() {

  var counters = $(".count");
  var countersQuantity = counters.length;
  var counter = [];

  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function(start, value, id) {
    var localStart = start;
    setInterval(function() {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 100);
  }

  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});
</script>
@endsection