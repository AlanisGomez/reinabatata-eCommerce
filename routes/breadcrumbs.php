<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('shop.home.index'));
});


// Home > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('home');
    $trail->push($category->name, route('shop.productOrCategory.index', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('home');
    $trail->push($product->name, route('shop.productOrCategory.index', $product->id));
});

// // Home > [Post]
// Breadcrumbs::for('post', function ($trail, $id) {
//     $post = Post::findOrFail($id);
//     $trail->parent('home');
//     $trail->push($post->title, route('post', $post));
// });

