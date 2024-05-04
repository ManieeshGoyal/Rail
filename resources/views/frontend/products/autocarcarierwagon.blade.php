@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'autocarcarrierwagon') !!}
@endpush
@section('body')
<head>
   <style>
      .portfolio-section {
         background-color: #f8f9fa;
         padding: 50px 0;
      }

      .portfolio-section h1 {
         font-size: 2rem;
         color: #333;
      }
      .product-card p
      {
          color:grey;
      }

      .product-card {
         border: 1px solid #ccc;
         padding: 40px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         background-color: #cccccc36;
      }

      /* Animation for fade-in effect */
      .fade-in {
         animation: fadeIn 1s;
         animation-fill-mode: forwards;
         opacity: 0;
      }

      @keyframes fadeIn {
         to {
            opacity: 1;
         }
      }

      .portfolio-section .col-lg-8 {
         padding-right: 0px;
         padding-left: 0px;
      }

      .portfolio-section .img-fluid {
         position: relative;
         transition: filter 0.3s ease;
      }

      .portfolio-section .img-fluid:hover {
         filter: grayscale(100%);
         /* Apply 100% grayscale filter on hover */
      }

      .product-card ul {
         padding-left: 20px;
      }
   </style>
</head>






   <main>
      <section class="about-banner">

         <div>
            <div class="container">
               <h2 class="text-white pb-2 text-center">Auto Car Carrier Wagon</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb d-flex justify-content-center ">
                     <li class="breadcrumb-item"><a href="https://yourwebsitedemo.in/jindalrail/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Auto Car Carrier wagon</li>
                  </ol>
               </nav>
            </div>
         </div>



      </section>
      <!-- Product:Start -->
  


<!--product-->
<section class="product-design">
<div class="container ">
    <div class="sec-title mb-4">
                     <span class="title">Integrated Solutions for Efficient Freight Transportation by Rail</span>
                     <h2>One of the largest Freight Cars manufacturer in India catering to Indian Railways, Private Sector & Export Markets</h2>
                  </div>

  <ul class="grid">
   
   
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images/DI-Plnt-06.jpg')}}" alt="" class="card__image">
        <div class="card__text">
        Special Wagon for transportation of 260m rail type 'BRNEUR'
        </div>
        <div class="card__price"></div>
      </a>
    </li>
   
    
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images/rail-12.jpg')}}" alt="" class="card__image">
        <div class="card__text">
         Open Wagon type 'BOXNHL'
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images/rail-1.jpg')}}" alt="" class="card__image">
        <div class="card__text">
         Brake Van type 'BVZI/BVCM'
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images/rail-2.jpg')}}" alt="" class="card__image">
        <div class="card__text">
         Special Gandola with fixed & rotatary coupler
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images/rail-3.jpg')}}" alt="" class="card__image">
        <div class="card__text">
         Bogie covered wagon type 'BCNHL'
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images/rail-4.jpg')}}" alt="" class="card__image">
        <div class="card__text">
         Floor Frame Assembly for Diesel Locomotives
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images/rail-5.jpg')}}" alt="" class="card__image">
        <div class="card__text">
        Low platform bogie container wagon type BLC
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images//rail-3.jpg')}}" alt="" class="card__image">
        <div class="card__text">
        Bogie Frames for Coaches
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images//rail-11.jpg')}}" alt="" class="card__image">
        <div class="card__text">
       100 T Pay Load Wagon for In-plant movement
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images//rail-1.jpg')}}" alt="" class="card__image">
        <div class="card__text">
       30 t Axle load Side Discharge Open Wagon
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images//rail-10.jpg')}}" alt="" class="card__image">
        <div class="card__text">
      Bogie Flat Steel Wagon BFNS22.9
        </div>
        <div class="card__price"></div>
      </a>
    </li>
    <li class="card">
      <a class="card__link">
      <img src="{{ asset('assets/images//rail-9.jpg')}}" alt="" class="card__image">
        <div class="card__text">
      Bogie Flat Steel Wagon BFNSM22.9
        </div>
        <div class="card__price"></div>
      </a>
    </li>
  
   
  </ul>
</div>
</section>
<!-- Product:Start -->
<section class="box">
<div class="container">
  <div class="content">
    <div class="left">
      <div class="product_img">
          <img src="{{ asset('assets/images//rail-11.jpg')}}" alt="">
      </div>
      <!--<div class="product_details">-->
      <!--  <h4 class="title">Woakers</h4>-->
      <!--  <p class="discription">Men's White Printed Sneakers</p>-->
      <!--  <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>-->
      <!--  <p class="other">inclusive of all taxes</p>-->
      <!--</div>-->
    </div>

    <div class="right">
      <div class="product_description">
        <h4>100 T Pay Load Wagon for In-plant movement</h4>
        <p>100 t Pay load flat wagon for Indian Steel Industries, which is designed for transportation of hot rolled coils/ Flat/ Billets for ESSAR.




        </p>
        <p><span class="highlight">Salient Features:</span>
        
        </p>
        <table class="feature-table">
            <tbody>
                <tr>
                    <td>
                        <strong>
                        Sr. No.
                        </strong>
                    </td>
                    <td>
                        <strong>
                    Description
                    </strong>
                    </td>
                    <td >
                        <strong>
                      Dimensions
                      </strong>
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        1
                    </td>
                    <td width="157px">
                       Track Gauge
                    </td>
                    <td width="358px">
                        1676 mm
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        2
                    </td>
                   <td width="157px">
                        Axle Load
                    </td>
                     <td width="358px">
                    32 MT
                    </td>
                </tr>
                <tr>
                     <td width="68px">
                       3
                    </td>
                    <td width="157px">
                     Gross Load
                    </td>
                      <td width="358px">
                       128 MT
                    </td>
                </tr>
                </tbody>
                
               
               </table>
               <div class="read-more-content">
                <table class="feature-table ">
            <tbody>
                <tr>
                    <td width="68px">
                        4
                    </td>
                    <td width="157px">
                        Estimated Tare
                    </td>
                     <td width="358px">
                        27 MT
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        5
                    </td>
                    <td width="157px">
                       Carrying Capacity
                    </td>
                      <td width="358px">
                       100 MT
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        <p>6</p>
                    </td>
                    <td width="157px">
                        Width over sole bar
                    </td>
                     <td width="358px">
                        3000 mm
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        7
                    </td>
                   <td width="157px">
                        Coupling 
                    </td>
                    <td width="358px">
                        Non-transition CBC and high capacity draft gear
                    </td>
                </tr>
             
            </tbody>
        </table>
        </div>
        
         <a class="read-more text" title="">Read More</a>
        <!--<p><span class="highlight">Manufactured By -</span>-->
        <!--  S.K. INTERNATIONAL AJUDD PURAM BAGDA TAHSIL AGRA U.P. <span class="special">282001, 9759860599, sheela.woakers@gmail.com</span>-->
        <!--</p>-->
        <!--<p><span class="highlight">Packed By -</span>-->
        <!--  S.K. INTERNATIONAL AJUDD PURAM BAGDA TAHSIL AGRA U.P. <span class="special">282001, 9759860599, sheela.woakers@gmail.com</span>-->
        <!--</p>-->
        <!--<p><span class="highlight">Commodity -</span> Men's Casual Shoes-->
        <!--</p>-->
        <!--<p><span class="highlight">Sold By -</span> Next Tree Private Limited-->
        <!--</p>-->
      </div>
    </div>
</div>
  <div class="content">
    <div class="left">
      <div class="product_img">
          <img src="{{ asset('assets/images//rail-1.jpg')}}" alt="">
      </div>
      <!--<div class="product_details">-->
      <!--  <h4 class="title">Woakers</h4>-->
      <!--  <p class="discription">Men's White Printed Sneakers</p>-->
      <!--  <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>-->
      <!--  <p class="other">inclusive of all taxes</p>-->
      <!--</div>-->
    </div>

    <div class="right">
      <div class="product_description">
        <h4>30 t Axle load Side Discharge Open Wagon Type-BOXJSW</h4>
        <p>First 30 t axle load wagon in Indian industry, designed to carry granulated slag for cement industry. Having one side discharge doors.






        </p>
        <p><span class="highlight">Salient Features:</span>
        
        </p>
        <table class="feature-table">
            <tbody>
                <tr>
                    <td>
                        <strong>
                        Sr. No.
                        </strong>
                    </td>
                    <td>
                        <strong>
                    Description
                    </strong>
                    </td>
                    <td >
                        <strong>
                      Dimensions
                      </strong>
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        1
                    </td>
                    <td width="157px">
                       Track Gauge
                    </td>
                    <td width="358px">
                        1676 mm
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        2
                    </td>
                   <td width="157px">
                        Axle Load
                    </td>
                     <td width="358px">
                  30 MT
                    </td>
                </tr>
                <tr>
                     <td width="68px">
                       3
                    </td>
                    <td width="157px">
                     Gross Load
                    </td>
                      <td width="358px">
                       120 MT
                    </td>
                </tr>
                </tbody>
                
               
               </table>
               <div class="read-more-content">
                <table class="feature-table ">
            <tbody>
                <tr>
                    <td width="68px">
                        4
                    </td>
                    <td width="157px">
                       Net Carrying Capacity
                    </td>
                     <td width="358px">
                       93 MT (Max.)
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        5
                    </td>
                    <td width="157px">
                      Estimated Tare
                    </td>
                      <td width="358px">
                       27 MT
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        <p>6</p>
                    </td>
                    <td width="157px">
                        Height Overall
                    </td>
                     <td width="358px">
                       3323 mm
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        7
                    </td>
                   <td width="157px">
                        Volumetric Capacity
                    </td>
                    <td width="358px">
                        78 m3
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        8
                    </td>
                   <td width="157px">
                        Height of Coupler From R.L. (at tare)
                    </td>
                    <td width="358px">
                        1105 mm
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        9
                    </td>
                   <td width="157px">
                      Wheel Diameter on tread
                    </td>
                    <td width="358px">
                        1000 mm (new)
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        10
                    </td>
                   <td width="157px">
                       Bogie
                    </td>
                    <td width="358px">
                        3 Piece Cast steel bogie
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        11
                    </td>
                   <td width="157px">
                        Brake System
                    </td>
                    <td width="358px">
                        Single pipe graduated release Air brake system with side operated hand brake
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                       12
                    </td>
                   <td width="157px">
                       Coupling System
                    </td>
                    <td width="358px">
                        Non-transition CBC and high capacity draft gear
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                       13
                    </td>
                   <td width="157px">
                       Discharge System
                    </td>
                    <td width="358px">
                      Four nos. of doors provided at one side
                    </td>
                </tr>
               
            </tbody>
        </table>
        </div>
        
         <a class="read-more text" title="">Read More</a>
        <!--<p><span class="highlight">Manufactured By -</span>-->
        <!--  S.K. INTERNATIONAL AJUDD PURAM BAGDA TAHSIL AGRA U.P. <span class="special">282001, 9759860599, sheela.woakers@gmail.com</span>-->
        <!--</p>-->
        <!--<p><span class="highlight">Packed By -</span>-->
        <!--  S.K. INTERNATIONAL AJUDD PURAM BAGDA TAHSIL AGRA U.P. <span class="special">282001, 9759860599, sheela.woakers@gmail.com</span>-->
        <!--</p>-->
        <!--<p><span class="highlight">Commodity -</span> Men's Casual Shoes-->
        <!--</p>-->
        <!--<p><span class="highlight">Sold By -</span> Next Tree Private Limited-->
        <!--</p>-->
      </div>
    </div>
</div>
  <div class="content">
    <div class="left">
      <div class="product_img">
          <img src="{{ asset('assets/images//rail-9.jpg')}}" alt="">
      </div>
      <!--<div class="product_details">-->
      <!--  <h4 class="title">Woakers</h4>-->
      <!--  <p class="discription">Men's White Printed Sneakers</p>-->
      <!--  <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>-->
      <!--  <p class="other">inclusive of all taxes</p>-->
      <!--</div>-->
    </div>

    <div class="right">
      <div class="product_description">
        <h4>Bogie Flat Steel Wagon</h4>
        <p>Type-BFNS22.9 & BFNSM22.9</p>
        <ul class="p-0">
            <li><i class="fa fa-arrow-right"></i>BFNS wagon is designed to carry HR and CR steel coils.</li>
            <li><i class="fa fa-arrow-right"></i>Two versions are available - Longer and shorter.</li>
            <li><i class="fa fa-arrow-right"></i>BFNS - Having five pockets with movable locking bars to secure coils. Fixed end wall is provided.</li>
            <li><i class="fa fa-arrow-right"></i>BFNSM- Modified BFNS wagon having less tare weight and more carrying capacity.<br>Continuous pocket in throughout length to accommodate max. coil dia of 2.6 m. Movable cross locking bars for securing the consignment.</li>
        </ul>
        <p><span class="highlight">Salient Features:</span>
        
        </p>
        <table class="feature-table">
            <tbody>
                <tr>
                    <td>
                        <strong>
                       Description
                        </strong>
                    </td>
                    <td>
                        <strong>
                    BFNS
                    </strong>
                    </td>
                    <td >
                        <strong>
                    BFNSM
                      </strong>
                    </td>
                </tr>
                <tr>
                    <td width="200px">
                       Length Over Head Stock (mm)
                    </td>
                     <td width="300px">
                          13716
                    </td>
                    <td width="300px">
                        10034
                    </td>
                </tr>
                <tr>
                     <td width="200px">
                       Length Over Couplers (mm)
                    </td>
                    <td width="300px">
                        14645
                    </td>
                     <td width="300px">
                  10963
                    </td>
                </tr>
                <tr>
 <td width="200px">
                      Length available for Coil loading (mm)


                    </td>
                     <td width="300px">
                    10474
                    </td>
                       <td width="300px">
                       8934
                    </td>
                </tr>
                </tbody>
                
               
               </table>
               <div class="read-more-content">
                <table class="feature-table ">
            <tbody>
                <tr>
                     <td width="200px">
                        Wheel Diameter on tread (mm)
                    </td>
                    <td colspan="2">
                      1000
                    </td>
                    
                </tr>
                 <tr>
                     <td width="200px">
                        Height of Coupler From R.L. (mm)
                    </td>
                    <td colspan="2">
                      1105
                    </td>
                    
                </tr>
               <tr>
                    <td width="200px">
                        Width Overall (mm)


                    </td>
                    <td colspan="2">
                      3045
                    </td>
                    
                </tr>
               <tr>
                     <td width="200px">
                        Axle Load (t)
                    </td>
                    <td colspan="2">
                      22.90
                    </td>
                    
                </tr>
                <tr>
                   <td width="200px">
                        Tare wt. (t)
                    </td>
                   <td width="300px">
                      26.71


                    </td>
                    <td width="300px">
                       23.60
                    </td>
                </tr>
                <tr>
                    <td width="200px">
                       Carrying Capacity (t)


                    </td>
                   <td width="300px">
                       64.89
                    </td>
                     <td width="300px">
                      68.00
                    </td>
                </tr>
                 <tr>
                    <td width="200px">
                        Gross wt. (t)
                    </td>
                    <td colspan="2">
                     91.6
                    </td>
                    
                </tr>
                <tr>
                    <td width="200px">
                      Pay/Tare
                    </td>
                   <td width="300px">
                       2.43
                    </td>
                    <td width="300px">
                       2.88
                    </td>
                </tr>
                <tr>
                    <td>
                      Qty. of wagons per rake


                    </td>
                   <td width="300px">
                      43
                    </td>
                    <td>
                     58
                    </td>
                </tr>
                <tr>
                    <td width="200px">
                     Payload per rake (t)
                    </td>
                    <td width="300px">
                     2790
                    </td>
                    <td width="300px">
                     3944
                    </td>
                </tr>
                 <tr>
                    <td width="200px">
                      Bogie
                    </td>
                    <td colspan="2">
                    CASNUB 22HS


                    </td>
                    
                </tr>
                 <tr>
                     <td width="200px">
                     Coupling System
                     </td>
                    <td colspan="2">
                   Non-transition CBC and high capacity draft gear

  </td>
                    
                </tr>
                 <tr>
                    <td width="200px">
                    Brake System


                     </td>
                    <td colspan="2">
                  Twin pipe graduated release Air brake system with side operated hand brake


  </td>
                    
                </tr>
                <tr>
                    <td width="200px">
                                     </td>
                    <td width="300px">
                     Conventional brake rigging


                    </td>
                    <td width="300px">
                   BMBS
                    </td>
                </tr>
              
               
               
            </tbody>
        </table>
        </div>
        
         <a class="read-more text" title="">Read More</a>
        <!--<p><span class="highlight">Manufactured By -</span>-->
        <!--  S.K. INTERNATIONAL AJUDD PURAM BAGDA TAHSIL AGRA U.P. <span class="special">282001, 9759860599, sheela.woakers@gmail.com</span>-->
        <!--</p>-->
        <!--<p><span class="highlight">Packed By -</span>-->
        <!--  S.K. INTERNATIONAL AJUDD PURAM BAGDA TAHSIL AGRA U.P. <span class="special">282001, 9759860599, sheela.woakers@gmail.com</span>-->
        <!--</p>-->
        <!--<p><span class="highlight">Commodity -</span> Men's Casual Shoes-->
        <!--</p>-->
        <!--<p><span class="highlight">Sold By -</span> Next Tree Private Limited-->
        <!--</p>-->
      </div>
    </div>
</div>
  <div class="content">
    <div class="left">
      <div class="product_img">
          <img src="{{ asset('assets/images//FlatCar.jpg')}}" alt="">
      </div>
      <!--<div class="product_details">-->
      <!--  <h4 class="title">Woakers</h4>-->
      <!--  <p class="discription">Men's White Printed Sneakers</p>-->
      <!--  <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>-->
      <!--  <p class="other">inclusive of all taxes</p>-->
      <!--</div>-->
    </div>

    <div class="right">
      <div class="product_description">
        <h4>Special wagon with Fixture for transportation of 260 m Long Rail Panels.</h4>
        <p>First Freight Car builder in India to have successfully developed and manufactured BRNA type Flat Cars fitted with Fixtures<br> for transportation of 260 m long welded Rail Panels.

</p>
       
        <!--<p><span class="highlight">Manufactured By -</span>-->
        <!--  S.K. INTERNATIONAL AJUDD PURAM BAGDA TAHSIL AGRA U.P. <span class="special">282001, 9759860599, sheela.woakers@gmail.com</span>-->
        <!--</p>-->
        <!--<p><span class="highlight">Packed By -</span>-->
        <!--  S.K. INTERNATIONAL AJUDD PURAM BAGDA TAHSIL AGRA U.P. <span class="special">282001, 9759860599, sheela.woakers@gmail.com</span>-->
        <!--</p>-->
        <!--<p><span class="highlight">Commodity -</span> Men's Casual Shoes-->
        <!--</p>-->
        <!--<p><span class="highlight">Sold By -</span> Next Tree Private Limited-->
        <!--</p>-->
      </div>
    </div>
</div>
  <div class="content">
    <div class="left">
      <div class="product_img">
          <img src="{{ asset('assets/images//Rail-64.jpg')}}" alt="">
      </div>
      <!--<div class="product_details">-->
      <!--  <h4 class="title">Woakers</h4>-->
      <!--  <p class="discription">Men's White Printed Sneakers</p>-->
      <!--  <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>-->
      <!--  <p class="other">inclusive of all taxes</p>-->
      <!--</div>-->
    </div>

    <div class="right">
      <div class="product_description">
        <h4>Gondola wagon with Rotary coupler and Sceffel bogie for Cape gauge
</h4>
        <!--<p>First Freight Car builder in India to have successfully developed and manufactured BRNA type Flat Cars fitted with Fixtures<br> for transportation of 260 m long welded Rail Panels.</p>-->
        <p><span class="highlight">Salient Features:</span>
        
        </p>
        <table class="feature-table">
            <tbody>
                <tr>
                    <td>
                        <strong>
                        Sr. No.
                        </strong>
                    </td>
                    <td>
                        <strong>
                    Description
                    </strong>
                    </td>
                    <td >
                        <strong>
                      Dimensions
                      </strong>
                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        1
                    </td>
                    <td width="157px">
                      Length over Coupler


                    </td>
                    <td width="358px">
                       13242.5mm


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        2
                    </td>
                   <td width="157px">
                     Length over Head Stock


                    </td>
                     <td width="358px">
                  12270 mm


                    </td>
                </tr>
                <tr>
                     <td width="68px">
                       3
                    </td>
                    <td width="157px">
                     Bogie Center


                    </td>
                      <td width="358px">
                      8270 mm


                    </td>
                </tr>
                </tbody>
                
               
               </table>
               <div class="read-more-content">
                <table class="feature-table ">
            <tbody>
                <tr>
                    <td width="68px">
                        4
                    </td>
                    <td width="157px">
                       Width Overall


                    </td>
                     <td width="358px">
                      2808 mm


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        5
                    </td>
                    <td width="157px">
                     Width Inside


                    </td>
                      <td width="358px">
                     2580 mm


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        <p>6</p>
                    </td>
                    <td width="157px">
                    Height Overall


                    </td>
                     <td width="358px">
                       3323 mm


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        7
                    </td>
                   <td width="157px">
                       Height Inside


                    </td>
                    <td width="358px">
                       2250 mm


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        8
                    </td>
                   <td width="157px">
                       Floor Height from R.L.


                    </td>
                    <td width="358px">
                      1073 mm


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        9
                    </td>
                   <td width="157px">
                     Coupler Height from R.L.


                    </td>
                    <td width="358px">
                        895 mm


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        10
                    </td>
                   <td width="157px">
                       Axle Load


                    </td>
                    <td width="358px">
                       20.5 t


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        11
                    </td>
                   <td width="157px">
                        Tare Weight


                    </td>
                    <td width="358px">
                       20 t


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                       12
                    </td>
                   <td width="157px">
                      Pay Load


                    </td>
                    <td width="358px">
                       60 t


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                       13
                    </td>
                   <td width="157px">
                      Gross Weight
                    </td>
                    <td width="358px">
                      80 t
                     </td>
                </tr>
                <tr>
                    <td width="68px">
                       14
                    </td>
                   <td width="157px">
                    Vol. Capacity


                    </td>
                    <td width="358px">
                     71 m3


                     </td>
                </tr>
                <tr>
                    <td width="68px">
                       15
                    </td>
                   <td width="157px">
                    Material of Construction


                    </td>
                    <td width="358px">
                      IRS:M44 (Stainless Steel)


                     </td>
                </tr>
                <tr>
                    <td width="68px">
                       16
                    </td>
                   <td width="157px">
                      Bogie


                    </td>
                    <td width="358px">
                    Scheffel Bogie (HS-MK VII)


                     </td>
                </tr>
                <tr>
                    <td width="68px">
                       17
                    </td>
                   <td width="157px">
                     Coupler


                    </td>
                    <td width="358px">
One End Rotary another end Non-Rotary

                     </td>
                </tr>
                <tr>
                    <td width="68px">
                       18
                    </td>
                   <td width="157px">
                     Air Brake


                    </td>
                    <td width="358px">
                      Direct Release Air Brake System


                     </td>
                </tr>
               
            </tbody>
        </table>
        </div>
        
         <a class="read-more text" title="">Read More</a>
      
      </div>
    </div>
</div>
  <div class="content">
    <div class="left">
      <div class="product_img">
          <img src="{{ asset('assets/images//rail-3.jpg')}}" alt="">
      </div>
      <!--<div class="product_details">-->
      <!--  <h4 class="title">Woakers</h4>-->
      <!--  <p class="discription">Men's White Printed Sneakers</p>-->
      <!--  <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>-->
      <!--  <p class="other">inclusive of all taxes</p>-->
      <!--</div>-->
    </div>

    <div class="right">
      <div class="product_description">
        <h4>Bogie frame for Coaches

</h4>
        <!--<p>First Freight Car builder in India to have successfully developed and manufactured BRNA type Flat Cars fitted with Fixtures<br> for transportation of 260 m long welded Rail Panels.</p>-->
        <p><span class="highlight">Salient Features:</span>
        
        </p>
        <table class="feature-table">
            <tbody>
                <tr>
                    <td>
                        <strong>
                        Sr. No.
                        </strong>
                    </td>
                    <td>
                        <strong>
                    Description
                    </strong>
                    </td>
                    <td >
                        <strong>
                      Dimensions
                      </strong>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <strong>
                       A
                        </strong>
                    </td>
                    <td colspan="2">
                        <strong>
                   Non AC Coach Bogie


                    </strong>
                    </td>
                   
                </tr>
                <tr>
                    <td width="68px">
                        1
                    </td>
                    <td width="157px">
                     Bogie Frame Overall Length




                    </td>
                    <td width="358px">
                      4174 mm


                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        2
                    </td>
                   <td width="157px">
                   Bogie Frame Overall Width 



                    </td>
                     <td width="358px">
                2364 mm




                    </td>
                </tr>
                <tr>
                     <td width="68px">
                       3
                    </td>
                    <td width="157px">
                    Bogie Frame Overall Height 


                    </td>
                      <td width="358px">
                    736 mm




                    </td>
                </tr>
                </tbody>
                
               
               </table>
               <div class="read-more-content">
                <table class="feature-table ">
            <tbody>
                <tr>
                    <td width="68px">
                        4
                    </td>
                    <td width="157px">
                      Bogie Frame Assembly Approx Weight 




                    </td>
                     <td width="358px">
                     1.106 t



                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        5
                    </td>
                    <td width="157px">
                    Material of Construction 



                    </td>
                      <td width="358px">
                    IS:2062 E 250 Quality C with Cu



                    </td>
                </tr>
                 <tr>
                    <td>
                        <strong>
                       B
                        </strong>
                    </td>
                    <td colspan="2">
                        <strong>
                 AC Coach Bogie




                    </strong>
                    </td>
                   
                </tr>
                <tr>
                    <td width="68px">
                        1
                    </td>
                    <td width="157px">
                  Bogie Frame Overall Length 


                    </td>
                     <td width="358px">
                     4154 mm

     </td>
                </tr>
                <tr>
                    <td width="68px">
                      2
                    </td>
                   <td width="157px">
                      Bogie Frame Overall Width 

  </td>
                    <td width="358px">
                      2364 mm



                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        3
                    </td>
                   <td width="157px">
                      Bogie Frame Overall Height 




                    </td>
                    <td width="358px">
                  725 mm

    </td>
                </tr>
                <tr>
                    <td width="68px">
                       4
                    </td>
                   <td width="157px">
                   Bogie Frame Assembly Approx Weight 

  </td>
                    <td width="358px">
                        1.432 t



                    </td>
                </tr>
                <tr>
                    <td width="68px">
                        5
                    </td>
                   <td width="157px">
                     Material of Construction 


                    </td>
                    <td width="358px">
                     IS:2062 E 250 Quality C with Cu


                    </td>
                </tr>
                   
               
            </tbody>
        </table>
        </div>
        
         <a class="read-more text" title="">Read More</a>
      
      </div>
    </div>
</div>
  <div class="content">
    <div class="left">
      <div class="product_img">
          <img src="{{ asset('assets/images//rail-4.jpg')}}" alt="">
      </div>
      <!--<div class="product_details">-->
      <!--  <h4 class="title">Woakers</h4>-->
      <!--  <p class="discription">Men's White Printed Sneakers</p>-->
      <!--  <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>-->
      <!--  <p class="other">inclusive of all taxes</p>-->
      <!--</div>-->
    </div>

    <div class="right">
      <div class="product_description">
        <h4>Floor Frame assembly for Locomotives


</h4>
        <!--<p>First Freight Car builder in India to have successfully developed and manufactured BRNA type Flat Cars fitted with Fixtures<br> for transportation of 260 m long welded Rail Panels.</p>-->
        <p><span class="highlight">Salient Features:</span>
        
        </p>
        <table class="feature-table">
            <tbody>
                <tr>
                    <td>
                        <strong>
                        Sr. No.
                        </strong>
                    </td>
                    <td>
                        <strong>
                    Description
                    </strong>
                    </td>
                    <td >
                        <strong>
                      Dimensions
                      </strong>
                    </td>
                </tr>
                
                <tr>
                    <td width="68px">
                        1
                    </td>
                    <td width="157px">
                    Floor Frame Overall Length

      </td>
                    <td width="358px">
                    18206 mm

 </td>
                </tr>
                <tr>
                    <td width="68px">
                        2
                    </td>
                   <td width="157px">
                 Floor Frame Overall Width


                    </td>
                     <td width="358px">
               3082 mm


                    </td>
                </tr>
                <tr>
                     <td width="68px">
                       3
                    </td>
                    <td width="157px">
                  Floor Frame Overall Height

   </td>
                      <td width="358px">
                   950 mm





                    </td>
                </tr>
                </tbody>
                
               
               </table>
               <div class="read-more-content">
                <table class="feature-table ">
            <tbody>
                <tr>
                    <td width="68px">
                        4
                    </td>
                    <td width="157px">
                    Floor Frame Assembly Approx Weight 


                    </td>
                     <td width="358px">
                   19.2 t

  </td>
                </tr>
                <tr>
                    <td width="68px">
                        5
                    </td>
                    <td width="157px">
                  Material of Construction

   </td>
                      <td width="358px">
                   IS:2062  E 250 Quality BR & C, Sailma-350 HI, IS:5986 Fe-330 & IS:3502

    </td>
                </tr>
                      </tbody>
        </table>
        </div>
        
         <a class="read-more text" title="">Read More</a>
      
      </div>
    </div>
</div>
  </div>
 
</section>
<!-- Product:End -->
   </main>

    <div id="footer-widgets"></div>






   <script>
      $(document).ready(function () {
         $(".mob-menu button").click(function () {
            $(".navbar-collapse").slideToggle();
            $(".navbar-collapse").toggleClass("collapse");
         });
      });
   </script>
    
<script>
$('.read-more').click(function() {
        $(this).prev().slideToggle();
        if (($(this).text()) == "Read More") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    });
</script>
@endsection