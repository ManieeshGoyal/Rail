@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Blog') !!}
@endpush
@section('body')
    <div class="sub-header">
        <h2>Blog Posts</h2>
    </div>
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap p-0">
                    @foreach($blogs as $blog)
                        @if($loop->iteration <= 2 )
                            <div class="col-lg-3 blog-text-box">
                                <div class="blog-text-box-in">
                                    <h2>
                                        <span>{{ date('d', strtotime($blog->created_at)) }}</span>
                                        <span>{{ date('M', strtotime($blog->created_at)) }}
                                            <br>{{ date('Y', strtotime($blog->created_at)) }}</span>
                                    </h2>
                                    <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                    <ul>
                                        <li>{{ $blog->blogCategories->first()->name}}</li>
                                        <li>4 Comments</li>
                                    </ul>
                                    <p>{{ \App\Helpers\Helper::truncateStringToLastPeriod(strip_tags($blog->description), 90, 40) }}</p>
                                </div>
                            </div>
                            <div class="col-lg-3 blog-mg-box right">
                                <div style="background-image: url('{{ asset($blog->mediaLibrary->url) }}')"></div>
                            </div>
                        @else
                            <div class="col-lg-3 blog-mg-box left">
                                <div style="background-image: url('{{ asset($blog->mediaLibrary->url) }}')"></div>
                            </div>
                            <div class="col-lg-3 blog-text-box">
                                <div class="blog-text-box-in">
                                    <h2>
                                        <span>{{ date('d', strtotime($blog->created_at)) }}</span>
                                        <span>{{ date('M', strtotime($blog->created_at)) }}
                                            <br>{{ date('Y', strtotime($blog->created_at)) }}</span>
                                    </h2>
                                    <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                    <ul>
                                        <li>{{ $blog->blogCategories->first()->name}}</li>
                                        <li>4 Comments</li>
                                    </ul>
                                    <p>{{ \App\Helpers\Helper::truncateStringToLastPeriod(strip_tags($blog->description), 90, 40) }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-md-12 mt-40">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection