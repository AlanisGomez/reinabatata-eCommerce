<?php

namespace Webkul\ReinaBatata\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\ReinaBatata\Contracts\ReinaBatataMetadata as ReinaBatataMetadataContract;

class ReinaBatataMetadata extends Model implements ReinaBatataMetadataContract
{
    protected $table = 'reinabatata_meta_data';

    protected $guarded = [];

}