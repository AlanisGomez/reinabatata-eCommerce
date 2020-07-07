@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

<div class="form-container review-checkout-conainer">
    <accordian :title="'{{ __('shop::app.checkout.onepage.summary') }}'" :active="true">
        <div class="form-header mb-30" slot="header">
            <h5 class="fw6 display-inbl">
                {{ __('shop::app.checkout.onepage.summary') }}
            </h5>
            <i class="rango-arrow"></i>
        </div>

        <div slot="body" class="summary-details">
            <div class="address-summary row no-gutters">
                <div class="cart-item-list col-12">
                    <div class="card-title mb-3">
                        <b>{{ __('reinabatata::app.checkout.items') }}</b>
                    </div>

                    @foreach ($cart->items as $item)
                        @php
                            $productBaseImage = $item->product->getTypeInstance()->getBaseImage($item);
                        @endphp

                        <div class="row no-gutters">
                            <div class="col-3 no-padding max-sm-img-dimention">
                                <img src="{{ $productBaseImage['medium_image_url'] }}" />
                            </div>

                            <div class="col-9 pl-3 fs16">

                                {!! view_render_event('bagisto.shop.checkout.name.before', ['item' => $item]) !!}

                                    <div class="row fs18">
                                        <span class="col-12 link-color fw6">{{ $item->product->name }}</span>
                                    </div>

                                {!! view_render_event('bagisto.shop.checkout.name.after', ['item' => $item]) !!}

                                <div class="col-12 p-0">
                                    {!! view_render_event('bagisto.shop.checkout.price.before', ['item' => $item]) !!}
                                            <span class="value">
                                                {{ core()->currency($item->base_price) }}
                                            </span>
                                    {!! view_render_event('bagisto.shop.checkout.price.after', ['item' => $item]) !!}

                                    <i class="rango-close text-down-4"></i>

                                    {!! view_render_event('bagisto.shop.checkout.quantity.before', ['item' => $item]) !!}
                                        <span class="value">
                                            {{ $item->quantity }} ({{ __('shop::app.checkout.onepage.quantity') }})
                                        </span>
                                    {!! view_render_event('bagisto.shop.checkout.quantity.after', ['item' => $item]) !!}
                                </div>

                                <div class="col-12 p-0">
                                    <b>{{ core()->currency($item->base_total) }}</b>
                                </div>

                                {!! view_render_event('bagisto.shop.checkout.options.before', ['item' => $item]) !!}

                                    @if (isset($item->additional['attributes']))
                                        <div class="item-options">

                                            @foreach ($item->additional['attributes'] as $attribute)
                                                <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                            @endforeach

                                        </div>
                                    @endif

                                {!! view_render_event('bagisto.shop.checkout.options.after', ['item' => $item]) !!}
                            </div>
                        </div>
                    @endforeach
                    <hr>
                </div>



                @if ($billingAddress = $cart->billing_address)
                    <div class="billing-address col-lg-6 col-md-12">
                        <div class="card-title mb-20">
                            <b>{{ __('shop::app.checkout.onepage.billing-address') }}</b>
                        </div>

                        <div class="card-content">
                            <ul type="none">
                                <li>
                                    {{ $billingAddress->name }}
                                </li><br />
                                <li>
                                    {{ $billingAddress->address1 }}, <br />{{ $billingAddress->state }}
                                </li><br />
                                <li>
                                    {{ core()->country_name($billingAddress->country) }} {{ $billingAddress->postcode }}
                                </li><br />

                                <li>
                                    {{ __('shop::app.checkout.onepage.contact') }} : {{ $billingAddress->phone }}
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif

                @if ($cart->haveStockableItems() && $shippingAddress = $cart->shipping_address)
                    <div class="shipping-address col-md-6">
                        <div class="card-title mb-20">
                            <b>{{ __('shop::app.checkout.onepage.shipping-address') }}</b>
                        </div>

                        <div class="card-content">
                            <ul>
                                <li>
                                    {{ $shippingAddress->name }}
                                </li><br/>
                                <li>
                                    {{ $shippingAddress->address1 }},<br/> {{ $shippingAddress->state }}
                                </li><br/>
                                <li>
                                    {{ core()->country_name($shippingAddress->country) }} {{ $shippingAddress->postcode }}
                                </li><br/>

                                <li>
                                    {{ __('shop::app.checkout.onepage.contact') }} : {{ $shippingAddress->phone }}
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <hr>

            <div class="order-description row fs16 cart-details">
                <div class="col-md-12 total-summary">
                    <!-- @if ($cart->haveStockableItems())
                        <div class="shipping mb20">
                            <div class="decorator">
                                <i class="icon shipping-icon"></i>
                            </div>

                            <div class="text">
                                <h4 class="fw6 fs18">
                                    {{ core()->currency($cart->selected_shipping_rate->base_price) }}
                                </h4>

                                <div class="info">
                                    {{ $cart->selected_shipping_rate->method_title }}
                                </div>
                            </div>
                        </div>
                    @endif -->
                    <div class="order-summary-details">
                        <slot name="summary-section"></slot>
                    </div>

                    <div class="payment mb-3">
                        <div class="decorator">
                            <i class="icon payment-icon"></i>
                        </div>

                        <div class="text mb-5">
                            <span>{{ __('shop::app.customer.account.order.view.payment-method') }}</span>

                            <h4 class="fw6 fs18">
                                {{ core()->getConfigData('sales.paymentmethods.' . $cart->payment->method . '.title') }}
                            </h4>

                        </div>
                    </div>

                    <slot name="place-order-btn"></slot>
                </div>
            </div>
        </div>
    </accordian>
</div>