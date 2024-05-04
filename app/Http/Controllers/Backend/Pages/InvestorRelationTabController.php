<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\InvestorRelation;
use App\Models\InvestorRelationTab;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;

class InvestorRelationTabController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.investor-relation-tab.';
        $this->routePrefix = 'dashboard.pages.investor-relation-tab.';
        
        $this->permission_read   = 'read-investor-relation-tab';
        $this->permission_create = 'create-investor-relation-tab';
        $this->permission_update = 'update-investor-relation-tab';
        $this->permission_delete = 'delete-investor-relation-tab';
        $this->permission_restore = 'restore-investor-relation-tab';
        
        //$this->middleware('permission:create-investor-relation,read-investor-relation,update-investor-relation,delete-investor-relation,restore-investor-relation');
        $this->middleware('permission:read-investor-relation-tab,update-investor-relation,delete-investor-relation-tab,restore-investor-relation-tab', ['only' => ['index','show']]);
        $this->middleware('permission:create-investor-relation-tab', ['only' => ['create','store']]);
        $this->middleware('permission:update-investor-relation-tab', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-investor-relation-tab', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Wagon Client Type';
        $this->totalRecords = InvestorRelationTab::count();
        $this->searchModel = FALSE;
        $this->validationRules = [
            'tab_name' => [
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
        $listings = Helper::modelListingFilters(InvestorRelationTab::class, $request);
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
        $investorrelation = new InvestorRelationTab();
        $investorrelation->tab_name = $request->tab_name;
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
        $investorrelation = InvestorRelationTab::findOrFail($id);

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
        $investorrelation = InvestorRelationTab::findOrFail($id);
        $investorrelation->tab_name = $request->tab_name;
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
        $investorrelation = InvestorRelationTab::findOrFail($id);
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
        InvestorRelationTab::withTrashed()->find($jobPosting)->restore();
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
        $investorrelation = InvestorRelationTab::withTrashed()->find($jobPosting);
        $investorrelation->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}
