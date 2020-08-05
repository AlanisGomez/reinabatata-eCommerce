<form data-vv-scope="shipping-form" class="shipping-form">
    <div class="form-container">
        <accordian :title="'{{ __('shop::app.checkout.onepage.shipping-method') }}'" :active="true">
            <div class="form-header" slot="header">
                <h5 class="fw6 display-inbl">
                 {{ __('shop::app.checkout.onepage.shipping-method') }}
                </h5>
                <i class="rango-arrow"></i>
            </div>

            <div :class="`shipping-methods ${errors.has('shipping-form.shipping_method') ? 'has-error' : ''}`" slot="body">

                @foreach ($shippingRateGroups as $rateGroup)

                    {!! view_render_event('bagisto.shop.checkout.shipping-method.before', ['rateGroup' => $rateGroup]) !!}
                        @foreach ($rateGroup['rates'] as $rate)
                        <div class="container mb-2 no-padding">
                            <div class="option">
                                <input
                                    type="radio"
                                    v-validate="'required'"
                                    name="shipping_method"
                                    id="{{ $rate->method }}"
                                    value="{{ $rate->method }}"
                                    @change="methodSelected()"
                                    v-model="selected_shipping_method"
                                    data-vv-as="&quot;{{ __('shop::app.checkout.onepage.shipping-method') }}&quot;" />
                                <label class="address" for="{{ $rate->method }}" aria-label="Silver">
                                    <span></span>
                                        <div>
                                            <div>
                                                <b v-if="{{ $rate['base_price'] }} === 0">Gratis</b>
                                                <b v-else>{{ core()->currency($rate->base_price) }}</b> 
                                            </div>

                                            <div>
                                                <b>{{ $rate->method_title }}</b> - {{ __($rate->method_description) }}
                                            </div>
                                        </div>
                                </label>
                            </div>
                        </div>
                        @endforeach

                    {!! view_render_event('bagisto.shop.checkout.shipping-method.after', ['rateGroup' => $rateGroup]) !!}

                @endforeach

                <span
                    class="control-error"
                    v-if="errors.has('shipping-form.shipping_method')">

                    @{{ errors.first('shipping-form.shipping_method') }}
                </span>
            </div>
        </accordian>
    </div>
</form>