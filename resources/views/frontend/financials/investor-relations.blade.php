@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Investor relations') !!}
@endpush
@section('body') 
<style>
    ul.data-list{display:none;}
    .yearWise{float:right; padding:10px;}
    .orders
    { 
    }
    .accordion-body
    {
        width: 100%;
    }
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <div class="pageContent" style="display:none;">
            <section class="py-4 bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mt-3">
                            <div class="border-l mb-4 aos-init" data-aos="fade-up">
                                <h2 class="txt-lg mb-3">Lorem Ipsum</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus elementum dui sit amet condimentum. Pellentesque vel arcu rhoncus dui ultrices eleifend ut ut purus. Duis ut enim hendrerit, fermentum nisi in, pellentesque velit.</p>
                            </div>
                            <p class="text-left mt-4 mb-5 aos-init" data-aos="fade-up"><a href="#"
                                    class="btn btn-gradient">View more</a></p>
                            <div class="row no-gutters mb-3 zoom-img">
                                <div class="col-md-6 aos-init" data-aos="fade-up">
                                       <img src="{{ asset('assets/img/vision.png')}}" class="img-fluid w-100" loading="lazy">
                                                                </div>
                                <div class="col-md-6 sustainability-h aos-init" data-aos="fade-up">
                                    <div class="bg-white p-4 h-100">
                                        <h3 class="sectionheading">Lorem Ipsum:</h3>
                                        <p>To be the most preferred and reliable provider of value in all our businesses.</p>
                                        <p class="mt-3"><a href="#" class="txt-xs">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  mt-3 mb-3">
                            <div class="row no-gutters h-100 bg-white  zoom-img">
                                <div class="col-lg-12 col-sm-6">
                                    <img alt=""
                                        src="{{ asset('assets/img/core-values.png')}}"
                                        class="img-fluid w-100 h-100" loading="lazy">
                                         
                                </div>
                                <div class="col-lg-12 col-sm-6 sustainability-v aos-init" data-aos="fade-up">
                                    <div class="bg-white px-3 pb-3 h-100">
                                        <h3 class="sectionheading mt-4">Lorem Ipsum:</h3>
                                        <p>Recognise individual's contribution in the growth and development of the Company. Treat all Jindalites with respect and dignity.</p>
                                        <p class="mt-3"><a href="#" class="txt-xs">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    <section class="all-investors py-5 ">
        <div class="container">
            <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
                @php
                    $i=0;
                @endphp
                @foreach($investorrelations as $key=> $value)
                    @if($i==0)
                        @php
                            $class = 'active';
                        @endphp
                    @endif
                    <li class="nav-item" role="presentation" id="tab-{{$i}}">
                        <a href="#tab{{$i}}">
                            <button data-id="tab-{{$i}}" class="nav-link {{$class}} " data-bs-toggle="tab" data-bs-target="#tab{{$i}}-pane" id="tab-tab{{$i}}" type="button" role="tab" aria-controls="tab{{$i}}-pane" aria-selected="true">{{$key}}</button>
                        </a>
                    </li>
                    @php $i++; $class = ''; @endphp
                @endforeach
            </ul>
            <div class="tab-content accordion py-5 mobile" id="myTabContent">
                @php
                    $i=0;
                @endphp
                @foreach($investorrelations as $kies=>$values)
                    @if($i==0)
                        @php
                            $class = 'tab-pane fade show active accordion-item';
                        @endphp
                    @endif
                    @if(count($values)>0)
                    <div class="{{$class}}" id="tab{{$i}}-pane" role="tabpanel" aria-labelledby="tab{{$i}}" tabindex="0">
                        <h2 class="accordion-header d-lg-none" id="heading{{$i}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">
                                {{$kies}}
                            </button>
                        </h2>
                        <div id="collapse{{$i}}" class="accordion-collapse collapse show  d-lg-block orders" aria-labelledby="heading{{$i}}" data-bs-parent="#myTabContent">
                            <div class="accordion-body">
                            @php
                                $year = '';
                                $yallList = '';
                                $j = 0;
                            @endphp
                            @foreach($values as $key=>$value)
                                @if(count($value)>0 && $key != '-')
                                    @php
                                        $year .= '<option value="'.$key.'" data-hideClass="list-'.$i.'" data-showId="list-'.$i.'-'.$key.'">'.$key.'</option>';
                                    @endphp
                                @endif
                            @endforeach 
                            </div>
                            @if(!empty($year)) 
                            
                            <div class="" >
                                    <select id="" class="yearWise" onchange="leaveChange('list-{{$i}}', this)"> {!! $year !!} </select>
                            </div>
                            @endif
                            <div class="accordion-body">
                            @php
                                $year = '';
                                $yallList = '';
                                $j = 0;
                            @endphp
                            @foreach($values as $key=>$value)
                                @if(count($value)>0)
                                    <ul class="data-list list-{{$i}}" id="list-{{$i}}-{{$key}}" style="display:@if($j==0) {{'block'}}  @endif"> 
                                    @foreach($value as $yearWiseData)
                                        <li><a href="{{URL::to('storage/').'/'.$yearWiseData['file']}}" target="_blank"><i class="fa fa-arrow-right"></i> {{$yearWiseData['title']}}</a></li> 
                                    @endforeach
                                    </ul> 
                                    @php 
                                        $j++;
                                    @endphp
                                @endif
                            @endforeach 
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    @php $i++; $class = 'tab-pane fade accordion-item'; @endphp
                @endforeach 
            </div>
        </div>
    </section>
         
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>-->


    <script>
    function leaveChange(control, year) { 
        jQuery("."+control).hide();
        jQuery("#"+control+'-'+year.value).show();
    }
    $(document).ready(function () {
            $(".nav-link").click(function () {
                $(this).toggleClass("active");
                $(".nav-link.active").not($(this)).removeClass("active");
                $(this).next().slideToggle("fast");
                $(".accordion-body").not($(this).next()).slideUp("fast");
            });
         var urlHash= document.location.hash;
            if (urlHash) {
                $(".nav-link").hide();
                var accordionLink = $("a[href='"+urlHash+"']");

                if (accordionLink && accordionLink.length > 0) {
                    accordionLink.closest('.nav-link.active').trigger('click');
                }
            }
    });
</script>
<script> 
    var full_url = jQuery(location).attr("href");
    var hs_val = full_url.split("#");
    if (hs_val[1] != undefined) {
            jQuery(".nav-link").removeClass("active");
            jQuery(".nav-link").attr("aria-selected", false);
            jQuery(".nav-link").attr("tabindex", "-1");
    
     		var li_id = jQuery("#tab-" + hs_val[1]).data("id");
            jQuery("li#"+li_id+" a").trigger("click");
    		jQuery("li#"+li_id+" button").trigger("click");
    } 
    
    // jQuery("select.yearWise").on('change', function() {
    //     var hideClass = jQuery(this).find(":selected").attr('data-hideClass');
    //     var showId = jQuery(this).find(":selected").attr('data-showId');
    //     jQuery("."+hideClass).hide();
    //     jQuery("#"+showId).show();
    // });
</script>



@endsection
