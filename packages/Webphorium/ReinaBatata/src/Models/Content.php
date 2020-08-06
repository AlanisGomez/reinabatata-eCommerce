<?php

namespace Webphorium\ReinaBatata\Models;

use Webkul\Core\Eloquent\TranslatableModel;
use Webphorium\ReinaBatata\Contracts\Content as ContentContract;

class Content extends TranslatableModel implements ContentContract
{

    protected $table = 'reinabatata_contents';

    public $translatedAttributes = [
        'title',
        'custom_title',
        'custom_heading',
        'page_link',
        'link_target',
        'catalog_type',
        'products',
        'description',
    ];

    protected $fillable = [
        'content_type',
        'position',
        'status',
    ];

    protected $with = ['translations'];
}