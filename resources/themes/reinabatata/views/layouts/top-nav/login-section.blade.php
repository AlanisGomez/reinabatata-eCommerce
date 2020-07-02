{!! view_render_event('bagisto.shop.layout.header.account-item.before') !!}
    <login-header></login-header>
{!! view_render_event('bagisto.shop.layout.header.account-item.after') !!}

<script type="text/x-template" id="login-header-template">
    <div class="user-login pr-0">
        <div id="account">
            @guest('customer')
                <a href="{{ route('customer.session.index') }}" class=" unset welcome-content pull-right">
                    <i class="material-icons">perm_identity</i>
                </a>
            @endguest

            @auth('customer')
                <div class="welcome-content pull-right" @click="togglePopup">
                    <i class="material-icons">perm_identity</i>
                    <span class="select-icon rango-arrow-down"></span>
                </div>
            @endauth
        </div>

        <div class="account-modal sensitive-modal hide mt5">
                @auth('customer')
                    <div class="modal-content customer-options">
                        <div class="customer-session">
                            <label class="">
                                {{ auth()->guard('customer')->user()->first_name }}
                            </label>
                        </div>

                        <ul type="none">
                            <li>
                                <a href="{{ route('customer.profile.index') }}" class="unset">{{ __('shop::app.header.profile') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('customer.orders.index') }}" class="unset">{{ __('velocity::app.shop.general.orders') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('customer.session.destroy') }}" class="unset">{{ __('shop::app.header.logout') }}</a>
                            </li>
                        </ul>
                    </div>
                @endauth
            <!--/.Content-->
        </div>
    </div>
</script>

@push('scripts')
    <script type="text/javascript">

        Vue.component('login-header', {
            template: '#login-header-template',

            methods: {
                togglePopup: function (event) {
                    let accountModal = this.$el.querySelector('.account-modal');
                    let modal = $('#cart-modal-content')[0];

                    if (modal)
                        modal.classList.add('hide');

                    accountModal.classList.toggle('hide');

                    event.stopPropagation();
                }
            }
        })

    </script>
@endpush

