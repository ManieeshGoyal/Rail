<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\BalanceSheet;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;
class BalanceSheetController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.balancesheet.';
        $this->routePrefix = 'dashboard.pages.balancesheet.';
        
        $this->permission_read   = 'read-balance-sheet';
        $this->permission_create = 'create-balance-sheet';
        $this->permission_update = 'update-balance-sheet';
        $this->permission_delete = 'delete-balance-sheet';
        $this->permission_restore = 'restore-balance-sheet';
        
        //$this->middleware('permission:create-balance-sheet,read-balance-sheet,update-balance-sheet,delete-balance-sheet,restore-balance-sheet');
        $this->middleware('permission:read-balance-sheet,update-balance-sheet,delete-balance-sheet,restore-balance-sheet', ['only' => ['index','show']]);
        $this->middleware('permission:create-balance-sheet', ['only' => ['create','store']]);
        $this->middleware('permission:update-balance-sheet', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-balance-sheet', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Balance Sheet';
        $this->totalRecords = BalanceSheet::count();
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
        $listings = Helper::modelListingFilters(BalanceSheet::class, $request);
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
        $balancesheet = new BalanceSheet();
        $balancesheet->name = $request->name;
        if (file_exists(storage_path('app\public\balancesheet')) == FALSE) {
            mkdir(storage_path('app\public\balancesheet'));
        }
        if ($request->has('attachments')) {
            $file = $request->file('attachments');
            $fileName = $file->store('/balancesheet');
            $balancesheet->attachments = $fileName;
        }
        $balancesheet->save();
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
        $balancesheet = BalanceSheet::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $balancesheet,
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
        $balancesheet = BalanceSheet::findOrFail($id);
        $balancesheet->name = $request->name;
        if ($request->has('attachments')) {
            $file = $request->file('attachments');
            $fileName = $file->store('/balancesheet');
            $balancesheet->attachments = $fileName;
        }
        $balancesheet->save();

        if ($balancesheet->isClean()) {
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
        $balancesheet = BalanceSheet::findOrFail($id);
        $balancesheet->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\BalanceSheet $id
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($jobPosting) {
        BalanceSheet::withTrashed()->find($jobPosting)->restore();
        Helper::toastrMessage('restore');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\BalanceSheet $id
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($jobPosting) {
        $balancesheet = BalanceSheet::withTrashed()->find($jobPosting);
        $balancesheet->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}
