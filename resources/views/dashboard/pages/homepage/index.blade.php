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
                                    {!! \App\Helpers\Input::textField('heading', 'Heading', TRUE, '', $listing->heading) !!}
                                    {!! \App\Helpers\Input::textField('subheading', 'Heading', TRUE, '', $listing->subheading) !!}
                                    {!! \App\Helpers\Input::textAreaField('description', 'Description', FALSE, 'tiny-mce', $listing->description) !!}
                                    {!! \App\Helpers\Input::textAreaField('video_frame', 'Video Frame', FALSE, '', $listing->video_frame) !!}
                                    
                                    
                                    <div class="form-group">
                                        <label for="featured">Popup Setting</label>
                                        <span class="switch switch-icon">
                                            <label>
                                                <input type="checkbox" class="form-control popup_status" name="popup_status" {{ old('popup_status') ? 'checked' : '' }} value="yes" {{($listing->popup_status=='1')? 'checked':''}}>
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="row password" style="display: {{ old('popup_status') ? '' : 'none' }}  {{($listing->popup_status=='1')? 'block':''}}">
                                        <div class="col-md-12">
                                            {!! \App\Helpers\Input::textAreaField('popup_content', 'Popup Content', FALSE, 'tiny-mce', $listing->popup_content) !!}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        @if(Gate::check([$permission_update]))
                                            @csrf
                                            @method('PATCH')
                                            <button class="mr-2 btn btn-primary btn-primary" name="status_id" value="1">Update</button>
                                        @endif
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
        $('.popup_status').on('change', function () {
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