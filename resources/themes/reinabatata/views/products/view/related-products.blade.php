<?php
    $relatedProducts = $product->related_products()->get();
?>

@if ($relatedProducts->count())
    <card-list-header
        heading="{{ __('shop::app.products.related-product-title') }}"
        view-all="false"
        row-class="pt20"
    ></card-list-header>

    <div class="carousel-products vc-full-screen">
        <carousel-component
            :perPageCustom="[[1024, 4]]"
            slides-per-page="4"
            scrollPerPage="true"
            navigation-enabled="true"
            pagination-enabled="hide"
            id="related-products-carousel"
            :slides-count="{{ sizeof($relatedProducts) }}">

            @foreach ($relatedProducts as $index => $relatedProduct)
                <slide slot="slide-{{ $index }}">
                    @include ('shop::products.list.card', [
                        'product' => $relatedProduct,
                        'addToCartBtnClass' => 'small-padding',
                    ])
                </slide>
            @endforeach
        </carousel-component>
    </div>

    <div class="carousel-products vc-small-screen">
        <carousel-component
            :slides-count="{{ sizeof($relatedProducts) }}"
            :perPageCustom="[[320, 1], [365, 1.2], [410, 1.3],[768, 3]]"
            slides-per-page="1"
            id="related-products-carousel"
            navigation-enabled="hide"
            pagination-enabled="hide">

            @foreach ($relatedProducts as $index => $relatedProduct)
                <slide slot="slide-{{ $index }}">
                    @include ('shop::products.list.card', [
                        'product' => $relatedProduct,
                        'addToCartBtnClass' => 'small-padding',
                    ])
                </slide>
            @endforeach
        </carousel-component>
    </div>
@endif