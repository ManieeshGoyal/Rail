<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\HomeSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;

class HomepageController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.homepage.';
        $this->routePrefix = 'dashboard.pages.homepage.';
        
        $this->permission_read   = 'read-management-firm';
        $this->permission_create = 'create-management-firm';
        $this->permission_update = 'update-management-firm';
        $this->permission_delete = 'delete-management-firm';
        $this->permission_restore = 'restore-management-firm';
        
        //$this->middleware('permission:read-management-firm,update-management-firm');
        $this->middleware('permission:read-management-firm', ['only' => ['index','show']]);
        $this->middleware('permission:update-management-firm', ['only' => ['edit','update']]);
        
        $this->pageTitle = 'Home Page Setting';
        $this->searchModel = '';
        $this->totalRecords = HomeSetting::count();
        $this->validationRules = [
            'heading' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'subheading' => [
                'required',
            ],
            'video_frame' => [
                'required',
            ],
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homesetting = HomeSetting::findOrFail(1);

        return view($this->viewPrefix . 'index', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $homesetting,
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homesetting = HomeSetting::findOrFail($id);

        return view($this->viewPrefix . 'index', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'homesetting' => $homesetting,
            'permission_read' => $this->permission_read,
            'permission_create' => $this->permission_create,
            'permission_update' => $this->permission_update,
            'permission_delete' => $this->permission_delete,
            'permission_restore' => $this->permission_restore,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homesetting = HomeSetting::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $homesetting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->validationRules);
        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $homesetting = HomeSetting::findOrFail($id);
        $homesetting->heading = $request->heading;
        $homesetting->subheading = $request->subheading;
        $homesetting->description = $request->description;
        $homesetting->video_frame = $request->video_frame;
        
        $homesetting->popup_status = '0';
        if(isset($request->popup_status)){
            $homesetting->popup_status = '1';
        }
        $homesetting->popup_content = $request->popup_content;
        
        $homesetting->save();

        if ($homesetting->isClean()) {
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
