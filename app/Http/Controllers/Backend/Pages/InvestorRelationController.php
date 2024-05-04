<?php
namespace App\Http\Controllers\Backend\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\InvestorRelation;
use App\Models\InvestorRelationYear;
use App\Models\InvestorRelationTab;
use App\Models\Year;
use App\Models\Tab;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;

class InvestorRelationController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.investor-relation.';
        $this->routePrefix = 'dashboard.pages.investor-relation.';
        
        $this->permission_read   = 'read-investor-relation';
        $this->permission_create = 'create-investor-relation';
        $this->permission_update = 'update-investor-relation';
        $this->permission_delete = 'delete-investor-relation';
        $this->permission_restore = 'restore-investor-relation';
        
        //$this->middleware('permission:create-investor-relation,read-investor-relation,update-investor-relation,delete-investor-relation,restore-investor-relation');
        $this->middleware('permission:read-investor-relation,update-investor-relation,delete-investor-relation,restore-investor-relation', ['only' => ['index','show']]);
        $this->middleware('permission:create-investor-relation', ['only' => ['create','store']]);
        $this->middleware('permission:update-investor-relation', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-investor-relation', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Wagon Manufacturing';
        $this->totalRecords = InvestorRelation::count();
        $this->searchModel = FALSE;
        $this->validationRules = [
            'name' => [
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
        $listings = Helper::modelListingFilters(InvestorRelation::class, $request);
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
     * Show the form for uploading bulk resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        echo 2222;
        // return view($this->viewPrefix . 'upload', [
        //     'routePrefix' => $this->routePrefix,
        //     'pageTitle' => $this->pageTitle,
        //     'totalRecords' => $this->totalRecords,
        //     'searchModel' => $this->searchModel,
        //     'investorRelationTab' => InvestorRelationTab::all(),
        //     'investorRelationYear' => InvestorRelationYear::all(),
        // ]);
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
            'investorRelationTab' => InvestorRelationTab::all(),
            'investorRelationYear' => InvestorRelationYear::all(),
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
        $investorrelation = new InvestorRelation();
        $investorrelation->name = $request->name;
        $investorrelation->year_id = $request->year_id;
        $investorrelation->tab_id = $request->tab_id;
        $investorrelation->owning_railway = $request->owning_railway;
        $investorrelation->wagon_type = $request->wagon_type;
        $investorrelation->manufacturing_unit = $request->manufacturing_unit;
        $investorrelation->dm_no = $request->dm_no;
        $investorrelation->dm_date = $request->dm_date;
        if (file_exists(storage_path('app\public\investorrelation')) == FALSE) {
            mkdir(storage_path('app\public\investorrelation'));
        }
        if ($request->has('attachments')) {
            $file = $request->file('attachments');
            $fileName = $file->store('/investorrelation');
            $investorrelation->attachments = $fileName;
        }
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
        $investorrelation = InvestorRelation::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $investorrelation,
            'investorRelationTab' => InvestorRelationTab::all(),
            'investorRelationYear' => InvestorRelationYear::all(),
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
        $investorrelation = InvestorRelation::findOrFail($id);
        $investorrelation->name = $request->name;
        $investorrelation->year_id = $request->year_id;
        $investorrelation->tab_id = $request->tab_id;
        $investorrelation->owning_railway = $request->owning_railway;
        $investorrelation->wagon_type = $request->wagon_type;
        $investorrelation->manufacturing_unit = $request->manufacturing_unit;
        $investorrelation->dm_no = $request->dm_no;
        $investorrelation->dm_date = $request->dm_date;
        if ($request->has('attachments')) {
            $file = $request->file('attachments');
            $fileName = $file->store('/investorrelation');
            $investorrelation->attachments = $fileName;
        }
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
        $investorrelation = InvestorRelation::findOrFail($id);
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
        InvestorRelation::withTrashed()->find($jobPosting)->restore();
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
        $investorrelation = InvestorRelation::withTrashed()->find($jobPosting);
        $investorrelation->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}
