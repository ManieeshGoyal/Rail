<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use function env;
use App\Models\Module;
class RolesController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.user-management.roles.';
        $this->routePrefix = 'dashboard.user-management.roles.';

        // $this->middleware('permission:create-role-permissions,read-role-permissions,update-role-permissions,delete-role-permissions,restore-role-permissions');
        
        $this->permission_read   = 'read-role-permissions';
        $this->permission_create = 'create-role-permissions';
        $this->permission_update = 'update-role-permissions';
        $this->permission_delete = 'delete-role-permissions';
        $this->permission_restore = 'restore-role-permissions';
        
        $this->middleware('permission:read-role-permissions,update-role-permissions,delete-role-permissions,restore-role-permissions', ['only' => ['index','show']]);
        $this->middleware('permission:create-role-permissions', ['only' => ['create','store']]);
        $this->middleware('permission:update-role-permissions', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-role-permissions', ['only' => ['destroy','restore', 'forceDelete']]);

        $this->pageTitle = 'Role';
        $this->totalRecords = Role::count();
        $this->searchModel = '';
        $this->validationRules = [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
            'password' => [
                'required_if:create_password,yes',
                'confirmed',
            ],
            'password_confirmation' => [
                'required_if:create_password,yes',
            ],
        ];

    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request) {
        $is_super_user = FALSE;
        if ($request->has('superUser')) {
            $is_super_user = TRUE;
        }
        $listings = Helper::modelListingFilters(Role::class, $request);
        return view($this->viewPrefix . 'index', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listings' => $listings['listings'],
            'roles' => Role::all(),
            'filter' => $listings['filter'],
            'is_super_user' => $is_super_user,
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
        $is_super_user = FALSE;
        if ($request->has('superUser')) {
            $is_super_user = TRUE;
        }
        return view($this->viewPrefix . 'create', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'is_super_user' => $is_super_user,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'modules' => Module::all(),
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
                'unique:roles,name',
            ],
            'permissions' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role = new Role();
        $role->name = $request->name;
        $role->slug = Helper::generateSlug(Role::class, $request->name);
        $role->is_editable = 1;
        $role->save();
        $role->permission()->sync($request->permissions);
        Helper::toastrMessage('store');

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
    public function edit(Request $request, Role $role) {
        $is_super_user = FALSE;
        if ($request->has('superUser')) {
            $is_super_user = TRUE;
        }
        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'is_super_user' => $is_super_user,
            'role' => $role,
            'modules' => Module::all(),
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role) {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'min:4',
            ],
            'permissions' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role->name = $request->name;
        $role->save();
        $role->permission()->sync($request->permissions);
        Helper::toastrMessage('update');

        return redirect()->route($this->routePrefix . 'index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $role = Role::findOrFail($id);
        $role->delete();
        Cache::flush();
        Helper::toastrMessage('destroy');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\User $id
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($id) {
        Role::withTrashed()->find($id)->restore();
        Helper::toastrMessage('restore');
        return redirect()->route($this->routePrefix . 'index');
    }

    /**
     * Force Delete the specified resource from storage.
     *
     * @param  \App\Models\User $id
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($id) {
        $role = Role::withTrashed()->find($id);
        $role->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}