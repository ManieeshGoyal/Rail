@extends('layouts.dashboard.main')
@section('title', 'Edit ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, FALSE, FALSE, $searchModel) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route($routePrefix . 'update', $listing->id) }}" method="POST" autocomplete="off">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    {!! \App\Helpers\Input::textField('name', 'Full Name', TRUE, '', $listing->name) !!}
                                    {!! \App\Helpers\Input::emailField('email', 'E-Mail', TRUE, '', $listing->email, 'disable') !!}
                                    {!! \App\Helpers\Input::selectField('roles', 'Roles', FALSE, $roles, 'select-2', 'id', 'name', $listing->role_id, [$listing->id]) !!}
                                    
                                    <div class="form-group">
                                        <label for="featured">Create Password?</label>
                                        <span class="switch switch-icon">
                                            <label>
                                                <input type="checkbox" class="form-control create_password" name="create_password" {{ old('create_password') ? 'checked' : '' }} value="yes">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="row password" style="display: {{ old('create_password') ? '' : 'none' }}">
                                        <div class="col-md-6">
                                            {!! \App\Helpers\Input::password('password', 'Password', FALSE) !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! \App\Helpers\Input::password('password_confirmation', 'Confirm Password', FALSE) !!}
                                        </div>
                                    </div>
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
@section('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('.create_password').on('change', function () {
            var $this = $(this);
            // not checked
            $('.password').hide();
            // checked
            if ($this.prop('checked') == true) {
                $('.password').show();
            }
        });
    </script>
@endsection
