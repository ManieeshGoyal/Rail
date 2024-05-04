@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Location Advantage') !!}
@endpush
@section('body')

    <section class="about-banner">
        <div>
            <div class="container">
                <h2 class="text-white pb-2 text-center">Location Advantage</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center ">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Location Advantage</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    
    
    <section class="vision-mission">
        <div class="container">
            <div class="row align-items-center">
         
            </div>
        </div>
    </section>
    
@endsection