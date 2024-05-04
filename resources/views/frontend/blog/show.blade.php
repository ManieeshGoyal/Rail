@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags(\App\Models\Blog::class, $blog->id, $blog->title, $blog->description, '') !!}
@endpush
@section('body')
        <!-- Header Banner-->
        <div id="header-banner" class="header-banner clearfix">
            <div id="header-banner-inner" class="container clearfix">
                <div class="header-banner-inner-wrap">                    
                    <div class="blog-standar-start">
                        <h1 class="blog-standar-start1">{{ $blog->title }}</h1>
                    </div>
                    <h2 class="blog-standar-end">
                        <a href="{{ asset('/') }}" class="blog-standar-end">Home</a> |
                        <a href="{{ asset('/blog') }}" class="blog-standar-end">Blog</a> |
                        
                        <span class="blog-standar-end">{{ $blog->title }}</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap" class="container">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <article class="hentry data-effect">
                            <div class="post-media  clerafix">
                                <img src="{{ asset($blog->mediaLibrary->url) }}" alt="Image">                         
                            </div><!-- /.post-media -->

                            <div class="post-content-wrap clearfix">
                                <div class="post-meta">
                                    <div class="post-meta-content">
                                        <div class="post-meta-content-inner">
                                            <span class="post-by-author item">user<span class="inner"><a href="#"> BY ADMIN</a></span></span>
                                            <span class="post-date item"><span class="inner"><span class="entry-date">{{ date('d F, Y', strtotime($blog->created_at)) }}</span></span></span>
                                        </div>
                                    </div>
                                </div><!-- /.post-meta -->                                
                                <h6 class="post-title-detail">
                                    <span class="post-title-inner">
                                        {{ $blog->title }}
                                    </span>
                                </h6><!-- /.post-title -->

                                <div class="post-content ">
                                    {!! $blog->description !!}
                                </div><!-- /.post-excerpt --> 
                                

                            </div><!-- /.post-content-wrap -->
                        </article><!-- /.hentry -->       
 
                      
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
                <div id="sidebar">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                    <div id="inner-sidebar" class="inner-content-wrap">
                        
                        <div class="widget widget_search">
                            <h3 class="widget-title"><span>Search</span></h3>
                            <form action="#" method="get" role="search" class="search-form style-1">
                                <input type="search" class="search-field" placeholder="Search here" value="" name="s" title="Search for">
                                <button class="search-submit" type="submit" title="Search">Search</button>
                            </form>
                        </div><!-- /.widget_search -->

                        <div class="widget widget_category">
                            <h3 class="widget-title"><span>Category</span></h3>
                            <ul class="list-category">
                                <li><a href="blog.html">Tempor lorem interdum</a></li>
                                <li><a href="blog.html">Auctor mattis lacus </a></li>
                                <li><a href="blog.html">Dolor proin </a></li>
                                <li><a href="blog.html">Pharetra amet </a></li>
                                <li><a href="blog.html">Nullam dolor gravida </a> </li>
                            </ul>
                        </div><!-- /.widget_category -->

                        <div class="widget widget_recent_news">
                            <h3 class="widget-title"><span>Recent News</span></h3>
                            <ul class="lastest-posts ">
                                <li class="">
                                    <div class="thumb data-effect-item has-effect-icon ">
                                        <img src="assets/img/post/recent-new-1.jpg" alt="Image">
                                    </div>
                                    <div class="text">
                                        <h4><a href="blog-detail.html">Integer at faucibus urna. Nullam condimentum</a></h4>
                                        <span class="post-date"><span class="entry-date">15 October</span></span>
                                    </div>                                    
                                </li>
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon">
                                        <img src="assets/img/post/recent-new-2.jpg" alt="Image">
                                        <div class="elm-link">
                                            <a href="blog-detail.html" class="icon-2"></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h4><a href="blog-detail.html">Nunc scelerisque tincidunt estibulum</a></h4>
                                        <span class="post-date"><span class="entry-date">21 July</span></span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="thumb data-effect-item has-effect-icon" >
                                        <img src="assets/img/post/recent-new-3.jpg" alt="Image">

                                    </div>
                                    <div class="text">
                                        <h4><a href="blog-detail.html">Cras eu elit congue, plac erat duicidunt nisl</a></h4>
                                        <span class="post-date"><span class="entry-date">21 December</span></span>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.widget_recent_news -->

                        <div id="widget-banner" class="widget-banner clearfix">
                            <div id="widget-banner-inner" class="container clearfix">
                                <div class="widget-banner-inner-wrap">                    
                                    <h5 class="your-headline-here">YOUR HEADLINE HERE</h5>
                                <div class="btn your-headline-here">
                                    <a href="contact.html">Get A Quote</a>
                                </div>             
                                </div><!-- /.header-banner-inner-wrap -->
                            </div><!-- /widget-banner-inner -->            
                        </div><!-- /.widget_your-headline-here -->
                    </div>
                </div><!-- /#sidebar -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->
 

@endsection