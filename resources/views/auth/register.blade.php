<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Sign Up | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="{{ asset('/backend/css/pages/login/login-4.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<div class="d-flex flex-column flex-root">
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <div class="login-form">
                    <form class="form" method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf
                        <div class="pb-5 pb-lg-15">
                            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign Up</h3>
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Your Name</label>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') ?? $user->name ?? '' }}"/>
                            @error('name')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') ?? $user->email ?? '' }}"/>
                            @error('email')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Password</label>
                            </div>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror" type="password" name="password"/>
                            @error('password')
                            <div class="fv-plugins-message-container">
                                <div class="fv-help-block">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Confirm Password</label>
                            </div>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation"/>
                            @error('password_confirmation')
                            <div class="fv-plugins-message-container">
                                <div class="fv-help-block">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>

                        <div class="pb-lg-0 pb-5">
                            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>