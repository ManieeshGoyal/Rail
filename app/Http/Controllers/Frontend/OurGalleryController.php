<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OurGallery;
use Illuminate\Http\Request;

class OurGalleryController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'frontend.pages.';
        $this->pageTitle = 'Our Gallery';
        $categories = [];
        $categories[] = ['id'=>1, 'name'=>'Visitors'];
        $categories[] = ['id'=>2, 'name'=>'Events'];
        $categories[] = ['id'=>3, 'name'=>'Acivities'];
        $categories = json_decode(json_encode($categories), FALSE);
        $this->categories = $categories;
        $this->routePrefix = 'our-esteemed-guests.';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //$esteemedguest = OurGallery::all();
         $ourgallery = OurGallery::get()->sortBy('category')->groupBy('category');
        return view($this->viewPrefix . 'ourgallery', [
            'routePrefix' => $this->routePrefix,
            'categories' => $this->categories,
            'pageTitle' => $this->pageTitle,
            'ourgallery' => $ourgallery,
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