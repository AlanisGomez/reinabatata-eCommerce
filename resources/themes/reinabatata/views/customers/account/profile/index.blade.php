@extends('shop::customers.account.index')

@section('page_title')
    {{ __('shop::app.customer.account.profile.index.title') }}
@endsection

@push('css')
    <style>
        .account-head {
            height: 50px;
        }
    </style>
@endpush


@section('page-detail-wrapper')
    <div class="account-head mt-3 mb-0">
        <span class="back-icon">
            <a href="{{ route('customer.account.index') }}">
                <i class="icon icon-menu-back"></i>
            </a>
        </span>
        <span class="account-heading">
            {{ __('shop::app.customer.account.profile.index.title') }}
        </span>
    </div>

    {!! view_render_event('bagisto.shop.customers.account.profile.view.before', ['customer' => $customer]) !!}

    <div class="account-table-content profile-page-content">
        <div class="table row no-gutters p-3 pt-md-5">
            <div class="col-12 d-block d-md-none">
                <a href="{{ route('customer.profile.edit') }}" class="pull-right">
                    {{ __('shop::app.customer.account.profile.index.edit') }}
                </a>
            </div>
            <div class="account-details no-padding col-12 col-md-4">
                <div class="customer-name col-12 text-uppercase">
                    <img src="{{ asset('/themes/reinabatata/assets/images/profile.svg') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8 text-mobile align-self-center">
                <h4>{{ $customer->first_name }} {{ $customer->last_name }} </h4>
                {!! view_render_event('bagisto.shop.customers.account.profile.view.table.first_name.after', ['customer' => $customer]) !!}
                <span>{{ $customer->email }}</span>
                {!! view_render_event('bagisto.shop.customers.account.profile.view.table.after', ['customer' => $customer])!!}
            </div>
            <div class="col-12 d-none d-md-block">
                <a href="{{ route('customer.profile.edit') }}" class="btn btn-primary  pull-right">
                    {{ __('shop::app.customer.account.profile.index.edit') }}
                </a>
                <a href="{{ route('customer.session.destroy') }}" class="btn mr-3 theme-btn light unset pull-right">
                    {{ __('shop::app.header.logout') }}
                </a>
            </div>
        </div>
    </div>
    <a href="{{ route('customer.session.destroy') }}" class="btn d-md-none d-block theme-btn light unset pull-right">
        {{ __('shop::app.header.logout') }}
    </a>
    {!! view_render_event('bagisto.shop.customers.account.profile.view.after', ['customer' => $customer]) !!}
@endsection