@extends('layouts.frontend.main')

@push('header')

{!! \App\Helpers\Helper::metaTags('', 0, $pageTitle) !!}

@endpush

@section('body')

<div class="sub-header">

	<h2>Gallery</h2>

</div>



<section>

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex flex-wrap justify-content-center gallery-filter mb-20">

                <button class="btn-outline filter-button active" data-filter="all">All</button>
                @foreach($ourgallery as $key=>$values)
                    <button class="btn btn-default filter-button" data-filter="gallery{{$key}}">{{ isset($key)? $categories[array_search($key, array_column($categories, 'id'))]->name:''}}</button>
                @endforeach

            </div>

        	<div class="col-12 d-flex flex-wrap main-gallery">
        	    
                @foreach($ourgallery as $key=>$values)
                    @foreach($values as $gallery)
                        <div class="col-lg-4 col-md-6 col-sm-12 main-gallery-box filter gallery{{$key}}"> <a href="{{ asset($gallery->mediaLibrary->url) }}"> <img src="{{ asset($gallery->mediaLibrary->url) }}"> <span>{{$gallery->title}}</span></a> </div>
                    @endforeach
                @endforeach

                <div class="clear"></div>

            </div>

        </div>

    </div>

</section>



@endsection



@push('header')

<link rel="stylesheet" href="{{ asset('css/simple-lightbox.css') }}"/>

@endpush



@push('footer')

<script src="{{ asset('js/simple-lightbox.js') }}"></script>

<script>

    (function () {

        var $gallery = new SimpleLightbox('.main-gallery a', {});

    })();



    $(document).ready(function(){

        $(".filter-button").click(function(){

            var value = $(this).attr('data-filter');

            $('.filter-button').removeClass('active');

            $(this).addClass('active');

            

            if(value == "all") {

                $('.filter').show();

            }

            else {

                $(".filter").not('.'+value).hide();

                $('.filter').filter('.'+value).show();

            }

        });

    });

</script>

@endpush