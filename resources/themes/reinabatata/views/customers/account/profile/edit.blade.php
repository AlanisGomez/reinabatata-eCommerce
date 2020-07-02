@extends('shop::customers.account.index')

@section('page_title')
    {{ __('shop::app.customer.account.profile.index.title') }}
@endsection

@section('page-detail-wrapper')
    <div class="account-head mt-3">
        <h1 class="account-heading">
            {{ __('shop::app.customer.account.profile.index.title') }}
        </h1>
    </div>

    {!! view_render_event('bagisto.shop.customers.account.profile.edit.before', ['customer' => $customer]) !!}

        <div class="profile-update-form">
            <form
                method="POST"
                @submit.prevent="onSubmit"
                class="form-group"
                action="{{ route('customer.profile.edit') }}">
                @csrf

                {!! view_render_event('bagisto.shop.customers.account.profile.edit_form_controls.before', ['customer' => $customer]) !!}

                <div :class="`row mb-2 ${errors.has('first_name') ? 'has-error' : ''}`">
                    <label class="col-12 mandatory">
                        {{ __('shop::app.customer.account.profile.fname') }}
                    </label>

                    <div class="col-12">
                        <input class="form-control" value="{{ $customer->first_name }}" name="first_name" type="text" v-validate="'required'" />
                        <span class="control-error" v-if="errors.has('first_name')">@{{ errors.first('first_name') }}</span>
                    </div>
                </div>

                {!! view_render_event('bagisto.shop.customers.account.profile.edit.first_name.after', ['customer' => $customer]) !!}

                <div class="row mb-2">
                    <label class="col-12">
                        {{ __('shop::app.customer.account.profile.lname') }}
                    </label>

                    <div class="col-12">
                        <input class="form-control" value="{{ $customer->last_name }}" name="last_name" type="text" />
                    </div>
                </div>

                {!! view_render_event('bagisto.shop.customers.account.profile.edit.last_name.after', ['customer' => $customer]) !!}

                <div class="row mb-2">
                    <label class="col-12 mandatory">
                        {{ __('shop::app.customer.account.profile.email') }}
                    </label>

                    <div class="col-12">
                        <input class="form-control" value="{{ $customer->email }}" name="email" type="text" v-validate="'required'" />
                        <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
                    </div>
                </div>

                {!! view_render_event('bagisto.shop.customers.account.profile.edit.email.after', ['customer' => $customer]) !!}

                <div class="row mb-2">
                    <label class="col-12">
                        {{ __('velocity::app.shop.general.enter-current-password') }}
                    </label>

                    <div :class="`col-12 ${errors.has('oldpassword') ? 'has-error' : ''}`">
                        <input    class="form-control"value="" name="oldpassword" type="password" />
                    </div>
                </div>

                {!! view_render_event('bagisto.shop.customers.account.profile.edit.oldpassword.after', ['customer' => $customer]) !!}

                <div class="row mb-2">
                    <label class="col-12">
                        {{ __('velocity::app.shop.general.new-password') }}
                    </label>

                    <div :class="`col-12 ${errors.has('password') ? 'has-error' : ''}`">
                        <input
                            class="form-control"
                            value=""
                            name="password"
                            type="password"
                            v-validate="'min:6|max:18'" />

                        <span class="control-error" v-if="errors.has('password')">
                            @{{ errors.first('password') }}
                        </span>
                    </div>
                </div>

                {!! view_render_event('bagisto.shop.customers.account.profile.edit.password.after', ['customer' => $customer]) !!}

                <div class="row mb-2">
                    <label class="col-12">
                        {{ __('velocity::app.shop.general.confirm-new-password') }}
                    </label>

                    <div :class="`col-12 ${errors.has('password_confirmation') ? 'has-error' : ''}`">
                        <input  class="form-control" value="" name="password_confirmation" type="password"
                        v-validate="'min:6|confirmed:password'" data-vv-as="confirm password" />

                        <span class="control-error" v-if="errors.has('password_confirmation')">
                            @{{ errors.first('password_confirmation') }}
                        </span>
                    </div>
                </div>

                {!! view_render_event('bagisto.shop.customers.account.profile.edit_form_controls.after', ['customer' => $customer]) !!}

                <button
                    type="submit"
                    class="btn btn-primary btn-block my-3">
                    {{ __('velocity::app.shop.general.update') }}
                </button>
            </form>
        </div>

    {!! view_render_event('bagisto.shop.customers.account.profile.edit.after', ['customer' => $customer]) !!}
@endsection