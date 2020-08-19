@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.customer.login-form.page-title') }}
@endsection

@section('content-wrapper')
    <div class="auth-content form-container">

        {!! view_render_event('bagisto.shop.customers.login.before') !!}

            <div class="container mt-4">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <ul class="nav nav-tabs mb-4 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('customer.session.index') }}">
                                <h3 class="fs18 mb-0 fw6">{{ __('reinabatata::app.customer.signup-form.login')}}</h3>
                            </a>
                        </li>
                        <li  class="nav-item">
                            <a  class="nav-link" href="{{ route('customer.register.index') }}">
                                <h3 class="fs18 mb-0 fw6">{{ __('reinabatata::app.customer.login-form.sign-up')}}</h3>
                            </a>
                        </li>
                    </ul>

                    <div class="body px-2 col-12">
                        <div class="content-login">
                        <div class="form-header">
                            <p class="fs16">
                                <!-- {{ __('reinabatata::app.customer.login-form.form-login-text')}} -->
                            </p>
                        </div>

                        <form
                            method="POST"
                            action="{{ route('customer.session.create') }}"
                            @submit.prevent="onSubmit">

                            {{ csrf_field() }}

                            {!! view_render_event('bagisto.shop.customers.login_form_controls.before') !!}

                            <div class="form-group" :class="[errors.has('email') ? 'has-error' : '']">
                                <label for="email" class="mandatory label-style">
                                    {{ __('shop::app.customer.login-form.email') }}
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="email"
                                    v-validate="'required|email'"
                                    value="{{ old('email') }}"
                                    data-vv-as="&quot;{{ __('shop::app.customer.login-form.email') }}&quot;" />

                                <span class="control-error" v-if="errors.has('email')">
                                    @{{ errors.first('email') }}
                                </span>
                            </div>

                            <div class="form-group" :class="[errors.has('password') ? 'has-error' : '']">
                                <label for="password" class="mandatory label-style">
                                    {{ __('shop::app.customer.login-form.password') }}
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    v-validate="'required'"
                                    value="{{ old('password') }}"
                                    data-vv-as="&quot;{{ __('shop::app.customer.login-form.password') }}&quot;" />

                                <span class="control-error" v-if="errors.has('password')">
                                    @{{ errors.first('password') }}
                                </span>

                                <a href="{{ route('customer.forgot-password.create') }}" class="mt-2 pull-right">
                                    {{ __('shop::app.customer.login-form.forgot_pass') }}
                                </a>

                                <div class="mt10">
                                    @if (Cookie::has('enable-resend'))
                                        @if (Cookie::get('enable-resend') == true)
                                            <a href="{{ route('customer.resend.verification-email', Cookie::get('email-for-resend')) }}">{{ __('shop::app.customer.login-form.resend-verification') }}</a>
                                        @endif
                                    @endif
                                </div>
                            </div>

                            {!! view_render_event('bagisto.shop.customers.login_form_controls.after') !!}

                            <input class="btn btn-primary btn-block" type="submit" value="{{ __('shop::app.customer.login-form.button_title') }}">

                        </form>
                        </div>
                    </div>
                </div>
            </div>

        {!! view_render_event('bagisto.shop.customers.login.after') !!}
    </div>
@endsection
