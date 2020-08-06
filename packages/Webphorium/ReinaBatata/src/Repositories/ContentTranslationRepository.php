<?php

namespace Webphorium\ReinaBatata\Repositories;

use Webkul\Core\Eloquent\Repository;

class ContentTranslationRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Webphorium\ReinaBatata\Contracts\ContentTranslation';
    }
}