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
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-vertical-center">
                                        <caption>List of {{ $pageTitle }}</caption>
                                        <thead>
                                        <tr>
                                            <th class="text-muted">Quote</th>
                                            <th class="text-muted">Name</th>
                                            <th class="text-muted">Phone</th>
                                            <th class="text-muted">Email</th>
                                            <th class="text-muted">Message</th>
                                            <th class="text-muted">Attachments</th>
                                            <th class="text-muted">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($filter == 'all')
                                            @foreach($listings as $listing)
                                                <tr>
                                                    <td>
                                                        {{ $listing->quote }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->name }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->email }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->message }}
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('/storage/' . $listing->attachments)}}" class="mr-3" target="_blank" download>
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11" y="1" width="2" height="14" rx="1"></rect>
                                                                        <path d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        {{ date(env('DATE_FORMAT'), strtotime($listing->created_at)) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            @foreach($listings as $listing)
                                                <tr>
                                                    <td>
                                                        {{ $listing->quote }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->name }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->email }}
                                                    </td>
                                                    <td>
                                                        {{ $listing->message }}
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('/storage/' . $listing->attachments)}}" class="mr-3" target="_blank" download>
                                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11" y="1" width="2" height="14" rx="1"></rect>
                                                                        <path d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "></path>
                                                                    </g>
                                                                </svg>
                                                            </
                                                    </td>
                                                    <td>
                                                        {{ date(env('DATE_FORMAT'), strtotime($listing->created_at)) }}
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