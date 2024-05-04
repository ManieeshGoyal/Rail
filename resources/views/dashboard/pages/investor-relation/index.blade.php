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
                            <div>
                                    <select style="padding:5px 20px; border-radius:10px; background: #e1f0ff ; color:#3699FF; border:none">
                                        <option value="2012" >2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                    </select>
                                    <input style="padding:5px 20px; border-radius:10px; background: #e1f0ff ; color:#3699FF; border:none;" type="text" placeholder="search">
                            </div>
                                <div class="table-responsive">
                                    <table class="table table-vertical-center">
                                        <caption>List of {{ $pageTitle }}</caption>
                                        <thead>
                                        <tr>
                                            <th class="text-muted">Year</th>
                                            <th class="text-muted">Client Type</th>
                                            <th class="text-muted">Wagon Nos</th>
                                            <th class="text-muted">Created On</th>
                                            @if(Gate::check([$permission_update, $permission_delete, $permission_restore]))
                                                <th class="text-muted">Action</th>
                                            @endif
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($filter == 'all')
                                            @foreach($listings as $listing)
                                                <tr>
                                                    <td>
                                                        {{ $listing->years->year }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->tabs->tab_name }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->name }}
                                                    </td>
                                                    <td>
                                                        {{ date(env('DATE_FORMAT'), strtotime($listing->created_at)) }}
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
                                        @else
                                            @foreach($listings as $listing)
                                                <tr>
                                                    <td>
                                                        {{ $listing->name }}
                                                    </td>
                                                    <td>
                                                        {{ date(env('DATE_FORMAT'), strtotime($listing->created_at)) }}
                                                    </td>
                                                    <td>
                                                        @if(Gate::check([$permission_restore, $permission_delete]))
                                                            @if(Gate::check([$permission_restore]))
                                                                {!! \App\Helpers\Helper::actionIcons('restore', route($routePrefix . 'restore', $listing->id)) !!}
                                                            @endif
                                                            @if(Gate::check([$permission_delete]))
                                                                {!! \App\Helpers\Helper::actionIcons('delete', route($routePrefix . 'force-delete', $listing->id)) !!}
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