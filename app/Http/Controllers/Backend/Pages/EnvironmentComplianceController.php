<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\EnvironmentCompliance;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;
use function print_r;

class EnvironmentComplianceController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.pages.environmentcompliancepage.';
        $this->routePrefix = 'dashboard.pages.environmentcompliancepage.';
        
        $this->permission_read   = 'read-environment-compliance';
        $this->permission_create = 'create-environment-compliance';
        $this->permission_update = 'update-environment-compliance';
        $this->permission_delete = 'delete-environment-compliance';
        $this->permission_restore = 'restore-environment-compliance';
        
        //$this->middleware('permission:create-environment-compliance,read-environment-compliance,update-environment-compliance,delete-environment-compliance,restore-environment-compliance');
        $this->middleware('permission:read-environment-compliance,update-environment-compliance,delete-environment-compliance,restore-environment-compliance', ['only' => ['index','show']]);
        $this->middleware('permission:create-environment-compliance', ['only' => ['create','store']]);
        $this->middleware('permission:update-environment-compliance', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-environment-compliance', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Environment Compliance';
        $this->totalRecords = EnvironmentCompliance::count();

        $year = $compliance_type = [];
        $year[] = ['id'=>1, 'name'=>'2019-20'];
        $year[] = ['id'=>2, 'name'=>'2020-21'];
        $year[] = ['id'=>3, 'name'=>'2021-22'];
        $years = json_decode(json_encode($year), FALSE);
        $this->years = $years;

        $compliance_type[] = ['id'=>1, 'name'=>'Continuous online Monitoring report'];
        $compliance_type[] = ['id'=>2, 'name'=>'Plant operation Data'];
        $compliance_type[] = ['id'=>3, 'name'=>'Third party test report'];
        $compliance_type = json_decode(json_encode($compliance_type), FALSE);
        $this->compliance_type = $compliance_type;


        $this->searchModel = '';
        $this->validationRules = [
            'name' => [
                'required',
            ],
            'compliance_type' => [
                'required',
            ],
            'year' => [
                'required',
            ],
            'published_date' => [
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
        $listings = Helper::modelListingFilters(EnvironmentCompliance::class, $request);

        return view($this->viewPrefix . 'index', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listings' => $listings['listings'],
            'filter' => $listings['filter'],
            'compliance_type' => $this->compliance_type,
            'years' => $this->years,
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
            'compliance_type' => $this->compliance_type,
            'years' => $this->years,
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
        $environmentcompliance = new EnvironmentCompliance();
        $environmentcompliance->name = $request->name;
        $environmentcompliance->compliance_type = $request->compliance_type;
        $environmentcompliance->year = $request->year;
        $environmentcompliance->published_date = $request->published_date;
        $environmentcompliance->remarks = $request->remarks;
        if (file_exists(storage_path('app\public\environment-compliance')) == FALSE) {
            mkdir(storage_path('app\public\environment-compliance'));
        }
        if ($request->has('attachments')) {
            $file = $request->file('attachments');
            $fileName = $file->store('/environment-compliance');
            $environmentcompliance->attachments = $fileName;
        }
        $environmentcompliance->save();
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
        $environmentcompliance = EnvironmentCompliance::findOrFail($id);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $environmentcompliance,
            'compliance_type' => $this->compliance_type,
            'years' => $this->years,
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
        $environmentcompliance = EnvironmentCompliance::findOrFail($id);
        $environmentcompliance->name = $request->name;
        $environmentcompliance->compliance_type = $request->compliance_type;
        $environmentcompliance->year = $request->year;
        $environmentcompliance->published_date = $request->published_date;
        $environmentcompliance->remarks = $request->remarks;
        if ($request->has('attachments')) {
            $file = $request->file('attachments');
            $fileName = $file->store('/environment-compliance');
            $environmentcompliance->attachments = $fileName;
        }
        $environmentcompliance->save();

        if ($environmentcompliance->isClean()) {
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
        $environmentcompliance = EnvironmentCompliance::findOrFail($id);
        $environmentcompliance->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\EnvironmentCompliance $id
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($id) {
        EnvironmentCompliance::withTrashed()->find($id)->restore();
        Helper::toastrMessage('restore');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\EnvironmentCompliance $id
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($jobPosting) {
        $environmentcompliance = EnvironmentCompliance::withTrashed()->find($jobPosting);
        $environmentcompliance->forceDelete();

        Helper::toastrMessage('forceDelete');

        return redirect()->route($this->routePrefix . 'index');
    }
}