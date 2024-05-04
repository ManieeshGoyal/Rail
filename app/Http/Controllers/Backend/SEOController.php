<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\SEOModel;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class SEOController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'dashboard.seo.';
        $this->routePrefix = 'dashboard.seo.';
        
        $this->permission_read   = 'read-seo';
        $this->permission_create = 'create-seo';
        $this->permission_update = 'update-seo';
        $this->permission_delete = 'delete-seo';
        $this->permission_restore = 'restore-seo';
        
        $this->middleware('permission:create-seo,read-seo,update-seo,delete-seo,restore-seo');
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $modules = [];
        if (file_exists(app_path() . '/Models') == TRUE) {
            if (is_dir(app_path() . '/Models') == TRUE) {
                foreach (scandir(app_path() . '/Models') as $file) {
                    if ($file == '.' || $file == '..' || Str::contains($file, 'SEOModel')) {
                        continue;
                    }
                    $modules[] = substr($file, 0, -4);
                }
            }
        }

        foreach ($modules as $module) {
            SEOModel::firstOrCreate([
                'name' => $module,
            ], [
                'is_active' => FALSE,
            ]);
        }

        $models = SEOModel::all();

        return view($this->viewPrefix . 'index', [
            'route' => $this->routePrefix,
            'models' => $models,
            'permission_read' => $this->permission_read,
            'permission_create' => $this->permission_create,
            'permission_update' => $this->permission_update,
            'permission_delete' => $this->permission_delete,
            'permission_restore' => $this->permission_restore,
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
        $models = SEOModel::all();
        foreach ($models as $model) {
            $currentModel = SEOModel::find($model->id);
            $currentModel->is_active = 0;
            foreach ($request->models as $request_models) {
                if (isset($request_models['model']) && $request_models['model'] == $model->id) {
                    $currentModel->is_active = 1;
                    $currentModel->url_prefix = $request_models['url'];
                    $currentModel->meta_title = $request_models['meta_title'];
                    $currentModel->meta_description = $request_models['meta_description'];
                    $currentModel->meta_keywords = $request_models['meta_keywords'];
                    $currentModel->seperator = $request_models['seperator'];

                    $Cmodel = 'App\\Models\\' . $model->name;
                    if (class_exists($Cmodel)) {
                        $Cmodel = new $Cmodel();
                        $tableName = $Cmodel->getTable();

                        foreach (Helper::getMetaTags() as $metaTag) {
                            if (Schema::hasColumn($tableName, $metaTag) == FALSE) {
                                Schema::table($tableName, function(Blueprint $table) use ($metaTag) {
                                    $table->longText($metaTag)->nullable();
                                });
                            }
                        }
                    }
                    $currentModel->save();

                }
            }
        }

        return redirect()->route($this->routePrefix . 'index');
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
