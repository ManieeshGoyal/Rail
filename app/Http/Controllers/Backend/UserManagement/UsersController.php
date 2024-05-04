<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Role;
use App\Models\User;
use App\Models\UserInvitation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use function env;

class UsersController extends Controller
{
    public function __construct() {
        $this->viewPrefix = 'dashboard.user-management.users.';
        $this->routePrefix = 'dashboard.user-management.users.';
        
        $this->permission_read   = 'read-user';
        $this->permission_create = 'create-user';
        $this->permission_update = 'update-user';
        $this->permission_delete = 'delete-user';
        $this->permission_restore = 'restore-user';

        //$this->middleware('permission:create-user,read-user,update-user,delete-user,restore-user');
        $this->middleware('permission:read-user,update-user,delete-user,restore-user', ['only' => ['index','show']]);
        $this->middleware('permission:create-user', ['only' => ['create','store']]);
        $this->middleware('permission:update-user', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-user', ['only' => ['destroy','restore', 'forceDelete']]);

        $this->pageTitle = 'Uers';
        $this->totalRecords = User::count();
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
            'roles' => [
                'required',
            ],
        ];
    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $listings = Helper::modelListingFilters(User::class, $request);
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
    public function create() {
        $roles = Role::all();
        return view($this->viewPrefix . 'create', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'roles' => $roles,
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

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email = $request->email;
        $user->role_id = $request->roles;
        //if ($request->create_password == 'yes') {
            if ($request->password == $request->password_confirmation) {
                $user->password = Hash::make($request->password);
                $message = 'User Created Successfully';
            }
        //} else {
        //    $message = 'User have been invited';
        //    $user->password = Hash::make('user@750');
        //    $userInvitation = new UserInvitation();
        //    $userInvitation->email = $request->email;
        //    $userInvitation->token = Str::random(64);
        //    $userInvitation->save();
        //    $userInvitationURL = URL::to('/user-invitation/' . $userInvitation->token);
        //    Mail::to($request->email)->send(new \App\Mail\UserInvitation($userInvitationURL));
        //}
        $user->save();

        Helper::toastrMessage('', $message);
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
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view($this->viewPrefix . 'edit', [
            'routePrefix' => $this->routePrefix,
            'pageTitle' => $this->pageTitle,
            'totalRecords' => $this->totalRecords,
            'searchModel' => $this->searchModel,
            'listing' => $user,
            'roles' => $roles,
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
    public function update(Request $request, User $user) {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'password' => [
                'required_if:create_password,yes',
                'confirmed',
            ],
            'password_confirmation' => [
                'required_if:create_password,yes',
            ],
            'roles' => [
                'required',
            ],
        ]);

        //$validator = Validator::make($request->all(), $validator_rule);
        if ($validator->fails()) {
            Helper::toastrMessage('', '', $validator->fails());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user->name = $request->name;
        $user->role_id = $request->roles;
        if(isset($request->create_password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();
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
        $user = User::findOrFail($id);
        $user->delete();
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
        User::withTrashed()->find($id)->restore();
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
        $user = User::withTrashed()->find($id);
        $user->forceDelete();
        Helper::toastrMessage('forceDelete');
        return redirect()->route($this->routePrefix . 'index');
    }
}
