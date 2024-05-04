@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Our Journey') !!}
@endpush
@section('body')

  <style>
   
  
  .cta .container { padding: 80px; background: #0087d008; border-radius: 3px; }
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
      background:#0087d008;
      border:none;
  }
  
 
    .badge{
        background: #0087d008;
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
	    
	      <section class="about-banner">
                      
                        <div>
                            <div class="container">
                                <h2 class="text-white pb-2 text-center">Our Journey</h2>
                                 <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Our Journey</li>
                                      </ol>
                                    </nav>
                            </div>
                        </div>
                        
                        
                        
                    </section>
                     
   
    <section class="">
        <div class="container mb-5 mt-5">
            <div class="row">
                 
                <div class="col-xl-12 col-md-12 col-10 mt-4 mt-xl-0 offset-1 offset-md-0 card aos-init aos-animate  p-3 rounded bg-grey " data-aos="fade-up" data-aos-delay="100">
                    <div class="box-one bg-white p-4 rounded">
                        <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px">
                        <h3>In our remarkable journey, we've achieved numerous milestones:</h3>
                        <div class="heading_underline mb-2"></div>
                        
                        <table class="table">
                           <tbody>
                              <tr>
                                 <td><span style="font-weight: 400;">2012</span></td>
                                 <td><span style="font-weight: 400;">we embarked on our commercial operations, setting the foundation for our future.</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2013</span></td>
                                 <td><span style="font-weight: 400;">marked a significant step as we executed our first developmental order of 250 wagon units</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2014</span></td>
                                 <td><span style="font-weight: 400;">This year saw us completing our first export order, delivering 140 Gondola wagons to global destinations</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2015</span></td>
                                 <td><span style="font-weight: 400;">was a turning point as we secured our first regular order of 2150 wagons from Indian Railways, a testament to our quality.</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2016</span></td>
                                 <td><span style="font-weight: 400;">we had ventured into private orders, contributing over 3000 wagons to the industry</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2017</span></td>
                                 <td><span style="font-weight: 400;">our innovation shone as we designed, developed, and manufactured the groundbreaking BFNV wagon tailored for the steel industry.</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2018</span></td>
                                 <td><span style="font-weight: 400;">This year saw us pushing boundaries again with the creation of the 30-ton axle load wagon, a boon for the steel sector.</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2019</span></td>
                                 <td><span style="font-weight: 400;">we proudly manufactured and supplied the 22-meter-long Car carrier wagon for the Automobile Industry, enhancing transportation efficiency.</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2020</span></td>
                                 <td><span style="font-weight: 400;">We catered to the cement industry with a specially designed fly ash and bulk cement carry wagon.</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2021</span></td>
                                 <td><span style="font-weight: 400;">The year brought strategic collaboration as we signed an MOU with RDSO for the development of the Taller Auto Car wagon, addressing the needs of the auto car carriers.</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2022</span></td>
                                 <td><span style="font-weight: 400;">we manufactured the New Auto Car Carrier and inked another MOU with RDSO, this time for a versatile open wagon for two-way steel product transportation</span></td>
                              </tr>
                              <tr>
                                 <td><span style="font-weight: 400;">2023*</span></td>
                                 <td><span style="font-weight: 400;">As we stand in 2023, we've secured an export order for our Gondola wagon and introduced the innovative New Coil Multi-Purpose wagon, further establishing our commitment to progress.</span></td>
                              </tr>
                           </tbody>
                        </table>
                        
                    </div> 
                </div>
                
               
                
            </div>
        </div>
    </section> 

@endsection