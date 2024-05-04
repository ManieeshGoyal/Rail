<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\SEOModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use function redirect;

class SitemapController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'dashboard.seo.sitemap';
        $this->routePrefix = 'dashboard.seo.sitemap.';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view($this->viewPrefix . 'index', [
            'route' => $this->routePrefix,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $filePath = $_SERVER['DOCUMENT_ROOT'];
        $fileName = 'sitemap.xml';

        $models = SEOModel::where('is_active', 1)->get();
        $sitexmlContent = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $sitexmlContent .= '<url>';
        $sitexmlContent .= '<loc>' . URL::to('/') . '</loc>';
        $sitexmlContent .= '<lastmod>' . date('Y-m-d H:i:s +00:00') . '</lastmod>';
        $sitexmlContent .= '</url>';
        foreach ($models as $model) {
            $modelClass = 'App\\Models\\' . $model->name;
            if (class_exists($modelClass)) {
                $modelClass = new $modelClass();
                $allResource = $modelClass->all();
                foreach ($allResource as $resource) {
                    $sitexmlContent .= '<url>';
                    $sitexmlContent .= '<loc>' . URL::to('/' . $model->url_prefix . '/' . $resource->slug) . '</loc>';
                    $sitexmlContent .= '<lastmod>' . date('Y-m-d H:i:s +00:00', strtotime($resource->updated_at)) . '</lastmod>';
                    $sitexmlContent .= '</url>';
                }
            }
        }

        $sitexmlContent .= '</urlset>';

        File::put($filePath . '/' . $fileName, $sitexmlContent);

        Helper::showToastr('success', 'Sitemap has been generated');

        return redirect()->back();
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
