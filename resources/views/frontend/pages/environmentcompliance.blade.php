@extends('layouts.frontend.main')

@push('header')

{!! \App\Helpers\Helper::metaTags('', 0, 'Sustainability') !!}

@endpush

@section('body')

   
        <!-- Header Banner-->
        <div id="header-banner" class="header-banner clearfix">
            <div id="header-banner-inner" class="container clearfix">
                <div class="header-banner-inner-wrap">                    
                    <div class="blog-standar-start">
                        <h1 class="blog-standar-start1">Sustainability</h1>
                    </div>
                    <h2 class="blog-standar-end">
                        <a href="{{ asset('/') }}" class="blog-standar-end">Home</a> |
                        
                        <span class="blog-standar-end">EHS Compliance</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap" class="container">
                <div id="site-contents" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="item-content All">  
            <div class="row">
            	    <div class="col-12 filter mb-30">
               <div class="col-lg-6 d-flex p-0">

                    <form action="" method="GET" class="col-12 d-flex p-0">

                        <select class="input-control" name="type" required>

                            <option value="1" {{($type==1)? 'selected':''}}>Continuous online Monitoring report</option>

                            <option value="2" {{($type==2)? 'selected':''}}>Plant operation Data</option>

                            <option value="3" {{($type==3)? 'selected':''}}>Third party test report</option>

                        </select>

                        <select class="input-control" name="year" required>

                            <option hidden="hidden">Year</option>

                            <option value="1" {{($year==1)? 'selected':''}}>2019-20</option>

                            <option value="2" {{($year==2)? 'selected':''}}>2020-21</option>

                            <option value="3" {{($year==3)? 'selected':''}}>2021-22</option>

                        </select>

                        <button class="btn-fill">Filter</button>

                    </form>

                </div>

            </div>

            <div class="col-12 d-flex flex-wrap table-responsive">

                <table class="table table-bordered table-striped environment">

                    <tr>

                        <th style="width:65px;">S. No.</th>

                        <th>Name</th>

                        <th>Date</th>

                        <th>PDF Attachment</th>

                        <th>Remarks</th>

                    </tr>

                    @php

                    $i=0;

                    @endphp

                    @if(count($environmentcompliance)>0)

                        @foreach($environmentcompliance as $compliance)

                        <tr>

                            <td>{{++$i}}</td>

                            <td>{{$compliance->name}}</td>

                            <td>{{ date('F, d Y', strtotime($compliance->published_date)) }}</td>

                            <td><a href="{{asset('/storage/' . $compliance->attachments)}}" class="pdf-button" target="_blank"> view <i class="fa fa-file-pdf-o"></i></a></td>

                            <td>{{$compliance->remarks}}</td>

                        </tr>

                        @endforeach

                        @else

                        <tr>

                            <td colspan="5">Record Not Found</td>

                        </tr>

                    @endif

                </table>

            </div>

        </div>     
                        </div>
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->


@endsection