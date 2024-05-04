<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\HomeSlider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
class HomepageSliderController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.homeslider.';
        $this->routePrefix = 'dashboard.pages.home-slider.';
        
        $this->permission_read   = 'read-slider';
        $this->permission_create = 'create-slider';
        $this->permission_update = 'update-slider';
        $this->permission_delete = 'delete-slider';
        $this->permission_restore = 'restore-slider';
        
        //$this->middleware('permission:read-slider,update-slider');
        $this->middleware('permission:read-slider', ['only' => ['index','show']]);
        $this->middleware('permission:update-slider', ['only' => ['edit','update']]);
        
        $this->pageTitle = 'Home Page Sliders';
        $this->searchModel = '';
        $this->totalRecords = HomeSlider::count();
        $this->validationRules = [
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
        $listings = HomeSlider::findOrFail(1);
        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $listings,
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
        $homeslider = new HomeSlider();
        $homeslider->media_library_id = $request->image;
        $homeslider->save();
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
        $listings = HomeSlider::findOrFail($id);
        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $listings,
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
        $homeslider = HomeSlider::findOrFail($id);
        $homeslider->media_library_id = $request->image;
        $homeslider->save();

        if ($homeslider->isClean()) {
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
    public function destroy($id)
    {
        //
    }
}
