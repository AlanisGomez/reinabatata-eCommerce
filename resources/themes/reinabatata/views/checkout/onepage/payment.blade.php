<form data-vv-scope="payment-form" class="payment-form">
    <div class="form-container">
        <accordian :title="'{{ __('shop::app.checkout.payment-methods') }}'" :active="true">
            <div class="form-header mb-30" slot="header">

                <h5 class="fw6 display-inbl">
                    {{ __('shop::app.checkout.onepage.payment-methods') }}
                </h5>

                <i class="rango-arrow"></i>
            </div>

            <div class="payment-methods" slot="body">
                @foreach ($paymentMethods as $payment)

                    {!! view_render_event('bagisto.shop.checkout.payment-method.before', ['payment' => $payment]) !!}

                    <div class="container mb-2 no-padding">
                        <div class="option">
                            <input
                                    type="radio"
                                    name="payment[method]"
                                    v-validate="'required'"
                                    v-model="payment.method"
                                    @change="methodSelected()"
                                    id="{{ $payment['method'] }}"
                                    value="{{ $payment['method'] }}"
                                    data-vv-as="&quot;{{ __('shop::app.checkout.onepage.payment-method') }}&quot;" />
                            <label class="address" for="{{ $payment['method'] }}" aria-label="Silver">
                                <span></span>
                                <div class="pl30">
                                    <div class="row">
                                        <span class="payment-method method-label">
                                            <b>{{ $payment['method_title'] }}</b>
                                        </span>
                                    </div>

                                    <div class="row">
                                        <span class="method-summary">{{ __($payment['description']) }}</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    {!! view_render_event('bagisto.shop.checkout.payment-method.after', ['payment' => $payment]) !!}

                @endforeach

                <span class="control-error" v-if="errors.has('payment-form.payment[method]')">
                    @{{ errors.first('payment-form.payment[method]') }}
                </span>
            </div>
        </accordian>
    </div>
</form>