@extends('layouts.dashboard.main')
@section('title', 'List ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, FALSE, FALSE) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-custom gutter-b card-stretch">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">{{ \Illuminate\Support\Str::plural($pageTitle) }}</h3>
                                </div>
                                <div class="card-toolbar">
                                    <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 {{ $filter == 'all' ? 'active' : '' }}" href="?filter=all">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 {{ $filter == 'trash' ? 'active' : '' }}" href="?filter=trash">Trash</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-vertical-center">
                                        <caption>List of {{ $pageTitle }}</caption>
                                        <thead>
                                        <tr>
                                            <th class="text-muted">Applied On</th>
                                            <th class="text-muted">Name</th>
                                            <th class="text-muted">Email</th>
                                            <th class="text-muted">Phone</th>
                                            <th class="text-muted">Job</th>
                                            <th class="text-muted" width="15%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($filter == 'all')
                                            @foreach($listings as $listing)
                                                <tr>
                                                    <td>
                                                        {{ date(env('DATE_FORMAT'), strtotime($listing->created_at)) }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->name }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->email }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->phone }}
                                                    </td>
                                                    <td>
                                                        {{ isset($listing->jobPosting->name)? $listing->jobPosting->name:'' }}
                                                    </td>
                                                    <td>
                                                        {!! \App\Helpers\Helper::actionIcons('download', asset('/storage/' . $listing->resume)) !!}
                                                        @if(Gate::check([$permission_delete]))
                                                           {!! \App\Helpers\Helper::actionIcons('delete', route($routePrefix . 'destroy', $listing->id)) !!}
                                                        @endif
                                                    </td>
                                            @endforeach
                                        @else
                                            @foreach($listings as $listing)
                                                <tr>
                                                    <td>
                                                        {{ date(env('DATE_FORMAT'), strtotime($listing->created_at)) }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->name }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->email }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->phone }}
                                                    </td>
                                                    <td>
                                                        {{ isset($listing->jobPosting->name)? $listing->jobPosting->name:'' }}
                                                    </td>
                                                    <td>
                                                        {!! \App\Helpers\Helper::actionIcons('download', asset('/storage/' . $listing->resume)) !!}
                                                        @canany(['restore-candidates'])
                                                        {!! \App\Helpers\Helper::actionIcons('restore', route($routePrefix . 'restore', $listing->id)) !!}
                                                        @endcanany
                                                        @canany(['delete-candidates'])
                                                        {!! \App\Helpers\Helper::actionIcons('delete', route($routePrefix . 'force-delete', $listing->id)) !!}
                                                        @endcanany
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