@php
    $count = $reinabatataMetaData ? $reinabatataMetaData->featured_product_count : 10;
@endphp

<featured-products></featured-products>

@push('scripts')
    <script type="text/x-template" id="featured-products-template">
        <div v-if="featuredProducts.length" class="container-fluid featured-products">
            <shimmer-component v-if="isLoading && !isMobileView"></shimmer-component>

            <template v-else-if="featuredProducts.length > 0">
                <card-list-header heading="{{ __('shop::app.home.featured-products') }}">
                </card-list-header>

                <div class="carousel-products vc-full-screen ltr" v-if="!isMobileView">
                    <carousel-component
                        :perPageCustom="[[1024, 4]]"
                        :scrollPerPage="true"
                        slides-per-page="4"
                        navigation-enabled="hide"
                        pagination-enabled="hide"
                        id="fearured-products-carousel"
                        :slides-count="featuredProducts.length">

                        <slide
                            :key="index"
                            :slot="`slide-${index}`"
                            v-for="(product, index) in featuredProducts">
                            <product-card
                                :list="list"
                                :product="product">
                            </product-card>
                        </slide>
                    </carousel-component>
                </div>

                <div class="carousel-products vc-small-screen" v-else>
                    <carousel-component
                        :perPageCustom="[[320, 1], [360, 1.2], [410, 1.3],[768, 3]]"
                        slides-per-page="1"
                        navigation-enabled="hide"
                        pagination-enabled="hide"
                        id="fearured-products-carousel"
                        :slides-count="featuredProducts.length">

                        <slide
                            :key="index"
                            :slot="`slide-${index}`"
                            v-for="(product, index) in featuredProducts">
                            <product-card
                                :list="list"
                                :product="product">
                            </product-card>
                        </slide>
                    </carousel-component>
                </div>
            </template>

        </div>
    </script>

    <script type="text/javascript">
        (() => {
            Vue.component('featured-products', {
                'template': '#featured-products-template',
                data: function () {
                    return {
                        'list': false,
                        'isLoading': true,
                        'featuredProducts': [],
                        'isMobileView': this.$root.isMobile(),
                    }
                },

                mounted: function () {
                    this.getFeaturedProducts();
                },

                methods: {
                    'getFeaturedProducts': function () {
                        this.$http.get(`${this.baseUrl}/category-details?category-slug=featured-products&count={{ $count }}`)
                        .then(response => {
                            if (response.data.status)
                                this.featuredProducts = response.data.products;

                            this.isLoading = false;
                        })
                        .catch(error => {
                            this.isLoading = false;
                            console.log(this.__('error.something_went_wrong'));
                        })
                    }
                }
            })
        })()
    </script>
@endpush
