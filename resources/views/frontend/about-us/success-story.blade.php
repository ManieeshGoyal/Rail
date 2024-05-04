@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Success Story') !!}
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
                                <h2 class="text-white pb-2 text-center">Success Story</h2>
                                 <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Success Story</li>
                                      </ol>
                                    </nav>
                            </div>
                        </div>
                        
                        
                        
                    </section>
                    
   <section id="cta" class="cta mt-5 mb-5">
      <div class="container aos-init aos-animate" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>The Path We've  <em>Traveled</em> ...</h3>
            <p> At Jindal Rail, our journey has been guided by the beacon of growth, steering us toward boundless opportunities and untapped potential. With an unwavering commitment to progress and achievement, we've nurtured an ecosystem that propels the expansion of our industry. From fostering the growth of our exceptional workforce to forging transformative partnerships and exploring uncharted territories, we are the driving force behind a brighter future for rail transport.</li>
      
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="{{ asset('assets/images/success-story.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>

        </div>
        


      </div>
    </section>

   
   
    <section class="">
        <div class="container mb-5">
            <div class="row">
                
                <div class="col-xl-12 col-md-12 col-10 mt-12 mt-xl-0 offset-1 offset-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="box-one bg-white p-4 rounded">
                       <div class="main-timeline2">
                        <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2023</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>2023 marked an expansion of our global footprint as we secured an order for the export of 100 Gondola wagons in the master-slave configuration. <br><i class="fa fa-arrow-right"></i>We successfully completed prototype testing for the Taller Auto Car Carrier and Open wagon, further showcasing our dedication to innovation and progress. Desing and engineering of Gondola wagon started for is success journey.</p>
                            </a>
                        </div>
                         <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2022</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>The BFNV wagon gained widespread acclaim, leading to orders exceeding 800 crores. Jindal Rail marked the highest turnover and started writing new pages of this era.<br><i class="fa fa-arrow-right"></i>In 2022, our success story continued with the design of a new open wagon for the steel commodity, accompanied by a strategic MOU with RDSO for its development.</p>
                            </a>
                        </div>
                         <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2021</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>In 2021, we transformed concepts into reality by designing a BFNV wagon tailored to the steel industry, ushering in a new era as commercial operations began at JSW Steel.<br><i class="fa fa-arrow-right"></i>We introduced a cutting-edge Taller Car carrier wagon, redefining ease of operation and maintenance in partnering with India’s leading logistics player. <br><i class="fa fa-arrow-right"></i>Successfully got registered as an approved manufacturer from DRDO.  </p>
                            </a>
                        </div>
                         <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2020</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>Despite the challenges of 2020, Jindal Rail secured and successfully executed repeat export order, showcasing our resilience and commitment to excellence. Jindal manufactured Fly ash and bulk cement carrying wagon BCFC.<br><i class="fa fa-arrow-right"></i>Concept design validated by Inspection, Static test, Squeeze load test and Oscillation trail done of BFNV wagons.  </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2019</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>The year 2019 was marked by diversity, with JRIL producing eight different wagon variants, including the groundbreaking Wagons catering to Steel, Auto, Logistics, and Infrastructure industries, bolstering the economy.<br><i class="fa fa-arrow-right"></i>Jindal concept wagon BFNV comes into reality and prototype wagon manufactured at plant.<br><i class="fa fa-arrow-right"></i>Keeping its journey continues we design New Hybrid Gondola wagon for export order. </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2018</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>Competed the order of Indian Railways for supply of 292 nos. BOXNHL wagons.<br><i class="fa fa-arrow-right"></i>In 2018, Jindal Rail made history by entering into a joint venture with RDSO, earning us the title of "Innovator" in the private wagon manufacturing sector. Also designed and developed High axle load of 32 ton. Flat Steel coil wagon for in plant movement. </p>
                            </a>
                        </div>
                         <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2017</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>Achieved a milestone of manufacturing of more than 1800 wagon in a single calendar year and received one more order from Indian Railways for supply of 284 nos. BCNAHSM1 wagon.<br><i class="fa fa-arrow-right"></i>In synch with the Indian Railways focus to get investment from private sector and Jindal Rail partnered with a leading Leasing Company from USA for supplying freight wagons in Indian Railways' under Wagon Leasing scheme of Indian Railways.  </p>
                            </a>
                        </div>
                         <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2016</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>In 2016, JRIL's exceptional performance garnered more orders from Indian Railways, adding over 3,000 wagons to our portfolio. Received another order from Indian Railways for supply of 292 nos. BOXNHL wagons in the year. <br><i class="fa fa-arrow-right"></i>Designed and developed heavy axle load wagon, 30 ton axle load wagon for transportation of G-slag wagons for in-plant movement.</p>
                            </a>
                        </div>
                          <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2015</h3>
                                <p class="description">
	<i class="fa fa-arrow-right"></i>Completed second developmental order of 500 nos. wagons from IR and secured first regular order of 2150 nos. wagon from IR.<br><i class="fa fa-arrow-right"></i>Improvised the BLC wagon to suite customer requirement for use in Infrastructure project. </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2014</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>Completed the first export order of 140 nos. Gondola wagon. After becoming registered vendor of DMW, Supplied first Loco shell<br><i class="fa fa-arrow-right"></i>Designed the special five tyer fixture type BRN-EUR wagon for transportation of 260-meter-long rail panels for the Eastern Dedicated Freight Corridor.</p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2013</h3>
                                <p class="description">
<i class="fa fa-arrow-right"></i>Compilation of first developmental order of 250 nos. wagons from IR<br><i class="fa fa-arrow-right"></i>Desing and development of Gondola wagon for export order</p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-train"></span>
                            <a class="timeline-content">
                                <h3 class="title">2012</h3>
                                <p class="description">
	<i class="fa fa-arrow-right"></i>Commercial operation started.</p>
                            </a>
                        </div>
                    </div>
                        <table class="table" style="display:none;">
                            <tbody>
                                <tr>
                                    <td>2012</td>
                                    <td><ul><li aria-level="1">Commercial operation started.</li></ul></td>
                                </tr>
                                <tr>
                                    <td>2013</td>
                                    <td><ul>
                                        <li aria-level="1">Compilation of first developmental order of 250 nos. wagons from IR</li>
                                        <li aria-level="1">Desing and development of Gondola wagon for export order</li></ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2014</td>
                                    <td><ul>
                                        <li aria-level="1">Completed the first export order of 140 nos. Gondola wagon. After becoming registered vendor of DMW, Supplied first Loco shell.</li>
                                        <li aria-level="1">Designed the special five tyer fixture type BRN-EUR wagon for transportation of 260-meter-long rail panels for the Eastern Dedicated Freight Corridor.</li>
                                    </ul></td>
                                </tr>
                                
                                <tr>
                                    <td>2015</td>
                                    <td><ul>
                                        <li aria-level="1">Completed second developmental order of 500 nos. wagons from IR and secured first regular order of 2150 nos. wagon from IR.</li>
                                        <li aria-level="1">Improvised the BLC wagon to suite customer requirement for use in Infrastructure project.</li>
                                    </ul></td>
                                </tr>
<tr>
<td><span>2016</span></td>
<td>
<ul>
 	<li aria-level="1"><span>In 2016, JRIL's exceptional performance garnered more orders from Indian Railways, adding over 3,000 wagons to our portfolio. Received another order from Indian Railways for supply of 292 nos. BOXNHL wagons in the year.</span></li>
 	<li aria-level="1"><span>Designed and developed heavy axle load wagon, 30 ton axle load wagon for transportation of G-slag wagons for in-plant movement.</span></li>
</ul>
</td>
</tr>
<tr>
<td><span>2017</span></td>
<td>
<ul>
 	<li aria-level="1"><span>Achieved a milestone of manufacturing of more than 1800 wagon in a single calendar year and received one more order from Indian Railways for supply of 284 nos. BCNAHSM1 wagon. </span></li>
 	<li aria-level="1"><span>In synch with the Indian Railways focus to get investment from private sector and Jindal Rail partnered with a leading Leasing Company from USA for supplying freight wagons in Indian Railways' under Wagon Leasing scheme of Indian Railways.</span></li>
</ul>
</td>
</tr>
<tr>
<td><span>2018</span></td>
<td>
<ul>
 	<li aria-level="1"><span>Competed the order of Indian Railways for supply of 292 nos. BOXNHL wagons.</span></li>
 	<li aria-level="1"><span>In 2018, Jindal Rail made history by entering into a joint venture with RDSO, earning us the title of "Innovator" in the private wagon manufacturing sector. Also designed and developed High axle load of 32 ton. Flat Steel coil wagon for in plant movement. </span></li>
</ul>
</td>
</tr>
<tr>
<td><span>2019</span></td>
<td>
<ul>
 	<li aria-level="1"><span>The year 2019 was marked by diversity, with JRIL producing eight different wagon variants, including the groundbreaking Wagons catering to Steel, Auto, Logistics, and Infrastructure industries, bolstering the economy.</span></li>
 	<li aria-level="1"><span>Jindal concept wagon BFNV comes into reality and prototype wagon manufactured at plant.</span></li>
 	<li aria-level="1"><span>Keeping its journey continues we design New Hybrid Gondola wagon for export order. </span></li>
</ul>
</td>
</tr>
<tr>
<td><span>2020</span></td>
<td>
<ul>
 	<li aria-level="1"><span>Despite the challenges of 2020, Jindal Rail secured and successfully executed repeat export order, showcasing our resilience and commitment to excellence. Jindal manufactured Fly ash and bulk cement carrying wagon BCFC.</span></li>
 	<li aria-level="1"><span>Concept design validated by Inspection, Static test, Squeeze load test and Oscillation trail done of BFNV wagons. </span></li>
</ul>
</td>
</tr>
<tr>
<td><span>2021</span></td>
<td>
<ul>
 	<li aria-level="1"><span>In 2021, we transformed concepts into reality by designing a BFNV wagon tailored to the steel industry, ushering in a new era as commercial operations began at JSW Steel.</span></li>
</ul>
<ul>
 	<li aria-level="1"><span>We introduced a cutting-edge Taller Car carrier wagon, redefining ease of operation and maintenance in partnering with India’s leading logistics player.</span></li>
</ul>
<ul>
 	<li aria-level="1"><span>Successfully got registered as an approved manufacturer from DRDO.</span></li>
</ul>
</td>
</tr>
<tr>
<td><span>2022</span></td>
<td>
<ul>
 	<li aria-level="1"><span>The BFNV wagon gained widespread acclaim, leading to orders exceeding 800 crores. Jindal Rail marked the highest turnover and started writing new pages of this era.</span></li>
 	<li aria-level="1"><span>In 2022, our success story continued with the design of a new open wagon for the steel commodity, accompanied by a strategic MOU with RDSO for its development. </span></li>
</ul>
</td>
</tr>
<tr>
<td><span>2023</span></td>
<td>
<ul>
 	<li aria-level="1"><span>2023 marked an expansion of our global footprint as we secured an order for the export of 100 Gondola wagons in the master-slave configuration. </span></li>
</ul>
<ul>
 	<li aria-level="1"><span>We successfully completed prototype testing for the Taller Auto Car Carrier and Open wagon, further showcasing our dedication to innovation and progress. Desing and engineering of Gondola wagon started for is success journey. </span></li>
</ul>
</td>
</tr>
</tbody>
</table>
                    </div> 
                </div>
                
            </div>
        </div>
    </section> 

@endsection