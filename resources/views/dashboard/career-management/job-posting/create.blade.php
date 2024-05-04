@extends('layouts.dashboard.main')
@section('title', 'Create ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, FALSE, FALSE, $searchModel) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route($routePrefix . 'store') }}" method="POST">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    {!! \App\Helpers\Input::textField('name', 'Name', TRUE) !!}
                                    {!! \App\Helpers\Input::textAreaField('description', 'Description', TRUE, 'tiny-mce') !!}
                                    {!! \App\Helpers\Helper::metaFields(\App\Models\JobPosting::class) !!}
                                <div class="card-footer">
                                    @csrf
                                    <button class="mr-2 btn btn-primary btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.dashboard.include.media-library')
@endsection
