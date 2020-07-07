@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.customer.forgot-password.page_title') }}
@endsection

@section('content-wrapper')
    <div class="auth-content form-container">
        <div class="container mt-4">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="heading">
                    <h2 class="fs24 fw6">
                        {{ __('reinabatata::app.customer.forget-password.forgot-password')}}
                    </h2>
                    <a href="{{ route('customer.session.index') }}" class="d-none d-md-inline pull-right">
                        <button type="button" class="theme-btn btn light">
                            {{  __('reinabatata::app.customer.signup-form.login') }}
                        </button>
                    </a>

                </div>

                <div class="body col-12">
                    <h4 class="fw6">
                        {{ __('reinabatata::app.customer.forget-password.recover-password')}}
                    </h4>

                    <p class="fs16">
                        {{ __('reinabatata::app.customer.forget-password.recover-password-text')}}
                    </p>

                    {!! view_render_event('bagisto.shop.customers.forget_password.before') !!}

                    <form
                        method="post"
                        action="{{ route('customer.forgot-password.store') }}"
                        @submit.prevent="onSubmit">

                        {{ csrf_field() }}

                        {!! view_render_event('bagisto.shop.customers.forget_password_form_controls.before') !!}

                        <div class="control-group" :class="[errors.has('email') ? 'has-error' : '']">
                            <label for="email" class="mandatory label-style">
                                {{ __('shop::app.customer.forgot-password.email') }}
                            </label>

                            <input
                                class="form-control"
                                type="email"
                                name="email"
                                class="form-style"
                                v-validate="'required|email'" />

                            <span class="control-error" v-if="errors.has('email')">
                                @{{ errors.first('email') }}
                            </span>
                        </div>

                        {!! view_render_event('bagisto.shop.customers.forget_password_form_controls.after') !!}

                        <button class="theme-btn btn btn-primary btn-block" type="submit">
                            {{ __('shop::app.customer.forgot-password.submit') }}
                        </button>
                    </form>

                    <div class="seperator d-md-none d-block"><span>O</span></div>

                    <a href="{{ route('customer.session.index') }}" class="btn-new-customer d-block d-md-none">
                        <button type="button" class="theme-btn btn light btn-block">
                            {{  __('reinabatata::app.customer.signup-form.login') }}
                        </button>
                    </a>

                    {!! view_render_event('bagisto.shop.customers.forget_password.after') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
