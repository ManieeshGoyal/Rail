<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\SuccessTimeline;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;
class SuccessTimelineController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.successtimeline.';
        $this->routePrefix = 'dashboard.pages.home-success-timeline.';
        
        $this->permission_read   = 'read-success-timeline';
        $this->permission_create = 'create-success-timeline';
        $this->permission_update = 'update-success-timeline';
        $this->permission_delete = 'delete-success-timeline';
        $this->permission_restore = 'restore-success-timeline';
        
        //$this->middleware('permission:create-success-timeline,read-success-timeline,update-success-timeline,delete-success-timeline,restore-success-timeline');
        $this->middleware('permission:read-success-timeline,update-success-timeline,delete-success-timeline,restore-success-timeline', ['only' => ['index','show']]);
        $this->middleware('permission:create-success-timeline', ['only' => ['create','store']]);
        $this->middleware('permission:update-success-timeline', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-success-timeline', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Home Success Timeline';
        $this->totalRecords = SuccessTimeline::count();
        $this->searchModel = '';
        $this->validationRules = [
            'year' => [
                'required',
            ],
            'title' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $listings = Helper::modelListingFilters(SuccessTimeline::class, $request);
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), $this->validationRules);
        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $successtimeline = new SuccessTimeline();
        $successtimeline->title = $request->title;
        $successtimeline->year = $request->year;
        $successtimeline->description = $request->description;
        $successtimeline->save();
        Helper::toastrMessage('store');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $successtimeline = SuccessTimeline::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $successtimeline,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), $this->validationRules);
        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $successtimeline = SuccessTimeline::findOrFail($id);
        $successtimeline->title = $request->title;
        $successtimeline->year = $request->year;
        $successtimeline->description = $request->description;
        $successtimeline->save();
        if ($successtimeline->isClean()) {
            Helper::toastrMessage('clean');
        } else {
            Helper::toastrMessage('update');
        }

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $successtimeline = SuccessTimeline::findOrFail($id);
        $successtimeline->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\SuccessTimeline $id
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($jobPosting) {
        SuccessTimeline::withTrashed()->find($jobPosting)->restore();
        Helper::toastrMessage('restore');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\SuccessTimeline $id
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($jobPosting) {
        $successtimeline = SuccessTimeline::withTrashed()->find($jobPosting);
        $successtimeline->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}