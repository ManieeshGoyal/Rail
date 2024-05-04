<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\OurGallery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;
class OurGalleryController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.ourgallery.';
        $this->routePrefix = 'dashboard.pages.home-our-gallery.';
        
        $this->permission_read   = 'read-gallery';
        $this->permission_create = 'create-gallery';
        $this->permission_update = 'update-gallery';
        $this->permission_delete = 'delete-gallery';
        $this->permission_restore = 'restore-gallery';
        
        //$this->middleware('permission:create-gallery,read-gallery,update-gallery,delete-gallery,restore-gallery');
        $this->middleware('permission:read-gallery,update-gallery,delete-gallery,restore-gallery', ['only' => ['index','show']]);
        $this->middleware('permission:create-gallery', ['only' => ['create','store']]);
        $this->middleware('permission:update-gallery', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-gallery', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Home Our Gallery';
        $this->totalRecords = OurGallery::count();

        $categories = [];
        $categories[] = ['id'=>1, 'name'=>'Visitors'];
        $categories[] = ['id'=>2, 'name'=>'Events'];
        $categories[] = ['id'=>3, 'name'=>'Acivities'];
        $categories = json_decode(json_encode($categories), FALSE);
        $this->categories = $categories;

        $this->searchModel = '';
        $this->validationRules = [
            'title' => [
                'required',
            ],
            'image' => [
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
        $listings = Helper::modelListingFilters(OurGallery::class, $request);
        return view($this->viewPrefix . 'index', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'categories' => $this->categories,
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
            'categories' => $this->categories,
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
        $ourgallery = new OurGallery();
        $ourgallery->category = $request->category;
        $ourgallery->title = $request->title;
        $ourgallery->media_library_id = $request->image;
        $ourgallery->save();
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
        $ourgallery = OurGallery::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'categories' => $this->categories,
            'listing' => $ourgallery,
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

        $ourgallery = OurGallery::findOrFail($id);
        $ourgallery->category = $request->category;
        $ourgallery->title = $request->title;
        $ourgallery->media_library_id = $request->image;
        $ourgallery->save();
        if ($ourgallery->isClean()) {
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
        $ourgallery = OurGallery::findOrFail($id);
        $ourgallery->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\OurGallery $id
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($jobPosting) {
        OurGallery::withTrashed()->find($jobPosting)->restore();
        Helper::toastrMessage('restore');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\OurGallery $id
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($jobPosting) {
        $ourgallery = OurGallery::withTrashed()->find($jobPosting);
        $ourgallery->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}
