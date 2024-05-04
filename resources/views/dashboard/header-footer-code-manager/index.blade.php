@extends('layouts.dashboard.main')
@section('title', 'List ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        @if(Gate::check([$permission_create]))
            {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, TRUE, FALSE, $searchModel) !!}
        @else
            {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, TRUE, TRUE, $searchModel) !!}
        @endif
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-custom gutter-b card-stretch">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">{{ \Illuminate\Support\Str::plural($pageTitle) }}</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-vertical-center">
                                        <caption>List of {{ $pageTitle }}</caption>
                                        <thead>
                                        <tr>
                                            <th class="text-muted">Name</th>
                                            <th class="text-muted">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($filter == 'all')
                                            @foreach($listings as $listing)
                                                <tr>
                                                    <td>
                                                        {{ $listing->name }}
                                                    </td>
                                                    <td>      
                                                        @if(Gate::check([$permission_update, $permission_delete]))
                                                            @if(Gate::check([$permission_update]))
                                                                {!! \App\Helpers\Helper::actionIcons('edit', route($routePrefix . 'edit', $listing->id)) !!}
                                                            @endif
                                                            @if(Gate::check([$permission_delete]))
                                                                {!! \App\Helpers\Helper::actionIcons('delete', route($routePrefix . 'destroy', $listing->id)) !!}
                                                            @endif
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                    {{ $listings->appends(request()->except('page'))->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection