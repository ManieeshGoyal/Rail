<?php

namespace App\Http\Controllers\Backend\Blogging;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use function env;

class   BlogController extends Controller {
    public function __construct() {
        $this->viewPrefix = 'dashboard.blogging.blog.';
        $this->routePrefix = 'dashboard.blogging.blog.';
        
        $this->permission_read   = 'read-blog';
        $this->permission_create = 'create-blog';
        $this->permission_update = 'update-blog';
        $this->permission_delete = 'delete-blog';
        $this->permission_restore = 'restore-blog';
        
        //$this->middleware('permission:create-blog,read-blog,update-blog,delete-blog,restore-blog');
        $this->middleware('permission:read-blog,update-blog,delete-blog,restore-blog', ['only' => ['index','show']]);
        $this->middleware('permission:create-blog', ['only' => ['create','store']]);
        $this->middleware('permission:update-blog', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-blog', ['only' => ['destroy','restore', 'forceDelete']]);
        
        $this->pageTitle = 'Blog';
        $this->totalRecords = Blog::count();
        $this->searchModel = '';
        $this->validationRules = [
            'title' => [
                'required',
            ],
            'description' => [
                'required_if:status_id,1',
            ],
            'categories' => [
                'required_if:status_id,1',
            ],
            'image' => [
                'required_if:status_id,1',
            ],
        ];
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $listings = Helper::modelListingFilters(Blog::class, $request);

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
        $validator = Validator::make($request->all(), $this->validationRules);

        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Helper::generateSlug(Blog::class, $request->title);
        $blog->description = $request->description;
        $blog->status_id = $request->status_id;
        $blog->media_library_id = $request->image;
        Helper::saveMeta(Blog::class, $blog, $request);
        $blog->save();
        if (!empty(count(array_column(json_decode($request->categories), 'code')))) {
            $blog->blogCategories()->sync(array_column(json_decode($request->categories), 'code'));
        }

        Helper::toastrMessage('store');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($blog) {
        $blog = Blog::findOrFail($blog);

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $blog,
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog) {
        $validator = Validator::make($request->all(), $this->validationRules);

        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }


        $blog = Blog::findOrFail($blog);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->status_id = $request->status_id;
        $blog->media_library_id = $request->image;
        Helper::saveMeta(Blog::class, $blog, $request);
        $blog->save();
        if (!empty(count(array_column(json_decode($request->categories), 'code')))) {
            $blog->blogCategories()->sync(array_column(json_decode($request->categories), 'code'));
        }

        if ($blog->isClean()) {
            Helper::toastrMessage('clean');
        } else {
            Helper::toastrMessage('update');
        }

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog) {
        $blog = Blog::findOrFail($blog);
        $blog->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($jobPosting) {
        Blog::withTrashed()->find($jobPosting)->restore();
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

    public function forceDelete($jobPosting) {
        $blog = Blog::withTrashed()->find($jobPosting);
        $blog->blogCategories()->detach();
        $blog->forceDelete();

        Helper::toastrMessage('forceDelete');

        return redirect()->route($this->routePrefix . 'index');
    }
}
