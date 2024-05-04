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
                                    {!! \App\Helpers\Input::selectField('year_id', 'Select Year', TRUE, $investorRelationYear, '', 'id', 'year',$listing->year_id) !!}
                                    {!! \App\Helpers\Input::selectField('tab_id', 'Select Tab', TRUE, $investorRelationTab, '', 'id', 'tab_name',$listing->tab_id) !!}
                                    {!! \App\Helpers\Input::textField('name', 'Wagon Nos', TRUE, '', $listing->name) !!}
                                    
                                    {!! \App\Helpers\Input::textField('owning_railway', 'Owning Railway', TRUE, '', $listing->owning_railway) !!}
                                    {!! \App\Helpers\Input::textField('wagon_type', 'Wagon Type', TRUE, '', $listing->wagon_type) !!}
                                    {!! \App\Helpers\Input::textField('manufacturing_unit', 'Manufacturing Unit', TRUE, '', $listing->manufacturing_unit) !!}
                                    {!! \App\Helpers\Input::textField('dm_no', 'DM No', TRUE, '', $listing->dm_no) !!}
                                    {!! \App\Helpers\Input::dateField('dm_date', 'DM Date', TRUE, '', $listing->dm_date) !!}
                                    
                                    {!! \App\Helpers\Input::file('attachments', 'PDF Attachments', False, '.pdf', 1) !!}
                                    @if(!empty($listing->attachments))
                                    <p>{!! \App\Helpers\Helper::actionIcons('download', asset('/storage/' . $listing->attachments)) !!}</p>
                                    @endif
                                    <div class="card-footer">
                                        @csrf
                                        @method('PATCH')
                                        <button class="mr-2 btn btn-primary btn-primary" name="status_id" value="1">Update</button>
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