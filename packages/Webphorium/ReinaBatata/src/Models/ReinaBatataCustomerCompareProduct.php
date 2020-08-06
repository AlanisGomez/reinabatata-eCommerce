<?php

namespace Webphorium\ReinaBatata\Models;

use Illuminate\Database\Eloquent\Model;
use Webphorium\ReinaBatata\Contracts\ReinaBatataCustomerCompareProduct as ReinaBatataCustomerCompareProductContract;

class ReinaBatataCustomerCompareProduct extends Model implements ReinaBatataCustomerCompareProductContract
{
    protected $guarded = [];
}