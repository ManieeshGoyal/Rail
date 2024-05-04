@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Financials - Balance Sheets') !!}
@endpush
@section('body')
<div class="sub-header">
	<h2>Who We Are</h2>
</div>

<section>
    <div class="container">
        <div class="row">
        	<div class="col-12 mb-20">
                <h3 class="heading-two text-center">Financials - Balance Sheets</h3>
            </div>

            <div class="col-12 d-flex flex-wrap">
                @foreach($balancesheets as $balancesheet)
                <div class="col-md-4 balance-sheet-box mb-20 mt-10">
                    <div class="col-12 balance-sheet-box-in">
                        <i class="fa fa-file-pdf-o"></i>
                        <h4>{{$balancesheet->name}}</h4>  
                        <a href="{{ asset('/storage/' . $balancesheet->attachments) }}" target="_blank" class="btn-fill small">View Sheet</a>
                        <a href="{{ asset('/storage/' . $balancesheet->attachments) }}" target="_blank" class="btn-fill small" download>Download Sheet</a>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12 mt-40">
                        {{ $balancesheets->links() }}
                </div>
            </div>

        </div>
    </div>
</section>

@endsection