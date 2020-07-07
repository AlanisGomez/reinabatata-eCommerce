<?php

namespace Webkul\ReinaBatata\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\ReinaBatata\Contracts\Category as CategoryContract;

class Category extends Model implements CategoryContract
{

    protected $table = 'reinabatata_category';

    protected $fillable = [
        'category_id',
        'icon',
        'tooltip',
        'status',
    ];
}