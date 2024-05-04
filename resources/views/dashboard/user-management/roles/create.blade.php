@extends('layouts.dashboard.main')
@section('title', 'Create ' . $pageTitle)
@section('body')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        {!! \App\Helpers\Helper::subHeader($pageTitle, $totalRecords, $routePrefix, FALSE, FALSE, $searchModel) !!}
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route($routePrefix . 'store') }}" method="POST" autocomplete="off">
                            <div class="card card-custom gutter-b card-stretch card-shadowless">
                                <div class="card-body">
                                    {!! \App\Helpers\Input::textField('name', 'Name', TRUE) !!}
                                    <div class="form-group">
                                        <label>Select the permissions you want to assign to your current role</label>
                                        <div class="table-responsive">
                                            <table class="table @error('permissions') is-invalid @enderror">
                                                <tbody>
                                                @if(!empty($modules))
                                                    @foreach($modules as $module)
                                                        @if($module->is_visible == FALSE && $is_super_user === FALSE)
                                                            @continue
                                                        @endif
                                                        <tr>
                                                            <td>
                                                                {{ $module->name }}
                                                            </td>
                                                            @if(!empty($module->permission))
                                                                @foreach($module->permission as $permission)
                                                                    @php
                                                                        $is_checked = '';
                                                                        if(!empty(old('permissions')) && in_array($permission->id, old('permissions'))) {
                                                                            $is_checked = 'checked';
                                                                        }
                                                                    @endphp

                                                                    <td>
                                                                        <label class="checkbox checkbox-success">
                                                                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" {{ $is_checked }}>
                                                                            <span></span> &nbsp;{{ $permission->name }}
                                                                        </label>
                                                                    </td>
                                                                @endforeach
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                            @error('permissions')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        @csrf
                                        <button class="mr-2 btn btn-primary btn-primary" name="status_id" value="1">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')

@endsection
