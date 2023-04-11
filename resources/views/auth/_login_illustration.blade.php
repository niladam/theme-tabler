@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4 display-6">
                            {!! backpack_theme_config('project_logo') !!}
                        </div>
                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-4">{{ trans('backpack::base.login') }}</h2>
                                <form method="POST" action="{{ route('backpack.auth.login') }}" autocomplete="off" novalidate="">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="{{ $username }}">{{ config('backpack.base.authentication_column_name') }}</label>
                                        <input type="text" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}" class="form-control {{ $errors->has($username) ? 'is-invalid' : '' }}">
                                        @if ($errors->has($username))
                                            <div class="invalid-feedback">{{ $errors->first($username) }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="password">
                                            {{ trans('backpack::base.password') }}
                                            @if (backpack_users_have_email())
                                                <div class="form-label-description">
                                                    <a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>
                                                </div>
                                            @endif
                                        </label>
                                        <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="">
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label">{{ trans('backpack::base.remember_me') }}</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">{{ trans('backpack::base.login') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if (config('backpack.base.registration_open'))
                            <div class="text-center text-muted mt-3">
                                <a href="{{ route('backpack.auth.register') }}" tabindex="-1">{{ trans('backpack::base.register') }}</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img src="https://preview.tabler.io/static/illustrations/undraw_secure_login_pdn4.svg" height="300" class="d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection