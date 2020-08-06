<?php

namespace Webphorium\ReinaBatata\Models;

use Illuminate\Database\Eloquent\Model;
use Webphorium\ReinaBatata\Contracts\Category as CategoryContract;

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