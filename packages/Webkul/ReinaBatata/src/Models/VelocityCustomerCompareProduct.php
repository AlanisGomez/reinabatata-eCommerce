<?php

namespace Webkul\ReinaBatata\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\ReinaBatata\Contracts\ReinaBatataCustomerCompareProduct as ReinaBatataCustomerCompareProductContract;

class ReinaBatataCustomerCompareProduct extends Model implements ReinaBatataCustomerCompareProductContract
{
    protected $guarded = [];
}