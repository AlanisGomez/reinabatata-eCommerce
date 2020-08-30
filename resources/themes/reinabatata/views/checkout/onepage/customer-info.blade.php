<form data-vv-scope="address-form" class="">
    <div class="form-container" v-if="!this.new_billing_address">
        <accordian
            :active="true"
            :title="'{{ __('shop::app.checkout.onepage.billing-address') }}'">

            <div class="form-header mb-30" slot="header">
                <h5 class="fw6 display-inbl">
                    {{ __('shop::app.checkout.onepage.billing-address') }}
                </h5>
                <i class="rango-arrow"></i>
            </div>

            <div slot="body">
                <div class="address-container row no-margin">
                    <div
                    :key="addresses.id"
                    class="col-md-6 col-12 address-holder no-padding"
                    v-for='(addresses, index) in this.allAddress'>
                    <div class="container">
                        <div class="option">
                            <input
                                    type="radio"
                                    v-validate="'required'"
                                    name="billing[address_id]"
                                    :value="addresses.id"
                                    :id="[`billing${addresses.id}`]"
                                    v-model="address.billing.address_id"
                                    @change="validateForm('address-form')"
                                    data-vv-as="&quot;{{ __('shop::app.checkout.onepage.billing-address') }}&quot;" />
                            <label class="address" :for="[`billing${addresses.id}`]" aria-label="Silver">
                                <span></span>
                                <div>
                                    <h5 class="card-title fw5">
                                        @{{ allAddress.first_name }} @{{ allAddress.last_name }},
                                    </h5>

                                    <ul type="none" class="mb-0">
                                        <li>@{{ addresses.address1 }},</li>
                                        <li>@{{ addresses.city }},</li>
                                        <li>@{{ addresses.state }},</li>
                                        <li>@{{ addresses.country }} @{{ addresses.postcode }}</li>
                                        <li>
                                            {{ __('shop::app.customer.account.address.index.contact') }} : @{{ addresses.phone }}
                                        </li>
                                    </ul>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6 col-12 address-holder no-padding">
                            <div class="container">
                            <div class="card">
                                <div
                                @click="validateFormAfterAction"
                                class="card-body add-address-button">
                                    <div class="cursor-pointer" @click="newBillingAddress()">
                                        <i class="rango-zoom-plus fs24"></i>
                                        <span>{{ __('shop::app.checkout.onepage.new-address') }}</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>

<!--
                <div :class="`col-12 mt15 has-error ${errors.has('address-form.billing[address_id]') ? 'has-error' : ''}`">
                    <span
                        class="control-error"
                        v-if="errors.has('address-form.billing[address_id]')">
                        @{{ errors.first('address-form.billing[address_id]') }}
                    </span>
                </div> -->

                @if ($cart->haveStockableItems())
                    <div class="my-2" v-if="address.billing.address_id">
                        <span class="checkbox fs16 display-inbl">
                            <input
                                style='display: none'
                                type="checkbox"
                                class="ml0 inp-cbx"
                                id="billing[use_for_shipping]"
                                name="billing[use_for_shipping]"
                                @change="validateFormAfterAction"
                                v-model="address.billing.use_for_shipping" />
                            <label class="cbx" for='billing[use_for_shipping]'>
                                <span>
                                    <svg width='12px' height='10px' viewbox='0 0 12 10'>
                                        <polyline points='1.5 6 4.5 9 10.5 1'></polyline>
                                    </svg>
                                </span>
                                <span>
                                {{ __('shop::app.checkout.onepage.use_for_shipping') }}
                                </span>
                            </label>
                        </span>
                    </div>
                @endif
            </div>
        </accordian>
    </div>

    <div class="form-container" v-else>
        <accordian :title="'{{ __('shop::app.checkout.onepage.billing-address') }}'" :active="true">
            <div class="form-header" slot="header">
                <h5 class="fw6 display-inbl">
                    {{ __('shop::app.checkout.onepage.billing-address') }}
                </h5>

                <i class="rango-arrow"></i>
            </div>


            <div class="col-12 no-gutters no-padding" slot="body">
                @auth('customer')
                    @if(count(auth('customer')->user()->addresses))
                        <a
                            class="theme-btn btn light text-up-14"
                            @click="backToSavedBillingAddress()">

                            {{ __('shop::app.checkout.onepage.back') }}
                        </a>
                    @endif
                @endauth

                @include('shop::checkout.onepage.customer-new-form', [
                    'billing' => true
                ])
            </div>
        </accordian>
    </div>

    @if ($cart->haveStockableItems())
        <div
            class="form-container"
            v-if="!address.billing.use_for_shipping && !this.new_shipping_address">

            <accordian
                :active="true"
                :title="'{{ __('shop::app.checkout.onepage.shipping-address') }}'">

                <div class="form-header mb-30" slot="header">
                    <h5 class="fw6 display-inbl">
                        {{ __('shop::app.checkout.onepage.shipping-address') }}
                    </h5>
                    <i class="rango-arrow"></i>
                </div>

                <div class="address-container row mb30 remove-padding-margin" slot="body">
                    <div
                        class="col-lg-6 address-holder no-padding"
                        v-for='(addresses, index) in this.allAddress'>
                        <div class="container">
                            <div class="option">
                                <input
                                        type="radio"
                                        v-validate="'required'"
                                        :value="addresses.id"
                                        name="shipping[address_id]"
                                        v-model="address.shipping.address_id"
                                        :id="[`shipping${addresses.id}`]"
                                        @change="validateForm('address-form')"
                                        data-vv-as="&quot;{{ __('shop::app.checkout.onepage.shipping-address') }}&quot;" />
                                <label class="address" :for="[`shipping${addresses.id}`]" aria-label="Silver">
                                    <span></span>
                                    <div>
                                        <h5 class="card-title fw5">
                                            @{{ allAddress.first_name }} @{{ allAddress.last_name }},
                                        </h5>

                                        <ul type="none" class="mb-0">
                                            <li>@{{ addresses.address1 }},</li>
                                            <li>@{{ addresses.city }},</li>
                                            <li>@{{ addresses.state }},</li>
                                            <li>@{{ addresses.country }} @{{ addresses.postcode }}</li>
                                            <li>
                                                {{ __('shop::app.customer.account.address.index.contact') }} : @{{ addresses.phone }}
                                            </li>
                                        </ul>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 address-holder no-padding">
                        <div class="card">
                            <div
                            @click="validateFormAfterAction"
                            class="card-body add-address-button">
                                <div class="cursor-pointer" @click="newShippingAddress()">
                                    <i class="rango-zoom-plus fs24"></i>
                                    <span>{{ __('shop::app.checkout.onepage.new-address') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div :class="`col-12 mt15 has-error pl0 ${errors.has('address-form.shipping[address_id]') ? 'has-error' : ''}`">
                        <span class="control-error" v-if="errors.has('address-form.shipping[address_id]')">
                            @{{ errors.first('address-form.shipping[address_id]') }}
                        </span>
                    </div> -->
                </div>
            </accordian>
        </div>

        <div
            class="form-container"
            v-if="!address.billing.use_for_shipping && this.new_shipping_address">

            <accordian
                :active="true"
                :title="'{{ __('shop::app.checkout.onepage.shipping-address') }}'">

                <div class="form-header" slot="header">
                    <h5 class="fw6 display-inbl">
                        {{ __('shop::app.checkout.onepage.shipping-address') }}
                    </h5>
                    <i class="rango-arrow"></i>
                </div>

                <div class="col-12 no-gutters no-padding" slot="body">
                    @auth('customer')
                        @if(count(auth('customer')->user()->addresses))
                            <a
                                class="theme-btn light pull-right text-up-14"
                                @click="backToSavedShippingAddress()">

                                {{ __('shop::app.checkout.onepage.back') }}
                            </a>
                        @endif
                    @endauth

                    @include('shop::checkout.onepage.customer-new-form', [
                        'shipping' => true
                    ])
                </div>
            </accordian>
        </div>
    @endif
</form>