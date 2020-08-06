<?php

namespace Webphorium\ReinaBatata\Repositories;

use Webkul\Core\Eloquent\Repository;

class ReinaBatataCustomerCompareProductRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Webphorium\ReinaBatata\Contracts\ReinaBatataCustomerCompareProduct';
    }
}