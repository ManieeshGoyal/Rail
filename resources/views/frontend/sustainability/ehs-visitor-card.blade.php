@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Sustainability') !!}
@endpush
@section('body')
<div class="sub-header">
	<h2>Sustainability</h2>
</div>

<section>
    <div class="container">
        <div class="row">
        	<div class="col-12 d-flex flex-wrap">
                <h3 class="heading-two text-center mb-40 col-12">EHS Visitor card</h3>
                <iframe src="{{ asset('/images/pdf/ehs-info-card-visitor.pdf') }}" class="full-pdf"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection