<?php

namespace App\Http\Controllers\Backend\CareerManagement;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function redirect;
use function yaml_emit;

class JobPostingController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'dashboard.career-management.job-posting.';
        $this->routePrefix = 'dashboard.career-management.job-posting.' ;
        
        $this->permission_read   = 'read-job-posting';
        $this->permission_create = 'create-job-posting';
        $this->permission_update = 'update-job-posting';
        $this->permission_delete = 'delete-job-posting';
        $this->permission_restore = 'restore-job-posting';
        
        //$this->middleware('permission:create-job-posting,read-job-posting,update-job-posting,delete-job-posting,restore-job-posting');
        $this->middleware('permission:read-job-posting,update-job-posting,delete-job-posting,restore-job-posting', ['only' => ['index','show']]);
        $this->middleware('permission:create-job-posting', ['only' => ['create','store']]);
        $this->middleware('permission:update-job-posting', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-job-posting', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Job Posting';
        $this->totalRecords = JobPosting::count();
        $this->searchModel = '';
        $this->validationRules = [
            'name' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $listings = Helper::modelListingFilters(JobPosting::class, $request);
        return view($this->viewPrefix . 'index', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listings' => $listings['listings'],
            'filter' => $listings['filter'],
            'permission_read' => $this->permission_read,
            'permission_create' => $this->permission_create,
            'permission_update' => $this->permission_update,
            'permission_delete' => $this->permission_delete,
            'permission_restore' => $this->permission_restore,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view($this->viewPrefix . 'create', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), $this->validationRules);
        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $jobPosting = new JobPosting();
        
        // $jobPosting = [
        //     'name',
        //     'description',
        // ];
        
        // $jobPosting['slug'] = Helper::generateSlug(JobPosting::class, $jobPosting['name']);
        // Helper::saveMeta(JobPosting::class, $jobPosting, $request);
        // JobPosting::create($jobPosting);
        
        
        
        $jobPosting->name = $request->name;
        $jobPosting->slug = Helper::generateSlug(JobPosting::class, $request->name);
        $jobPosting->description = $request->description;
        Helper::saveMeta(JobPosting::class, $jobPosting, $request);
        $jobPosting->save();

        Helper::toastrMessage('store');

        return redirect()->route($this->routePrefix . 'index');

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
        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $jobPosting,
        ]);
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
        $validator = Validator::make($request->all(), $this->validationRules);
        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }

        Helper::saveMeta(JobPosting::class, $jobPosting, $request);

        $jobPosting->update($request->only([
            'name',
            'description',
        ]));

        if ($jobPosting->isClean()) {
            Helper::toastrMessage('clean');
        } else {
            Helper::toastrMessage('update');
        }

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPosting $jobPosting
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPosting $jobPosting) {
        $jobPosting->delete();
        Helper::toastrMessage('destroy');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\JobPosting $jobPosting
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($jobPosting) {
        JobPosting::withTrashed()->find($jobPosting)->restore();
        Helper::toastrMessage('restore');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\JobPosting $jobPosting
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($jobPosting) {
        JobPosting::withTrashed()->find($jobPosting)->forceDelete();
        Helper::toastrMessage('forceDelete');

        return redirect()->route($this->routePrefix . 'index');
    }
}