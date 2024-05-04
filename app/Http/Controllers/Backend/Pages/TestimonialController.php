<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Testimaonial;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;

class TestimonialController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.testimonial.';
        $this->routePrefix = 'dashboard.pages.home-testimonial.';
        
        $this->permission_read   = 'read-testimonials';
        $this->permission_create = 'create-testimonials';
        $this->permission_update = 'update-testimonials';
        $this->permission_delete = 'delete-testimonials';
        $this->permission_restore = 'restore-testimonials';
        
        //$this->middleware('permission:create-testimonials,read-testimonials,update-testimonials,delete-testimonials,restore-testimonials');
        $this->middleware('permission:read-testimonials,update-testimonials,delete-testimonials,restore-testimonials', ['only' => ['index','show']]);
        $this->middleware('permission:create-testimonials', ['only' => ['create','store']]);
        $this->middleware('permission:update-testimonials', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-testimonials', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Home Testimonial';
        $this->totalRecords = Testimaonial::count();
        $this->searchModel = '';
        $this->validationRules = [
            'name' => [
                'required',
            ],
            'designation' => [
                'required',
            ],
            'comments' => [
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
        $listings = Helper::modelListingFilters(Testimaonial::class, $request);
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
        $testimaonial = new Testimaonial();
        $testimaonial->name = $request->name;
        $testimaonial->designation = $request->designation;
        $testimaonial->comments = $request->comments;
        $testimaonial->media_library_id = $request->image;
        $testimaonial->save();
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
        $testimaonial = Testimaonial::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $testimaonial,
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

        $testimaonial = Testimaonial::findOrFail($id);
        $testimaonial->name = $request->name;
        $testimaonial->designation = $request->designation;
        $testimaonial->comments = $request->comments;
        $testimaonial->media_library_id = $request->image;
        $testimaonial->save();
        if ($testimaonial->isClean()) {
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
        $testimaonial = Testimaonial::findOrFail($id);
        $testimaonial->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\Testimaonial $id
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($jobPosting) {
        Testimaonial::withTrashed()->find($jobPosting)->restore();
        Helper::toastrMessage('restore');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\Testimaonial $id
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($jobPosting) {
        $testimaonial = Testimaonial::withTrashed()->find($jobPosting);
        $testimaonial->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}
