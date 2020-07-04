@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.checkout.cart.title') }}
@stop

@section('content-wrapper')
    <cart-component></cart-component>
@endsection

@push('css')
    <style type="text/css">
        .quantity {
            width: unset;
            float: right;
        }
    </style>
@endpush

@push('scripts')
    @include('shop::checkout.cart.coupon')

    <script type="text/x-template" id="cart-template">
        <div class="container">
            <section class="cart-details row  mx-0 px-0 mt-3 col-12">
                <h1 class="fw5 col-12 no-padding">{{ __('shop::app.checkout.cart.title') }}</h1>

                @if ($cart)
                    <div class="cart-details-header no-padding col-lg-7 col-md-12">
                        <div class="cart-items-name ">
                            <span class="fw6 fs16 d-none d-md-block">
                                {{ __('velocity::app.checkout.items') }}
                            </span>

                            <span class="fw6 fs16  d-none d-md-block">
                                {{ __('velocity::app.checkout.qty') }}
                            </span>

                            <span class="fw6 fs16  d-none d-md-block">
                                {{ __('velocity::app.checkout.subtotal') }}
                            </span>
                        </div>

                        <div class="cart-content col-12">
                            <form
                                ref="form"
                                action="{{ route('shop.checkout.cart.update') }}"
                                method="POST"
                                @submit.prevent="onSubmit">

                                <div class="cart-item-list">
                                    @csrf

                                    @foreach ($cart->items as $key => $item)

                                        @php
                                            $productBaseImage = $item->product->getTypeInstance()->getBaseImage($item);
                                            $product = $item->product;

                                            $productPrice = $product->getTypeInstance()->getProductPrices();

                                        @endphp

                                        <div class="row no-gutters px-0 col-12 pt-3" v-if="!isMobileDevice">
                                            <a
                                                title="{{ $product->name }}"
                                                class="product-image-container col-2"
                                                href="{{ route('shop.productOrCategory.index', $product->url_key) }}">

                                                <img
                                                    class=""
                                                    alt="{{ $product->name }}"
                                                    src="{{ $productBaseImage['large_image_url'] }}"
                                                    :onerror="`this.src='${this.$root.baseUrl}/vendor/webkul/ui/assets/images/product/large-product-placeholder.png'`">
                                            </a>
                                            <div class="row pl-3 col-10 align-items-center">
                                                <div class="product-details-content col-6 pr0">
                                                    <div class="row item-title no-margin">
                                                        <a
                                                            href="{{ route('shop.productOrCategory.index', $product->url_key) }}"
                                                            title="{{ $product->name }}"
                                                            class="unset col-12 no-padding">

                                                            <span class="fs20 fw6 link-color">{{ $product->name }}</span>
                                                        </a>
                                                    </div>

                                                    @if (isset($item->additional['attributes']))
                                                        @foreach ($item->additional['attributes'] as $attribute)
                                                            <div class="row col-12 no-padding no-margin display-block">
                                                                <label class="no-margin">
                                                                    {{ $attribute['attribute_name'] }} :
                                                                </label>
                                                                <span>
                                                                    {{ $attribute['option_label'] }}
                                                                </span>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    <div>
                                                        @include ('shop::products.price', ['product' => $product])
                                                    </div>

                                                    @php
                                                        $moveToWishlist = trans('shop::app.checkout.cart.move-to-wishlist');
                                                    @endphp

                                                </div>

                                                <div class="product-quantity col-3 d-md-flex justify-content-center">
                                                    <quantity-changer
                                                        :control-name="'qty[{{$item->id}}]'"
                                                        quantity="{{ $item->quantity }}"
                                                        @submit="submit"
                                                    >
                                                    </quantity-changer>
                                                </div>

                                                <div class="product-price fs18 col-3">
                                                    <span class="card-current-price fw6 mr10">
                                                        {{ core()->currency( $item->base_total) }}
                                                    </span>
                                                </div>
                                                <div class="col-12 cursor-pointer fs16 pt-3 d-flex justify-content-between">
                                                        @auth('customer')
                                                            @if ($item->parent_id != 'null' ||$item->parent_id != null)
                                                                @include('shop::products.wishlist', [
                                                                    'route' => route('shop.movetowishlist', $item->id),
                                                                    'text' => "<span class='align-vertical-super'>$moveToWishlist</span>"
                                                                ])
                                                            @else
                                                                @include('shop::products.wishlist', [
                                                                    'route' => route('shop.movetowishlist', $item->child->id),
                                                                    'text' => "<span class='align-vertical-super'>$moveToWishlist</span>"
                                                                ])
                                                            @endif
                                                        @endauth

                                                        @guest('customer')
                                                            @include('shop::products.wishlist', [
                                                                'isMoveToWishlist' => route('shop.checkout.cart.remove', ['id' => $item->id]),
                                                                'text' => "<span class=''>$moveToWishlist</span>"
                                                            ])
                                                        @endguest

                                                        <a
                                                            class="unset d-flex align-items-center
                                                                @auth('customer')
                                                                    ml10
                                                                @endauth
                                                            "
                                                            href="{{ route('shop.checkout.cart.remove', ['id' => $item->id]) }}"
                                                            onclick="removeLink('{{ __('shop::app.checkout.cart.cart-remove-action') }}')">

                                                            <span class="rango-delete fs24"></span>
                                                            <span class="align-vertical-super">{{ __('shop::app.checkout.cart.remove') }}</span>
                                                        </a>
                                                    </div>
                                        </div>
                                        </div>

                                        <div class="row col-12" v-else>
                                            <a
                                                title="{{ $product->name }}"
                                                class="product-image-container col-3"
                                                href="{{ route('shop.productOrCategory.index', $product->url_key) }}">

                                                <img
                                                    src="{{ $productBaseImage['medium_image_url'] }}"
                                                    class="card-img-top"
                                                    alt="{{ $product->name }}">
                                            </a>

                                            <div class="col-9 pr0 item-title">
                                                <a
                                                    href="{{ route('shop.productOrCategory.index', $product->url_key) }}"
                                                    title="{{ $product->name }}"
                                                    class="unset col-12 no-padding">

                                                    <span class="fs20 fw6 link-color">{{ $product->name }}</span>
                                                </a>

                                                @if (isset($item->additional['attributes']))
                                                    <div>

                                                        @foreach ($item->additional['attributes'] as $attribute)
                                                            <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                                        @endforeach

                                                    </div>
                                                @endif

                                                <div class="col-12 no-padding">
                                                    @include ('shop::products.price', ['product' => $product])
                                                </div>

                                                <div class="row col-12 remove-padding-margin actions justify-content-around">
                                                    <div class="product-quantity col-lg-4 col-6 no-padding">
                                                        <quantity-changer
                                                            :control-name="'qty[{{$item->id}}]'"
                                                            quantity="{{ $item->quantity }}"
                                                            @submit="submit"
                                                            >
                                                        </quantity-changer>
                                                    </div>

                                                    <div class="col-4 cursor-pointer no-padding text-down-4 icon-trash">
                                                        <a href="{{ route('shop.checkout.cart.remove', ['id' => $item->id]) }}" class="unset">
                                                            <i class="rango-delete fs24"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    @endforeach
                                </div>

                                {!! view_render_event('bagisto.shop.checkout.cart.controls.after', ['cart' => $cart]) !!}
                                    <a
                                        class="col-12 d-none d-md-block link-color remove-decoration fs16 no-padding"
                                        href="{{ route('shop.home.index') }}">
                                        {{ __('shop::app.checkout.cart.continue-shopping') }}
                                    </a>
                                {!! view_render_event('bagisto.shop.checkout.cart.controls.after', ['cart' => $cart]) !!}
                            </form>
                        </div>

                        @include ('shop::products.view.cross-sells')
                    </div>
                @endif

                {!! view_render_event('bagisto.shop.checkout.cart.summary.after', ['cart' => $cart]) !!}

                    @if ($cart)
                        <div class="col-lg-4 col-md-12 offset-lg-1 no-padding order-summary-container">
                            @include('shop::checkout.total.summary', ['cart' => $cart])
                            <div class="mt-3">
                                <a
                                href="{{ route('shop.checkout.onepage.index') }}"
                                class="btn btn-primary btn-block text-uppercase remove-decoration fw6 text-center">
                                {{ __('velocity::app.checkout.proceed') }}
                            </a>
                        </div>
                        <!-- <coupon-component class="d-none d-md"></coupon-component> -->
                        </div>
                    @else
                        <div class="fs16 col-12 empty-cart-message">
                            {{ __('shop::app.checkout.cart.empty') }}
                        </div>

                        <a
                            class="fs16 mt15 col-12 remove-decoration continue-shopping"
                            href="{{ route('shop.home.index') }}">

                            <button type="button" class="btn btn-primary remove-decoration">
                                {{ __('shop::app.checkout.cart.continue-shopping') }}
                            </button>
                        </a>
                    @endif

                {!! view_render_event('bagisto.shop.checkout.cart.summary.after', ['cart' => $cart]) !!}

            </section>
        </div>
    </script>

    <script type="text/javascript" id="cart-template">
        (() => {
            Vue.component('cart-component', {
                template: '#cart-template',
                data: function () {
                    return {
                        isMobileDevice: this.isMobile(),
                    }
                },
                methods : {
                    submit : function(){
                        this.$refs.form.submit()
                        this.$root.showLoader();
                    }
                }
            })

            function removeLink(message) {
                if (!confirm(message))
                event.preventDefault();
            }
        })()
    </script>
@endpush