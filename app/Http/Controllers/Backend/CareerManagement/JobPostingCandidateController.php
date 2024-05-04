<?php

namespace App\Http\Controllers\Backend\CareerManagement;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobPostingCandidateController extends Controller {
    public function __construct() {
        $this->viewPrefix = 'dashboard.career-management.job-posting-candidate.';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(JobPosting $jobPosting) {
        return view($this->viewPrefix . 'index', [
            'listings' => $jobPosting->candidates()->latest()->paginate(20),
            'pageTitle' => $jobPosting->name,
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
     * @param  \App\Models\JobPosting $jobPosting
     *
     * @return \Illuminate\Http\Response
     */
    public function show(JobPosting $jobPosting) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPosting $jobPosting
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPosting $jobPosting) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\JobPosting $jobPosting
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPosting $jobPosting) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPosting $jobPosting
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPosting $jobPosting) {
        //
    }
}
