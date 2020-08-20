<?php
    $productUpSells = $product->up_sells()->get();
?>

@if ($productUpSells->count())
    <card-list-header
        heading="{{ __('shop::app.products.up-sell-title') }}"
        view-all="false"
        row-class="pt20"
    ></card-list-header>

    <div class="carousel-products vc-full-screen">
        <carousel-component
            :perPageCustom="[[1024, 4]]"
            scrollPerPage="true"
            navigation-enabled="hide"
            pagination-enabled="hide"
            id="upsell-products-carousel"
            :slides-count="{{ sizeof($productUpSells) }}">

            @foreach ($productUpSells as $index => $upSellProduct)
                <slide slot="slide-{{ $index }}">
                    @include ('shop::products.list.card', [
                        'product' => $upSellProduct,
                        'addToCartBtnClass' => 'small-padding',
                    ])
                </slide>
            @endforeach
        </carousel-component>
    </div>

    <div class="carousel-products vc-small-screen">
        <carousel-component
            :slides-count="{{ sizeof($productUpSells) }}"
            :perPageCustom="[[320, 1], [360, 1.2], [410, 1.3],[768, 3]]"
            id="upsell-products-carousel"
            navigation-enabled="hide"
            pagination-enabled="hide">

            @foreach ($productUpSells as $index => $upSellProduct)
                <slide slot="slide-{{ $index }}">
                    @include ('shop::products.list.card', [
                        'product' => $upSellProduct,
                        'addToCartBtnClass' => 'small-padding',
                    ])
                </slide>
            @endforeach
        </carousel-component>
    </div>
@endif