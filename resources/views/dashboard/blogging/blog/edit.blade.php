@extends('layouts.dashboard.main')
@section('title', 'Edit ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, FALSE, FALSE, $searchModel) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route($routePrefix . 'update', $listing->id) }}" method="POST">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    {!! \App\Helpers\Input::textField('title', 'Title', TRUE, '', $listing->title) !!}
                                    {!! \App\Helpers\Input::textAreaField('description', 'Description', TRUE, 'tiny-mce', $listing->description) !!}
                                    {!! \App\Helpers\Input::inputTagify('categories', 'Categories', TRUE, TRUE, $listing->blogCategories, $blogCategories) !!}
                                    {!! \App\Helpers\Input::image('image', 'Featured Image', TRUE, $listing->media_library_id, 1) !!}
                                    {!! \App\Helpers\Helper::metaFields(\App\Models\Blog::class, $listing->id) !!}
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
    @include('layouts.dashboard.include.media-library')
@endsection
