<?php

namespace Webkul\ReinaBatata\Repositories;

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
        return 'Webkul\ReinaBatata\Contracts\ReinaBatataCustomerCompareProduct';
    }
}