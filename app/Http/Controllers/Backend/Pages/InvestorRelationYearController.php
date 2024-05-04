<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\InvestorRelation;
use App\Models\InvestorRelationYear;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;

class InvestorRelationYearController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.investor-relation-year.';
        $this->routePrefix = 'dashboard.pages.investor-relation-year.';
        
        $this->permission_read   = 'read-investor-relation-year';
        $this->permission_create = 'create-investor-relation-year';
        $this->permission_update = 'update-investor-relation-year';
        $this->permission_delete = 'delete-investor-relation-year';
        $this->permission_restore = 'restore-investor-relation-year';
        
        //$this->middleware('permission:create-investor-relation,read-investor-relation,update-investor-relation,delete-investor-relation,restore-investor-relation');
        $this->middleware('permission:read-investor-relation-year,update-investor-relation,delete-investor-relation-year,restore-investor-relation-year', ['only' => ['index','show']]);
        $this->middleware('permission:create-investor-relation-year', ['only' => ['create','store']]);
        $this->middleware('permission:update-investor-relation-year', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-investor-relation-year', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Wagon Manufacturing Year';
        $this->totalRecords = InvestorRelationYear::count();
        $this->searchModel = FALSE;
        $this->validationRules = [
            'year' => [
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
        $listings = Helper::modelListingFilters(InvestorRelationYear::class, $request);
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
    public function create()
    {
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->validationRules);
        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $investorrelation = new InvestorRelationYear();
        $investorrelation->year = $request->year;
        $investorrelation->save();
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
    public function edit($id)
    {
        $investorrelation = InvestorRelationYear::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $investorrelation,
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
        $investorrelation = InvestorRelationYear::findOrFail($id);
        $investorrelation->year = $request->year;
        $investorrelation->save();

        if ($investorrelation->isClean()) {
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
        $investorrelation = InvestorRelationYear::findOrFail($id);
        $investorrelation->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\InvestorRelation $id
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($jobPosting) {
        InvestorRelationYear::withTrashed()->find($jobPosting)->restore();
        Helper::toastrMessage('restore');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\InvestorRelation $id
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($jobPosting) {
        $investorrelation = InvestorRelationYear::withTrashed()->find($jobPosting);
        $investorrelation->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}
