<?php

namespace App\Http\Controllers\Backend\CareerManagement;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'dashboard.career-management.candidate.';
        $this->routePrefix = 'dashboard.career-management.candidate.';
        
        $this->permission_read   = 'read-candidates';
        $this->permission_create = 'create-candidates';
        $this->permission_update = 'update-candidates';
        $this->permission_delete = 'delete-candidates';
        $this->permission_restore = 'restore-candidates';
        
        //$this->middleware('permission:read-candidates,delete-candidates,restore-candidates');
        $this->middleware('permission:read-candidates,update-candidates,delete-candidates,restore-candidates', ['only' => ['index','show']]);
        $this->middleware('permission:create-candidates', ['only' => ['create','store']]);
        $this->middleware('permission:update-candidates', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-candidates', ['only' => ['destroy','restore','forceDelete']]);
        
        $this->pageTitle = 'Candidate';
        $this->totalRecords = Candidate::count();
        $this->searchModel = 'Candidate';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $listings = Helper::modelListingFilters(Candidate::class, $request);

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
     * @param  \App\Models\Candidate $candidate
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate $candidate
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Candidate $candidate
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate $candidate
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate) {
        $candidate->delete();
        Helper::toastrMessage('destroy');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\Candidate $candidate
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($candidate) {
        Candidate::withTrashed()->find($candidate)->restore();
        Helper::toastrMessage('restore');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\Candidate $candidate
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($candidate) {
        $candidate = Candidate::withTrashed()->find($candidate);
        Storage::delete($candidate->resume);
        $candidate->forceDelete();
        Helper::toastrMessage('forceDelete');

        return redirect()->route($this->routePrefix . 'index');
    }
}
