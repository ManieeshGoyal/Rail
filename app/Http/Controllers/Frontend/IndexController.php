<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MediaLibrary;
use App\Models\HomeSlider;
use App\Models\OurGallery;
use App\Models\SuccessTimeline;
use App\Models\HomeSetting;
use App\Models\Testimaonial;
use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\ErrorHandler\BufferingLogger;

class IndexController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'frontend.index.index';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $sliders = HomeSlider::findOrFail(1);
        $medias = MediaLibrary::whereIn('id', explode(',', $sliders->media_library_id))->get();
        $homesetting = HomeSetting::findOrFail(1);
        $successytimeline = SuccessTimeline::orderBy('year', 'DESC')->get();
        $ourgallery = OurGallery::Where('category','1')->orderBy('id', 'ASC')->limit(7)->get();
        $testimaonials = Testimaonial::all();
        $blogs = Blog::where('status_id', 1)->latest()->limit(4)->get();

        return view($this->viewPrefix, [
            'blogs' => $blogs, 'successytimeline'=>$successytimeline, 'testimaonials'=>$testimaonials, 'ourgallery'=>$ourgallery, 'homesetting'=>$homesetting, 'sliders'=>$medias
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
