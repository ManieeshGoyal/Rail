@extends('layouts.frontend.main')

@push('header')

{!! \App\Helpers\Helper::metaTags('', 0, 'Gallery') !!}

@endpush

@section('body')

 
        <!-- Header Banner-->
        <div id="header-banner" class="header-banner clearfix">
            <div id="header-banner-inner" class="container clearfix">
                <div class="header-banner-inner-wrap">                    
                    <div class="blog-standar-start">
                        <h1 class="blog-standar-start1">Gallery</h1>
                    </div>
                    <h2 class="blog-standar-end">
                        <a href="{{ asset('/') }}" class="blog-standar-end">Home</a>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  
    
            <div class="style-2">
                <div class="container">
                            <div class="themesflat-spacer clearfix" data-desktop="92" data-mobile="50" data-smobile="92"></div>
                            <div class="themesflat-headings our-team  text-center wow fadeInUp clearfix">
                                <h1 class="heading">Our Gallery</h1> 
                            </div> 
                    <!-- <div class="col-md-12"> --> 
                        <div class="tab flat-tab">
                            <ul class="tab-title menu-tab text-center">
                                <li class="item-title active"><span>All</span> </li>
                                <li class="item-title"><span>EHS</span></li>
                                <li class="item-title"><span>Project Visit</span></li>
                                <li class="item-title"><span>SDMC</span></li>
                            </ul>
                            <div class="tab-content-wrap clearfix our-gallery">
                                <div class="tab-content">
                                    <div class="item-content All">                                                            
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/PROJECT%20VISIT%20of%20Additional%20commissioner%20of%20SDMC%20Dr.%20suman%20lata%20swroop%2024th%20dec%202021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 active " >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Fire safety training  14-07-2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Fire safety training 24-12-2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Project%20visit%20of%20hon.%20chairman%20of%20jindal%20saw%20Shri%20PR%20jindal%20ji.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Project%20visit%20of%20hon.%20chairman%20of%20jindal%20saw%20Shri%20PR%20jindal%20ji%201.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/meeting%20with%20SDMC%20director,%20engineering%20in%20chief%20&%20commissioner.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Fire Fighting Training  2021-07-15.jpeg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/PROJECT VISIT 1 of Additional commissioner of SDMC Dr. suman lata swroop 24th dec 2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/SDMC Commissioner Sh Gyanesh Bharti  Site Visit 3rd apr 2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
                                </div><!-- /.tab-content -->
                                <div class="tab-content EHS">                                                           
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Fire Fighting Training  2021-07-15.jpeg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 active " >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Fire safety training  14-07-2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Fire safety training 24-12-2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/safety week 2021.jfif')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/TBT for Covid 19.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div><!-- /.tab-content -->
                                <div class="tab-content Project Visit">
                                    <div class="item-content">                                                            
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/PROJECT VISIT 1 of Additional commissioner of SDMC Dr. suman lata swroop 24th dec 2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 active" >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Project visit by SDMC Commissioner Gyanesh Bharti  .jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/PROJECT VISIT of Additional commissioner of SDMC Dr. suman lata swroop 24th dec 2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Project visit of hon. chairman of jindal saw Shri PR jindal ji 1.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/Project visit of hon. chairman of jindal saw Shri PR jindal ji.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div><!-- /.tab-content -->
                                <div class="tab-content SDMC">
                                    <div class="item-content">      
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/meeting with SDMC director, engineering in chief & commissioner.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('assets/img/images/SDMC Commissioner Sh Gyanesh Bharti  Site Visit 3rd apr 2021.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp1.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp3.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp5.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp6.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp11.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp12.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp13.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp14.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp15.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp16.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-img style-2 "  >
                                                    <div class="img">
                                                        <img src="{{asset('images/new/pp17.jpg')}}" alt="Image">
                                                    </div>
                                                    <div class=" row-image-content" style="display:none;">
                                                        <div class="row-image-content-text">
                                                            <div><span class="tittle"> </span></div>
                                                            <div><a href="" class="heading-tittle"> </a></div> 
                                                        </div>
                                                        <div class="row-image-content-link"><a href="" class="icon"><i class="fa fa-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div><!-- /.tab-content -->
                            </div><!-- /.tab-content-wrap -->
                        </div>
                    <!-- </div> -->
                  
                    <div class="col-md-12">
                        <!--<div class="load-more text-center">-->
                        <!--    <a class="btn-load-more" href="project.html">Load More</a>-->
                        <!--</div>-->
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="135" data-mobile="135" data-smobile="135"></div>
                </div>
            </div>



@endsection