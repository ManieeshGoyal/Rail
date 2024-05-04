@extends('layouts.dashboard.main')
@section('title', 'List ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, 0, '', FALSE, TRUE) !!}
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
                                        <caption>List of {{ $pageTitle }} Candidates</caption>
                                        <thead>
                                        <tr>
                                            <th class="text-muted">Applied On</th>
                                            <th class="text-muted">Name</th>
                                            <th class="text-muted">Email</th>
                                            <th class="text-muted">Phone</th>
                                            <th class="text-muted">Job</th>
                                            <th class="text-muted">Job</th>
                                        </tr>
                                        </thead>
                                        <tbody>
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
                                                </td>
                                            </tr>
                                        @endforeach
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