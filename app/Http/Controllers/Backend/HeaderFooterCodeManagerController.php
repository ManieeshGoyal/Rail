<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\HeaderFooterCodeManager;
use function collect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeaderFooterCodeManagerController extends Controller {
    public $position;

    public function __construct() {
        $this->viewPrefix = 'dashboard.header-footer-code-manager.';
        $this->routePrefix = 'dashboard.header-footer-code-manager.';
        
        $this->permission_read   = 'read-hfcm';
        $this->permission_create = 'create-hfcm';
        $this->permission_update = 'update-hfcm';
        $this->permission_delete = 'delete-hfcm';
        $this->permission_restore = 'restore-hfcm';
        
        $this->middleware('permission:read-hfcm,update-hfcm,delete-hfcm,restore-hfcm', ['only' => ['index','show']]);
        $this->middleware('permission:create-hfcm', ['only' => ['create','store']]);
        $this->middleware('permission:update-hfcm', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-hfcm', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Header Footer Code Manager';
        $this->totalRecords = HeaderFooterCodeManager::count();
        $this->searchModel = '';
        $this->position = Helper::convertArrayToObject([
            [
                'id' => 1,
                'name' => 'Header',
            ],
            [
                'id' => 2,
                'name' => 'Footer',
            ],
        ]);
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $listings = Helper::modelListingFilters(HeaderFooterCodeManager::class, $request);
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
            'positions' => $this->position,
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
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
            ],
            'position' => [
                'required',
            ],
            'code' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $headerFooterCodeManager = new HeaderFooterCodeManager();
        $headerFooterCodeManager->name = $request->name;
        $headerFooterCodeManager->position = $request->position;
        $headerFooterCodeManager->code = $request->code;
        $headerFooterCodeManager->is_active = $request->is_active ?? 0;
        $headerFooterCodeManager->save();

        Helper::toastrMessage('store');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeaderFooterCodeManager $headerFooterCodeManager
     *
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderFooterCodeManager $headerFooterCodeManager) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderFooterCodeManager $headerFooterCodeManager
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($headerFooterCodeManager) {
        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'positions' => $this->position,
            'listing' => HeaderFooterCodeManager::find($headerFooterCodeManager),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\HeaderFooterCodeManager $headerFooterCodeManager
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $headerFooterCodeManager) {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
            ],
            'position' => [
                'required',
            ],
            'code' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $headerFooterCodeManager = HeaderFooterCodeManager::find($headerFooterCodeManager)->firstOrFail();
        $headerFooterCodeManager->name = $request->name;
        $headerFooterCodeManager->position = $request->position;
        $headerFooterCodeManager->code = $request->code;
        $headerFooterCodeManager->is_active = $request->is_active ?? 0;
        Helper::saveMeta(HeaderFooterCodeManager::class, $headerFooterCodeManager, $request);
        $headerFooterCodeManager->save();

        Helper::toastrMessage('update');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderFooterCodeManager $headerFooterCodeManager
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($headerFooterCodeManager) {
        HeaderFooterCodeManager::find($headerFooterCodeManager)->delete();
        Helper::toastrMessage('destroy');

        return redirect()->route($this->routePrefix . 'index');
    }
}
