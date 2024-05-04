@extends('layouts.dashboard.main')
@section('title', 'Create ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, FALSE, FALSE, $searchModel) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route($routePrefix . 'store') }}" method="POST" enctype="multipart/form-data">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    {!! \App\Helpers\Input::selectField('compliance_type', 'Compliance Type', TRUE, $compliance_type, 'select-2') !!}
                                    {!! \App\Helpers\Input::selectField('year', 'Year', TRUE, $years, 'select-2') !!}
                                    {!! \App\Helpers\Input::textField('name', 'Attachment Name', TRUE) !!}
                                    {!! \App\Helpers\Input::dateField('published_date', 'Published Date', TRUE) !!}
                                    {!! \App\Helpers\Input::file('attachments', 'PDF Attachments', TRUE, '.pdf', 1) !!}
                                    {!! \App\Helpers\Input::textAreaField('remarks', 'Remarks', FALSE) !!}
                                    <div class="card-footer">
                                        @csrf
                                        <button class="mr-2 btn btn-primary btn-primary" name="status_id" value="1">Save</button>
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