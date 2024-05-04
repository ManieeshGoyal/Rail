<?php

namespace App\Http\Controllers\Backend\Blogging;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends Controller {
    public function __construct() {
        $this->viewPrefix = 'dashboard.blogging.blog-category.';
        $this->routePrefix = 'dashboard.blogging.blog-category.';
        
        $this->permission_read   = 'read-blog-categories';
        $this->permission_create = 'create-blog-categories';
        $this->permission_update = 'update-blog-categories';
        $this->permission_delete = 'delete-blog-categories';
        $this->permission_restore = 'restore-blog-categories';
        
        //$this->middleware('permission:create-blog-categories,read-blog-categories,update-blog-categories,delete-blog-categories,restore-blog-categories');
        $this->middleware('permission:read-blog-categories,update-blog-categories,delete-blog-categories,restore-blog-categories', ['only' => ['index','show']]);
        $this->middleware('permission:create-blog-categories', ['only' => ['create','store']]);
        $this->middleware('permission:update-blog-categories', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-blog-categories', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Blog Category';
        $this->totalRecords = BlogCategory::count();
        $this->searchModel = '';
        $this->validationRules = [
            'name' => [
                'required',
                'unique:blog_categories,name',
            ],
        ];
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $listings = Helper::modelListingFilters(BlogCategory::class, $request);

        return view($this->viewPrefix . 'index', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listings' => $listings['listings'],
            'filter' => $listings['filter'],
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
    public function create(Request $request) {
        return view($this->viewPrefix . 'create', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'min:4',
                'unique:blog_categories',
            ],
        ]);

        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blogCategory = new BlogCategory();
        $blogCategory->name = $request->name;
        $blogCategory->slug = Helper::generateSlug(BlogCategory::class, $request->name);
        $blogCategory->parent_id = ($request->parent_category ?? 0);
        Helper::saveMeta(BlogCategory::class, $blogCategory, $request);
        $blogCategory->save();
        Helper::toastrMessage('store');
        Cache::flush();

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory $blogCategory
     *
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory $blogCategory
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $blogCategory) {
        $blogCategory = BlogCategory::findOrFail($blogCategory);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $blogCategory,
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\BlogCategory $blogCategory
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blogCategory) {
        $this->validationRules['name'][1] = $this->validationRules['name'][1] . ',' . $blogCategory;
        $validator = Validator::make($request->all(), $this->validationRules);

        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blogCategory = BlogCategory::findOrFail($blogCategory);
        $blogCategory->name = $request->name;
        $blogCategory->parent_id = ($request->parent_category ?? 0);
        Helper::saveMeta(BlogCategory::class, $blogCategory, $request);
        $blogCategory->save();

        if ($blogCategory->isClean()) {
            Helper::toastrMessage('clean');
        } else {
            Helper::toastrMessage('update');
        }

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory $blogCategory
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogCategory) {
        $blogCategory = BlogCategory::findOrFail($blogCategory);
        $blogCategory->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');

        return redirect()->route($this->routePrefix . 'index');
    }

    /*
    * Restore the specified resource from storage.
    *
    * @param  \App\Models\Blog $blog
    *
    * @return \Illuminate\Http\Response
    */

    public function restore($blogCategory) {
        BlogCategory::withTrashed()->find($blogCategory)->restore();
        Helper::toastrMessage('restore');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($blogCategory) {
        $blogCategory = BlogCategory::withTrashed()->find($blogCategory);
        $blogCategory->blogs()->detach();
        $blogCategory->forceDelete();

        Helper::toastrMessage('forceDelete');

        return redirect()->route($this->routePrefix . 'index');
    }
}
