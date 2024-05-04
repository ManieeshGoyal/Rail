<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\MediaLibrary;
use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function str_replace;
use function var_dump;

class MediaLibraryController extends Controller {
    public $routePrefix;
    public $viewPrefix;
    public $pageTitle;

    public function __construct() {
        $this->routePrefix = 'dashboard.media-library.';
        $this->viewPrefix = 'dashboard.media-library.';
        $this->pageTitle = 'Media Library';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        if ($request->ajax()) { // if media library modal is open
            $listings = Helper::modelListingFilters(MediaLibrary::class, $request, FALSE);

            return response()->json($listings['listings']);
        } else {
            $listings = Helper::sortBy(MediaLibrary::class, $request, 'name', $paginate = 42);

            return view($this->viewPrefix . 'index', [
                'route' => $this->routePrefix,
                'listings' => $listings['listings'],
                'filter' => $listings['filter'],
                'pageTitle' => $this->pageTitle,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view($this->viewPrefix . 'create', [
            'route' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
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
        if (file_exists(storage_path('app\public\media-library')) == FALSE) {
            mkdir(storage_path('app\public\media-library'));
        }
        if ($request->hasFile('file')) {
            $fileSize = $request->file('file')->getSize();
            $fileNameWithoutExtension = $request->file('file')->getClientOriginalName();
            $fileExtension = $request->file('file')->getClientOriginalExtension();
            $fileNameWithoutExtension = str_replace($fileExtension, '', $fileNameWithoutExtension);
            $slug = Helper::mediaLibrarySlug(MediaLibrary::class, $fileNameWithoutExtension, $fileExtension);
            $fileName = $slug . '.' . $fileExtension;
            $filePath = $request->file('file')->storeAs('/media-library', $fileName);
            $actualFilePath = storage_path('app/public/' . $filePath);
            $fileURL = asset('/storage/' . $filePath);
            $mime_type = $request->file('file')->getMimeType();
            $info = getimagesize($actualFilePath);
            $dimension = $info[0] . ' x ' . $info[1] . 'px';
            $mediaLibrary = new MediaLibrary();
            $mediaLibrary->url = $fileURL;
            $mediaLibrary->name = $fileNameWithoutExtension;
            $mediaLibrary->extension = $fileExtension;
            $mediaLibrary->slug = $fileName;
            $mediaLibrary->mime_type = $mime_type;
            $mediaLibrary->file_size = Helper::humanReadableFileSize($fileSize);
            $mediaLibrary->dimension = $dimension;
            $mediaLibrary->save();

            return response()->json($mediaLibrary);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaLibrary $mediaLibrary
     *
     * @return \Illuminate\Http\Response
     */
    public function show(MediaLibrary $mediaLibrary) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaLibrary $mediaLibrary
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaLibrary $mediaLibrary) {
        return view($this->viewPrefix . 'edit', [
            'route' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'mediaLibrary' => $mediaLibrary,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\MediaLibrary $mediaLibrary
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MediaLibrary $mediaLibrary) {
        $mediaLibrary->alt_text = $request->alt_text;
        $mediaLibrary->title = $request->title;
        $mediaLibrary->caption = $request->caption;
        $mediaLibrary->description = $request->description;
        $mediaLibrary->save();

        Helper::toastrMessage('update');

        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaLibrary $mediaLibrary
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, MediaLibrary $mediaLibrary) {
        $mediaLibrary->delete();
        $listings = Helper::modelListingFilters(MediaLibrary::class, $request, FALSE);

        if ($request->ajax()) { // if media library modal is open
            return response()->json($listings['listings']);
        } else {
            Helper::toastrMessage('destroy');

            return redirect()->route($this->routePrefix . 'index');
        }
    }
}
