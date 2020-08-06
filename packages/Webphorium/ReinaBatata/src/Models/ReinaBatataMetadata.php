<?php

namespace Webphorium\ReinaBatata\Models;

use Illuminate\Database\Eloquent\Model;
use Webphorium\ReinaBatata\Contracts\ReinaBatataMetadata as ReinaBatataMetadataContract;

class ReinaBatataMetadata extends Model implements ReinaBatataMetadataContract
{
    protected $table = 'reinabatata_meta_data';

    protected $guarded = [];

}