<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\EsteemedGuest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;
class EsteemedGuestsController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.esteemedguests.';
        $this->routePrefix = 'dashboard.pages.esteemed-guests.';
        
        $this->permission_read   = 'read-esteemed-guests';
        $this->permission_create = 'create-esteemed-guests';
        $this->permission_update = 'update-esteemed-guests';
        $this->permission_delete = 'delete-esteemed-guests';
        $this->permission_restore = 'restore-esteemed-guests';
        
        //$this->middleware('permission:create-esteemed-guests,read-esteemed-guests,update-esteemed-guests,delete-esteemed-guests,restore-esteemed-guests');
        $this->middleware('permission:read-esteemed-guests,update-esteemed-guests,delete-esteemed-guests,restore-esteemed-guests', ['only' => ['index','show']]);
        $this->middleware('permission:create-esteemed-guests', ['only' => ['create','store']]);
        $this->middleware('permission:update-esteemed-guests', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-esteemed-guests', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Esteemed Guest';
        $this->totalRecords = EsteemedGuest::count();
        $this->searchModel = '';
        $this->validationRules = [
            'name' => [
                'required',
            ],
            'designation' => [
                'required',
            ],
            'year' => [
                'required','min:4',
            ],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $listings = Helper::modelListingFilters(EsteemedGuest::class, $request);
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
            'permission_read' => $this->permission_read,
            'permission_create' => $this->permission_create,
            'permission_update' => $this->permission_update,
            'permission_delete' => $this->permission_delete,
            'permission_restore' => $this->permission_restore,
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
        $esteemedguest = new EsteemedGuest();
        $esteemedguest->year = $request->year;
        $esteemedguest->name = $request->name;
        $esteemedguest->designation = $request->designation;
        $esteemedguest->media_library_id = $request->image;
        $esteemedguest->save();
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
        $esteemedguest = EsteemedGuest::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $esteemedguest,
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

        $esteemedguest = EsteemedGuest::findOrFail($id);
        $esteemedguest->name = $request->name;
        $esteemedguest->year = $request->year;
        $esteemedguest->designation = $request->designation;
        $esteemedguest->media_library_id = $request->image;
        $esteemedguest->save();
        if ($esteemedguest->isClean()) {
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
        $esteemedguest = EsteemedGuest::findOrFail($id);
        $esteemedguest->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\EsteemedGuest $id
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($jobPosting) {
        EsteemedGuest::withTrashed()->find($jobPosting)->restore();
        Helper::toastrMessage('restore');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\EsteemedGuest $id
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($jobPosting) {
        $esteemedguest = EsteemedGuest::withTrashed()->find($jobPosting);
        $esteemedguest->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}
