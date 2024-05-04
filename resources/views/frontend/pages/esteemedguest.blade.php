@extends('layouts.frontend.main')

@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Esteemed guests') !!}
@endpush

@section('body')
<div class="sub-header">
    <h2>Who We Are</h2>
</div>

<section>
	<div class="container">
		<div class="row">
            <div class="col-12 mb-40">
                <h2 class="text-center">List of our Esteemed guests</h2>
            </div>
		    @foreach($esteemedguests as $key=>$values)
			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>{{$key}}</li>
						@if(count($values)>0)
							@foreach($values as $value)
								<li><span>{{$value->name}}</span> {{$value->designation}}</li>
							@endforeach
						@endif
					</ul>
				</div>
			</div>
		    @endforeach
		</div>
	</div>
</section>

@endsection