{!! view_render_event('bagisto.shop.products.price.before', ['product' => $product]) !!}

<div class="product-price d-flex justify-content-end flex-column">
    {!! $product->getTypeInstance()->getPriceHtml() !!}
</div>

{!! view_render_event('bagisto.shop.products.price.after', ['product' => $product]) !!}