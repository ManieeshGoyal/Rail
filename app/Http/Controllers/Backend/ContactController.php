<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function __construct() {
        $this->viewPrefix = 'dashboard.contact.';
        $this->routePrefix = 'dashboard.contact.';
        
        $this->permission_read   = 'read-contacts-enquiry';
        
        $this->middleware('permission:read-contacts-enquiry');
        $this->pageTitle = 'Contact';
        $this->totalRecords = Contact::count();
        $this->searchModel = '';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
       $listings = Helper::modelListingFilters(Contact::class, $request);
        return view($this->viewPrefix . 'index', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listings' => $listings['listings'],
            'filter' => $listings['filter'],
            'permission_read' => $this->permission_read,
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
    public function show($id) {
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
