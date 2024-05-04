<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\EnvironmentCompliance;
use Illuminate\Http\Request;

class EnvironmentComplianceController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'frontend.pages.';
        $this->routePrefix = 'environmentcompliance.';
        $this->environmentcomplianceroutePrefix = 'environmentcompliance.';
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
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $type = (isset($_GET['type']) && !empty($_GET['type']))? $_GET['type']:1;
        $year = (isset($_GET['year']) && !empty($_GET['type']))? $_GET['year']:1;
        
        $environmentcompliance = EnvironmentCompliance::where(['year'=>$year, 'compliance_type'=>$type])->latest()->get();

        return view($this->viewPrefix . 'environmentcompliance', [
            'compliance_type' => $this->compliance_type,
            'years' => $this->years,
            'type' => $type,
            'year' => $year,
            'routePrefix' => $this->environmentcomplianceroutePrefix,
            'environmentcompliance' => $environmentcompliance,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}