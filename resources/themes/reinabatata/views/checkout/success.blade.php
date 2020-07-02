@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.checkout.success.title') }}
@stop

@section('content-wrapper')
    <div class="container">
        <div class="order-success-content row">
            <h1 class="succes-title w-75 d-block d-md-none">{{ __('shop::app.checkout.success.thanks') }}</h1>

            <div class="col-12 d-block d-md-none">
                <img class="mb-3 img-mobile" src="{{ asset('/themes/reinabatata/assets/images/Compra-finalizada.svg') }}" alt="">
            </div>

            <div class="col-12 col-md-6 p-md-5 d-flex align-items-center">
                <div class="content-succes">
                    <h1 class="succes-title mb-4 d-none d-md-block">{{ __('shop::app.checkout.success.thanks') }}</h1>
                    <p class="fw6">
                        {{ __('shop::app.checkout.success.order-id-info', ['order_id' => $order->increment_id]) }}
                    </p>

                    <p>
                        {{ __('shop::app.checkout.success.info') }}
                    </p>

                    <div class="d-flex justify-content-end">
                        <h4 class="succes-subtitle">Recordá revisar tu casilla</h4>
                    </div>

                    {{ view_render_event('bagisto.shop.checkout.continue-shopping.before', ['order' => $order]) }}

                    <div class="mt15 row-col-12">
                        <a href="{{ route('shop.home.index') }}" class="btn btn-primary btn-block remove-decoration">
                            {{ __('shop::app.checkout.cart.continue-shopping') }}
                        </a>
                    </div>

                    {{ view_render_event('bagisto.shop.checkout.continue-shopping.after', ['order' => $order]) }}
                </div>
            </div>

            <div class="col-6 d-none d-md-block">
                <img class="pull-right" src="{{ asset('/themes/reinabatata/assets/images/Ilustration-succes-desktop.svg') }}" alt="">
            </div>

        </div>
    </div>
@endsection
