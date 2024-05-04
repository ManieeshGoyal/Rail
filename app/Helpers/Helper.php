<?php

namespace App\Helpers;

use App\Models\Product;
use App\Models\SEOModel;
use App\Models\Status;
use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use function env;
use function implode;
use function is_float;
use function var_dump;

class Helper {
    public static function generateSlug($model, $slug, $column = 'slug') {
        $temp_slug = Str::slug($slug);
        $results = $model::where($column, $temp_slug)->get();

        if (empty(count($results))) {
            return $temp_slug;
        }

        if (!empty(count($results))) {
            $i = 1;
            while (TRUE) {
                $temp_slug = Str::slug($slug) . '-' . $i;
                $results = $model::where($column, $temp_slug)->get();
                if (empty(count($results))) {
                    return $temp_slug;
                }
                $i++;
            }
        }
    }

    public static function toastrMessage($case = '', $message = '', $is_validation_failed = FALSE) {
        $toastrMessage = '';
        $type = 'success';
        switch ($case) {
            case 'store' :
                $toastrMessage = 'Added Successfully';
                break;
            case 'update' :
                $toastrMessage = 'Updated Successfully';
                break;
            case 'destroy' :
            case 'forceDelete' :
                $toastrMessage = 'Deleted Successfully';
                break;
            case 'clean' :
                $toastrMessage = 'No changes has been made';
                break;
            case 'restore' :
                $toastrMessage = 'Restored Successfully';
                break;
        }

        if ($is_validation_failed == TRUE) {
            $type = 'error';
            $toastrMessage = 'Snap. One or more fields are required...';
        }

        if (!empty($message)) {
            $toastrMessage = $message;
        }

        self::showToastr($type, $toastrMessage);
    }

    public static function showToastr($type, $message) {
        Session::flash($type, $message);
    }

    public static function humanReadableFileSize($bytes, $decimals = 2) {
        if ($bytes < 1024) {
            return $bytes . ' B';
        }

        $factor = floor(log($bytes, 1024));

        return sprintf("%.{$decimals}f ", $bytes / pow(1024, $factor)) . [
                'B',
                'KB',
                'MB',
                'GB',
                'TB',
                'PB',
            ][$factor];
    }

    public static function modelListingFilters($model, $request, $paginate = TRUE, $paginateCount = 20) {
        $filter = $s = $var = '';
        $listings = [];
        switch ($request->filter) {
            case 'trash':
                $filter = 'trash';
                if ($paginate) {
                    $listings = $model::onlyTrashed()->orderBy('created_at', 'DESC')->paginate($paginateCount);
                } else {
                    $listings = $model::onlyTrashed()->orderBy('created_at', 'DESC')->get();
                }
                break;
            case 'search':
                $filter = 'search';
                $var = isset($request->fields)? $request->fields:'';
                $vars = $var;
                $s = isset($request->s)? $request->s:'';
                if ($paginate) {
                    $listings = $model::latest()->where($vars, 'LIKE', "%{$s}%")->orderBy('created_at', 'DESC')->paginate($paginateCount);
                } else {
                    $listings = $model::latest()->where($vars, 'LIKE', "%{$s}%")->orderBy('created_at', 'DESC')->get();
                }
                break;
            default:
                $filter = 'all';
                if ($paginate) {
                    $listings = $model::latest()->orderBy('created_at', 'DESC')->paginate($paginateCount);
                } else {
                    $listings = $model::latest()->orderBy('created_at', 'DESC')->get();
                }
                break;
        }

        return [
            'filter' => $filter,
            'listings' => $listings,
        ];
    }

    public static function actionIcons($type, $url) {
        return view('layouts.dashboard.partials.action-icons.' . $type, [
            'url' => $url,
        ]);
    }

    public static function mediaLibrarySlug($model, $slug, $extension = '') {
        $temp_slug = Str::slug($slug) . '.' . $extension;
        $results = $model::where('slug', $temp_slug)->get();
        if (empty($results->count())) {
            return Str::slug($slug);
        }
        if (!empty(count($results))) {
            $i = 1;
            while (TRUE) {
                $temp_slug = Str::slug($slug) . '-' . $i . '.' . $extension;
                $results = $model::where('slug', $temp_slug)->get();
                if (empty($results->count())) {
                    return Str::slug($slug) . '-' . $i;
                }
                $i++;
            }
        }
    }

    public static function metaFields($model = '', $id = 0) {
        if (!self::isSEOEnabled($model)) {
            return FALSE;
        }

        $modelData = NULL;
        if (!empty($id)) {
            $modelData = $model::find($id);
        }

        $view = view('layouts.dashboard.partials.global.meta-fields', [
            'meta_title' => $modelData->meta_title ?? '',
            'meta_description' => $modelData->meta_description ?? '',
            'meta_keywords' => $modelData->meta_keywords ?? '',
            'canonical' => $modelData->canonical ?? '',
        ]);

        return $view;
    }

    public static function isSEOEnabled($model) {
        return SEOModel::where('name', str_replace('App\Models\\', '', $model))->first('is_active')->is_active;
    }

    public static function metaTags($model = '', $id = 0, $meta_title = '', $meta_description = '', $meta_keywords = '', $pagination = '') {
        $modelData = NULL;
        if (!empty($id)) {
            $modelData = $model::find($id);
        }

        if (!empty($model)) {
            $modelName = str_replace('App\Models\\', '', $model);
            $defaultModelData = SEOModel::where('name', $modelName)->first();
        }

        if (empty($meta_title)) {
            $meta_title = $modelData->meta_title ?? $defaultModelData->meta_title ?? $modelData->name ?? '';
        }
        if (empty($meta_description)) {
            $meta_description = $modelData->meta_description ?? $defaultModelData->meta_description ?? '';
        }
        if (empty($meta_keywords)) {
            $meta_keywords = $modelData->meta_keywords ?? $defaultModelData->meta_keywords ?? '';
        }

        $view = view('layouts.dashboard.partials.global.meta-tags', [
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'meta_keywords' => $meta_keywords,
            'canonical' => !empty($modelData->canonical) ? URL::to($modelData->canonical) : '',
            'seperator' => $defaultModelData->seperator ?? ' - ',
            'pagination' => $pagination,
        ]);

        return $view;
    }

    public static function saveMeta($model, $object, $request) {
        if (self::isSEOEnabled($model)) {
            $object->meta_title = $request->meta_title;
            $object->meta_description = $request->meta_description;
            $object->meta_keywords = $request->meta_keywords;
            $object->canonical = $request->canonical;
        }
    }

    public static function statusButton() {
        return view('layouts.dashboard.partials.global.status-button', [
            'statuses' => Cache::remember(Status::class, Carbon::now()->addHours(env('CACHE_TIME')), function() {
                return Status::all();
            }),
        ])->render();
    }

    public static function getMetaTags() {
        return [
            'meta_title',
            'meta_description',
            'meta_keywords',
            'canonical',
        ];;
    }

    public static function getSocialShareLinks($route = '', $text = '', $media = '') {
        $facebook = [
            'u=' . $route,
        ];
        $facebook = 'https://www.facebook.com/sharer.php?' . implode('&', $facebook);

        $twitter = [
            'url=' . $route,
            'text=' . $text,
            'via=' . URL::to('/'),
        ];
        $twitter = 'https://twitter.com/share?' . implode('&', $twitter);

        $pinterest = [
            'media=' . $media,
            'url=' . $route,
            'description=' . $text,
        ];
        $pinterest = 'https://pinterest.com/pin/create/bookmarklet/?' . implode('&', $pinterest);

        $linkedin = [
            'url=' . $route,
            'title=' . $text,
        ];
        $linkedin = 'https://www.linkedin.com/shareArticle?' . implode('&', $linkedin);

        return view('layouts.users.includes.partials.social-share', [
            'facebook' => $facebook,
            'twitter' => $twitter,
            'pinterest' => $pinterest,
            'linkedin' => $linkedin,
        ]);
    }

    public static function subHeader($pageTitle = '', $total = 0, $route = '', $newLink = TRUE, $hideAll = FALSE, $searchModel = '') {
        return view('layouts.dashboard.partials.global.sub-header', [
            'pageTitle' => $pageTitle,
            'total' => $total,
            'route' => $route,
            'newLink' => $newLink,
            'hideAll' => $hideAll,
            'searchModel' => $searchModel,
        ]);
    }

    public static function truncateStringToLastPeriod($originalText = '', $maxLimit = 0, $minLimit = 0) {
        $string = $originalText;
        if (strlen($string) > $maxLimit) {
            // truncate string
            $stringCut = substr($string, 0, $maxLimit);

            //first try period
            $endPoint = strripos($stringCut, '.');
            $cuttingAtPeriod = TRUE;

            //if too short try comma
            if ($endPoint < $minLimit) {
                $endPoint = strripos($stringCut, ',');
                $cuttingAtPeriod = FALSE;
            }

            //if too short try space
            if ($endPoint < $minLimit) {
                $endPoint = strripos($stringCut, ' ');
                $cuttingAtPeriod = FALSE;
            }

            //if the string doesn't contain any qualifier then it will cut without word basis.
            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

            if (!$cuttingAtPeriod) {
                $string .= '...';
            }
        }

        return $string;
    }

    public static function convertArrayToObject($array) {
        $collection = collect();
        if (!empty($array)) {
            foreach ($array as $item) {
                $object = (object)$item;
                $collection->push($object);
            }
        }

        return $collection;
    }
    public static function getNotificationEmails() {
        $notifications = Setting::where('key', 'notification_emails')->first();
        $notificationsEmails = [];
        if (!empty($notifications->count())) {
            $notifications = $notifications->value;
            $notificationsEmails = json_decode($notifications);
        }

        if (empty($notificationsEmails)) {
            $notificationsEmails[] = env('ADMIN_MAIL');
        }

        return $notificationsEmails;
    }
}