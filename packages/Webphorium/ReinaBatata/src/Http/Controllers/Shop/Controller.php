<?php

namespace Webphorium\ReinaBatata\Http\Controllers\Shop;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Webphorium\ReinaBatata\Helpers\Helper;
use Webkul\Product\Helpers\ProductImage;
use Webkul\Product\Repositories\SearchRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Customer\Repositories\WishlistRepository;
use Webkul\Category\Repositories\CategoryRepository;
use Webphorium\ReinaBatata\Repositories\Product\ProductRepository as ReinaBatataProductRepository;
use Webphorium\ReinaBatata\Repositories\ReinaBatataCustomerCompareProductRepository as CustomerCompareProductRepository;

class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * ProductImage object
     *
     * @var \Webkul\Product\Helpers\ProductImage
     */
    protected $productImageHelper;

    /**
     * SearchRepository object
     *
     * @var \Webkul\Product\Repositories\SearchRepository
     */
    protected $searchRepository;

    /**
     * ProductRepository object
     *
     * @var \Webkul\Product\Repositories\ProductRepository
     */
    protected $productRepository;

    /**
     * ProductRepository object of ReinaBatata package
     *
     * @var \Webphorium\ReinaBatata\Repositories\Product\ProductRepository
     */
    protected $vreinabatataProductRepository;

    /**
     * CategoryRepository object of reinabatata package
     *
     * @var \Webkul\Category\Repositories\CategoryRepository
     */
    protected $categoryRepository;

    /**
     * WishlistRepository object
     *
     * @var \Webkul\Customer\Repositories\WishlistRepository
     */
    protected $wishlistRepository;

    /**
     * Helper object
     *
     * @var \Webphorium\ReinaBatata\Helpers\Helper
     */
    protected $reinabatataHelper;

    /**
     * ReinaBatataCustomerCompareProductRepository object of repository
     *
     * @var \Webphorium\ReinaBatata\Repositories\ReinaBatataCustomerCompareProductRepository
     */
    protected $compareProductsRepository;


    /**
     * Create a new controller instance.
     *
     * @param  \Webphorium\ReinaBatata\Helpers\Helper                                         $reinabatatayHelper
     * @param  \Webkul\Product\Helpers\ProductImage                                    $productImageHelper
     * @param  \Webkul\Product\Repositories\SearchRepository                           $searchRepository
     * @param  \Webkul\Product\Repositories\ProductRepository                          $productRepository
     * @param  \Webkul\Category\Repositories\CategoryRepository                        $categoryRepository
     * @param  \Webphorium\ReinaBatata\Repositories\Product\ProductRepository                 $reinabatataProductRepository
     * @param  \Webphorium\ReinaBatata\Repositories\ReinaBatataCustomerCompareProductRepository  $compareProductsRepository
     * @param  \Webphorium\ReinaBatata\Repositories\ReinaBatataCustomerCompareProductRepository  $compareProductsRepository
     *
     * @return void
     */
    public function __construct(
        Helper $reinabatataHelper,
        ProductImage $productImageHelper,
        SearchRepository $searchRepository,
        ProductRepository $productRepository,
        WishlistRepository $wishlistRepository,
        CategoryRepository $categoryRepository,
        ReinaBatataProductRepository $reinabatataProductRepository,
        CustomerCompareProductRepository $compareProductsRepository
    ) {
        $this->_config = request('_config');

        $this->reinabatataHelper = $reinabatataHelper;

        $this->searchRepository = $searchRepository;

        $this->productRepository = $productRepository;

        $this->productImageHelper = $productImageHelper;

        $this->categoryRepository = $categoryRepository;

        $this->wishlistRepository = $wishlistRepository;

        $this->reinabatataProductRepository = $reinabatataProductRepository;

        $this->compareProductsRepository = $compareProductsRepository;
    }
}
