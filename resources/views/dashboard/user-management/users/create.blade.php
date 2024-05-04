@extends('layouts.dashboard.main')
@section('title', 'Create ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, FALSE, FALSE, $searchModel) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route($routePrefix . 'store') }}" method="POST" autocomplete="off">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    {!! \App\Helpers\Input::textField('name', 'Full Name', TRUE) !!}
                                    {!! \App\Helpers\Input::emailField('email', 'E-Mail', TRUE) !!}
                                    {!! \App\Helpers\Input::selectField('roles', 'Roles', FALSE, $roles, 'select-2') !!}
                                    <div class="row password">
                                        <div class="col-md-6">
                                            {!! \App\Helpers\Input::password('password', 'Password', TRUE) !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! \App\Helpers\Input::password('password_confirmation', 'Confirm Password', TRUE) !!}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        @csrf
                                        <button class="mr-2 btn btn-primary btn-primary" name="status_id" value="1">Save</button>
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
