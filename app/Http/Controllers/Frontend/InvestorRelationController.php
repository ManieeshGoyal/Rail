<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\InvestorRelation;
use App\Models\InvestorRelationTab;
use App\Models\InvestorRelationYear;
use Illuminate\Http\Request;

class InvestorRelationController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'frontend.financials.';
        $this->routePrefix = 'investor-relation.';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $investorRelations = InvestorRelation::orderBy('tab_id','ASC')->orderBy('year_id','DESC')->get();
        // $attrs = [];
        // foreach ($investorRelations as $key => $value) {
        //         $attrs[$value->tabs->tab_name][$value->years->year][] = ['id'=>$value->id, 'title'=>$value->name, 'file'=>$value->attachments,'tab_id'=>$value->tab_id];
        // }
        return view($this->viewPrefix . 'wagon-search', [
            'routePrefix' => $this->routePrefix,
            'investorrelations' => $investorRelations,
            'investorRelationYear' => InvestorRelationYear::OrderBy('id', 'DESC')->get(),
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
        
       //
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