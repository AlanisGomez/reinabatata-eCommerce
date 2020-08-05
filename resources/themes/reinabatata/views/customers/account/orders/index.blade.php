@extends('shop::customers.account.index')

@section('page_title')
    {{ __('shop::app.customer.account.order.index.page-title') }}
@endsection

@section('page-detail-wrapper')
    <div class="account-head mt-3 mb-10">
        <!-- <span class="back-icon">
            <a class="unset" href="{{ route('customer.account.index') }}">
                <span class="material-icons">
                    keyboard_backspace
                </span>
            </a>
        </span> -->

        <span class="account-heading">
            {{ __('shop::app.customer.account.order.index.title') }}
        </span>
    </div>

    {!! view_render_event('bagisto.shop.customers.account.orders.list.before') !!}

        <div class="account-items-list">
            <div class="account-table-content">

                {!! app('Webkul\Shop\DataGrids\OrderDataGrid')->render() !!}

            </div>
        </div>

    {!! view_render_event('bagisto.shop.customers.account.orders.list.after') !!}
@endsection