@extends('layouts.dashboard.main')
@section('title', 'SEO')
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader('SEO', 0, '', FALSE, TRUE) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route($route . 'store') }}" method="POST" enctype="multipart/form-data">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    @csrf
                                    @foreach($models as $model)
                                        <div class="row">
                                            <div class="col-md-2">
                                                {!! \App\Helpers\Input::checkbox('models[' . $model->id . '][model]', preg_replace('/([A-Z])/s',' $1', $model->name), $model->id, FALSE, '', $model->is_active) !!}
                                            </div>
                                            <div class="col-md-2">
                                                {!! \App\Helpers\Input::textField('models[' . $model->id . '][url]', 'URL', FALSE, '', $model->url_prefix ) !!}
                                            </div>
                                            <div class="col-md-2">
                                                {!! \App\Helpers\Input::textField('models[' . $model->id . '][meta_title]', 'Meta Title', FALSE, '', $model->meta_title ) !!}
                                            </div>
                                            <div class="col-md-2">
                                                {!! \App\Helpers\Input::textField('models[' . $model->id . '][meta_description]', 'Meta Description', FALSE, '', $model->meta_description ) !!}
                                            </div>
                                            <div class="col-md-2">
                                                {!! \App\Helpers\Input::textField('models[' . $model->id . '][meta_keywords]', 'Meta Keywords', FALSE, '', $model->meta_keywords ) !!}
                                            </div>
                                            <div class="col-md-2">
                                                {!! \App\Helpers\Input::textField('models[' . $model->id . '][seperator]', 'Seperator', FALSE, '', $model->seperator ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-footer">
                                    @if(Gate::check([$permission_update]))
                                    @csrf
                                    <button class="mr-2 btn btn-primary btn-primary">Save</button>
                                    <a class="btn btn-info" href="{{ route('dashboard.seo.sitemap.create') }}">Sitemap</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection