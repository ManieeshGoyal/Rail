@extends('layouts.dashboard.main')
@section('title', 'Dashboard')
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="d-flex flex-column-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    <ul class="dashboard-tabs nav nav-pills row row-paddingless m-0 p-0 flex-column flex-sm-row" role="tablist">
                                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                                            <a href="{{ route('dashboard.career-management.job-posting.index') }}" class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center">
                                                <span class="nav-icon py-2 w-auto">
                                                    <h1>{{ number_format($totalJobs) }}</h1>
                                                </span>
                                                <span class="nav-text font-size-lg py-2 font-weight-bold text-center">Total Jobs</span>
                                            </a>
                                        </li>
                                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                                            <a href="{{ route('dashboard.career-management.candidate.index') }}" class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center">
                                                <span class="nav-icon py-2 w-auto">
                                                    <h1>{{ number_format($totalCandidates) }}</h1>
                                                </span>
                                                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Total Candidates</span>
                                            </a>
                                        </li>
                                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                                            <a href="{{ route('dashboard.blogging.blog.index') }}" class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center">
                                                <span class="nav-icon py-2 w-auto">
                                                    <h1>{{ number_format($totalBlogs) }}</h1>
                                                </span>
                                                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Total Blogs</span>
                                            </a>
                                        </li>
                                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                                            <a href="{{ route('dashboard.blogging.blog-category.index') }}" class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center">
                                                <span class="nav-icon py-2 w-auto">
                                                    <h1>{{ number_format($totalBlogCategories) }}</h1>
                                                </span>
                                                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Total Categories</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">Jobs</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-vertical-center">
                                            <caption>List of jobs</caption>
                                            <thead>
                                            <tr>
                                                <th class="text-muted">Name</th>
                                                <th class="text-muted">Description</th>
                                                <th class="text-muted">Candidates</th>
                                                <th class="text-muted">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(is_iterable($recentJobs))
                                                @foreach($recentJobs as $recentJob)
                                                    <tr>
                                                        <td>
                                                            {{ $recentJob->name }}
                                                        </td>
                                                        <td>
                                                            {{ \App\Helpers\Helper::truncateStringToLastPeriod(strip_tags($recentJob->description), 50, 20) }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('dashboard.career-management.job-posting.candidate.index', $recentJob->id) }}">{{ $recentJob->candidates ? number_format($recentJob->candidates->count()) : 0 }}</a>
                                                        </td>
                                                        <td>
                                                            {!! \App\Helpers\Helper::actionIcons('edit', route('dashboard.career-management.job-posting.edit', $recentJob->id)) !!}
                                                            {!! \App\Helpers\Helper::actionIcons('delete', route('dashboard.career-management.job-posting.destroy', $recentJob->id)) !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">Candidates</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-vertical-center">
                                            <caption>List of candidates</caption>
                                            <thead>
                                            <tr>
                                                <th class="text-muted">Name</th>
                                                <th class="text-muted">Email</th>
                                                <th class="text-muted">Phone</th>
                                                <th class="text-muted">Job</th>
                                                <th class="text-muted">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(is_iterable($recentCandidates))
                                                @foreach($recentCandidates as $recentCandidate)
                                                    <tr>
                                                        <td>
                                                            {{ $recentCandidate->name }}
                                                        </td>
                                                        <td>
                                                            {{ $recentCandidate->email }}
                                                        </td>
                                                        <td>
                                                            {{ $recentCandidate->phone }}
                                                        </td>
                                                        <td>
                                                            {{ $recentCandidate->jobPosting->name }}
                                                        </td>
                                                        <td>
                                                            {!! \App\Helpers\Helper::actionIcons('download', asset('/storage/' . $recentCandidate->resume)) !!}
                                                            {!! \App\Helpers\Helper::actionIcons('delete', route('dashboard.career-management.candidate.destroy', $recentCandidate->id)) !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">Blogs</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-vertical-center">
                                            <caption>List of blogs</caption>
                                            <thead>
                                            <tr>
                                                <th class="text-muted">Title</th>
                                                <th class="text-muted">Description</th>
                                                <th class="text-muted">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(is_iterable($recentBlogs))
                                                @foreach($recentBlogs as $recentBlog)
                                                    <tr>
                                                        <td>
                                                            {{ $recentBlog->title }}
                                                        </td>
                                                        <td>
                                                            {{ \App\Helpers\Helper::truncateStringToLastPeriod(strip_tags($recentBlog->description), 50, 20) }}
                                                        </td>
                                                        <td>
                                                            {!! \App\Helpers\Helper::actionIcons('edit', route('dashboard.blogging.blog.edit', $recentBlog->id)) !!}
                                                            {!! \App\Helpers\Helper::actionIcons('delete', route('dashboard.blogging.blog.destroy', $recentBlog->id)) !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">Blog Categories</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-vertical-center">
                                            <caption>List of blog categories</caption>
                                            <thead>
                                            <tr>
                                                <th class="text-muted">Name</th>
                                                <th class="text-muted">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(is_iterable($recentBlogCategories))
                                                @foreach($recentBlogCategories as $recentBlogCategory)
                                                    <tr>
                                                        <td>
                                                            {{ $recentBlogCategory->name }}
                                                        </td>
                                                        <td>
                                                            {!! \App\Helpers\Helper::actionIcons('edit', route('dashboard.blogging.blog-category.edit', $recentBlogCategory->id)) !!}
                                                            {!! \App\Helpers\Helper::actionIcons('delete', route('dashboard.blogging.blog-category.destroy', $recentBlogCategory->id)) !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection