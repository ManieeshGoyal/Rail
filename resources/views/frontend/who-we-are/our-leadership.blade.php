@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Our Leadership') !!}
@endpush
@section('body')
 
        <!-- Header Banner-->
        <div id="header-banner" class="header-banner clearfix">
            <div id="header-banner-inner" class="container clearfix">
                <div class="header-banner-inner-wrap">                    
                    <div class="blog-standar-start">
                        <h1 class="blog-standar-start1">Who We Are</h1>
                    </div>
                    <h2 class="blog-standar-end">
                        <a href="{{ asset('/') }}" class="blog-standar-end">Home</a> |
                        
                        <span class="blog-standar-end">Leadership</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  
  
          
            <!-- ABOUT US -->
            <div class="row-about-us style-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="themesflat-spacer clearfix" data-desktop="158" data-mobile="80" data-smobile="80"></div>
                            <img class="img-team-about-us" src="{{ asset('assets/img/shortcode/about-us/about-us-left-3.jpg') }}" alt="Image">
                            <img class="img-team-about-us-2" src="{{ asset('assets/img/shortcode/about-us/about-us-left-4.jpg') }}" alt="Image">
                        </div>
                        <div class="col-md-6">
                            <div class="themesflat-spacer clearfix" data-desktop="240" data-mobile="60" data-smobile="60"></div>
                            <div class="themesflat-headings team-about-us style-2  wow fadeInUp clearfix">
                                <span class="heading-shadown-text">ABOUT US</span>
                                <h1 class="heading">TAKE ALL DATA AND THINK ABOUT IT!</h1>
                            </div>
                            <div class="about-us-wrap">
                                <div class="box-about-us">
                                    <div class="themesflat-counter" >
                                        <span class="number" data-speed="3000" data-to="90"  data-inviewport="yes" data-delimitor="1">90</span><span class="percent">%</span>
                                    </div>
                                    <div class="content">
                                        <div class="title"><a href="service-detail.html">Flexible Solutions</a> </div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit,</p>
                                    </div>           
                                </div>
                                <div class="box-about-us">
                                    <div class="themesflat-counter style-2" >
                                        <span class="number" data-speed="3000" data-to="76"  data-inviewport="yes" data-delimitor="1">76</span><span class="percent">%</span>
                                    </div>
                                    <div class="content">
                                        <div class="title"><a href="service-detail.html">Flexible Solutions</a> </div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit,</p>
                                    </div>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ABOUT US -->
            
             <!-- OUR CREATIVE TEAM -->
             <div class="row-our-team">
                <div class="container">
                    <div class="row row-our-team-inner">
                        <div class="col-md-12">
                            <div class="themesflat-spacer clearfix" data-desktop="257" data-mobile="60" data-smobile="60"></div>
                            <div class="themesflat-headings our-team style-2 text-center wow fadeInUp clearfix">
                                <span class="heading-shadown-text style-3">OUR TEAM</span>
                                <h1 class="heading">OUR LEADERS</h1>
                                <p class="sub-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed</p>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        
                        <div class="col-lg-3 col-md-6 "> 
                            <div class="box-team active wow fadeInUp"  >
                                <div class="img-overlay"> </div>
                                <img src="{{ asset('images/team/4.jpg') }}" alt="Umesh Chopra">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 ">
                            <div class="box-team-content wow fadeInDown"  >
                                <div class="box box1">
                                    <h3 class="team-tittle"><a href="team.html">Umesh Chopra</a> </h3>
                                    <span>Director</span>
                                </div>
                                <p class="text-justify">In his professional career spanning over three decades, he has worked in senior leadership roles, nationally and internationally, with leading Power & Energy companies. A trained Mechanical engineer by education, some of his previous assignments were with BHEL, GE, Reliance Energy, Jindal Power Limited and HCC. Lastly, he was working as an Independent Consultant for Power business developers and related companies in Energy and Power Sector covering all aspects of their businesses. Mr. Chopra is currently the CEO of JITF Urban Infrastructure Limited.</p>
                            </div>
                        </div> 
                        
                    </div> 
                    <div class="row">
                        <div class="col-lg-3 col-md-6 "> 
                            <div class="box-team wow fadeInDown" >
                                <div class="img-overlay"> </div>
                                <img src="{{ asset('images/team/3.jpg') }}" alt="Image">
                            </div>
                        </div>
                        
                        <div class="col-lg-9 col-md-6 ">
                            <div class="box-team-content wow fadeInDown"  >
                                <div class="box box2">
                                    <h3 class="team-tittle"><a href="team.html">Amarendra Kumar Sinha</a> </h3>
                                    <span>AVP - HR</span>
                                </div>
                                <p class="text-justify">He is a HR leader with over two decades of cross-cultural experience in  MNCs& Indian corporations with expertise in delivering sustained organizational growth in dynamic organizations, establishing & driving people architecture for growth, building employee value and achieving strategic goals. He is responsible for driving the entire spectrum of people initiatives in the organization. He has a rich experience of managing and leading teams in large & diverse global and Indian MNCs like Siemens, Schneider Electric, Goodyear Tires & Indian Hotels Company Ltd. Besides India, he has also worked in Paris & HK.
                                <br>He was awarded Most Innovative HR Tech Leader (India) in 2021 and has also accepted award for being Delhi’s Best Employer Brand on behalf of the Company in 2019.
                                <br>Besides his current role, he is also responsible for the HR functions for the WtE power plants in Guntur & Visakhapatnam (in AP) and manufacturing of railway freight wagons (at Vadodara). He is a regular speaker in professional forums and in engineering & management institute campuses.</p>
                            </div>
                        </div> 
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="box-team wow fadeInUp"  >
                                <div class="img-overlay"> </div>
                                <img src="{{ asset('images/team/2 (1).jpg') }}" alt="Image">
                            </div>
                        </div>
                        
                        <div class="col-lg-9 col-md-6 ">
                            <div class="box-team-content wow fadeInDown"  >
                                <div class="box">
                                    <h3 class="team-tittle"><a href="team.html">Sandip Dutt</a> </h3>
                                    <span> Director</span>
                                </div>
                                <p>Widely reputed for innovative solutions and breakthrough results delivered in waste to energy business, Mr. Sandip Dutt has proved himself to be an inspiring leader in every organization he has been a part of. He received his Engineering Degree in Mechanical from the Utkal University, Orissa.
                                <br> A firm believer in leading by example, Mr. Dutt has consistently driven initiatives that have raised the bar of efficacy & accountability, beating the odds of Waste to Energy Business. In his previous association with Mukand Engineers Ltd., he played a vital role in setting up a basic Oxygen Furnace in association with Russian Consortium comprising of ZSM, GIRPOMEZ and TEP. He has over two decades of experience in setting up integrated refined sugar and distillery plants, captive power plants and waste to energy plants. He is good at conceptualization of steam economy measures and attaining plant efficiency. He specially enjoys creating structure and alignment in new and unexplored areas.
                                <br> Presently he is heading the Delhi operations of JITF Urban Infrastructure Ltd. He is an imminent speaker on the issues related to Waste, Environment and Energy. He envisioned making the zero wastage WtE model.</p>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="box-team wow fadeInDown"  >
                                <div class="img-overlay"> </div>
                                <img src="{{ asset('images/team/1 (1).jpg') }}" alt="Image">
                            </div>
                        </div> 
                        
                        <div class="col-lg-9 col-md-6 ">
                            <div class="box-team-content wow fadeInDown"  >
                                <div class="box">
                                    <h3 class="team-tittle"><a href="team.html">Dheeraj Agrawal</a> </h3>
                                    <span>AGM (Project)</span>
                                </div>
                                <p>Dheeraj Agrawal, a corroborated Mechanical Engineer from Haryana. He has pursued his Bachelor of Engineering from Deemed University after completing his Diploma in Mechanical Engineering from MG Polytechnic, Hathars (Uttar Pradesh).<br>
                                With a total service in the field of project, operation and maintenance having experience of more than 20 years, he has served in numerous industries including cement, power plant and Waste to Energy. During these various duties, he has been an ace member of diverse teams in Projects, O&M, Management etc. He has given his contribution remarkably for the installation of Steam condensing turbine and back pressure turbine, and has shown his expertise in AFBC & CFBC Boiler etc., and Proficient in monitoring power plant performance, investigating & correcting abnormal conditions.<br>
                                Currently, he is leading Jindal Waste to Electricity project in India which has the capacity to generate 25 MW of electricity. The project team is working productively under his guidance and expertise.</p>
                            </div>
                        </div> 
                    </div> 

                </div><!-- /.container -->
            </div>
            <!-- END OUR CREATIVE TEAM -->

@endsection