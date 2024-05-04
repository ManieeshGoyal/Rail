<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Candidate;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public $routePrefix;
    public $viewPrefix;
    public $pageTitle;
    public $listings;
    public $searchModel;

    public function __construct(Request $request) {
        $this->routePrefix = 'dashboard.index';
        $this->viewPrefix = 'dashboard.index';
        $this->pageTitle = 'Dashboard';
        $this->searchModel = 'Dashboard';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $totalJobs = JobPosting::count();
        $totalCandidates = Candidate::count();
        $totalBlogs = Blog::count();
        $totalBlogCategories = BlogCategory::count();

        $recentJobs = JobPosting::latest()->limit(6)->get();
        $recentCandidates = Candidate::latest()->limit(6)->get();
        $recentBlogs = Blog::latest()->limit(6)->get();
        $recentBlogCategories = BlogCategory::latest()->limit(6)->get();

        return view($this->viewPrefix, [
            'totalJobs' => $totalJobs,
            'totalCandidates' => $totalCandidates,
            'totalBlogs' => $totalBlogs,
            'totalBlogCategories' => $totalBlogCategories,
            'recentJobs' => $recentJobs,
            'recentCandidates' => $recentCandidates,
            'recentBlogs' => $recentBlogs,
            'recentBlogCategories' => $recentBlogCategories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
