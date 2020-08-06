<?php

namespace Webphorium\ReinaBatata\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * OrderBrands Reposotory
 *
 * @copyright 2019 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class OrderBrandsRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Webphorium\ReinaBatata\Contracts\OrderBrand';
    }

}