@extends('layouts.dashboard.main')
@section('title', 'Edit ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, FALSE, FALSE, $searchModel) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route($routePrefix . 'update', $listing->id) }}" method="POST" enctype="multipart/form-data">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    {!! \App\Helpers\Input::selectField('compliance_type', 'Compliance Type', TRUE, $compliance_type, 'select-2', 'id', 'name', $listing->compliance_type, [$listing->id]) !!}
                                    {!! \App\Helpers\Input::selectField('year', 'Year', TRUE, $years, 'select-2', 'id', 'name', $listing->year, [$listing->id]) !!}
                                    {!! \App\Helpers\Input::textField('name', 'Attachment Name', TRUE, '', $listing->name) !!}
                                    {!! \App\Helpers\Input::dateField('published_date', 'Published Date', TRUE, '', $listing->published_date) !!}
                                    {!! \App\Helpers\Input::file('attachments', 'PDF Attachments', False, '.pdf', 1) !!}
                                    <p>{!! \App\Helpers\Helper::actionIcons('download', asset('/storage/' . $listing->attachments)) !!}</p>
                                    {!! \App\Helpers\Input::textAreaField('remarks', 'Remarks', FALSE, '', $listing->remarks) !!}
                                    <div class="card-footer">
                                        @csrf
                                        @method('PATCH')
                                        <button class="mr-2 btn btn-primary btn-primary" name="status_id" value="1">Update</button>
                                        <button class="mr-2 btn btn-primary btn-primary" name="status_id" value="2">Draft</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection