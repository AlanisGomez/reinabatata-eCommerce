<?php

namespace Webphorium\ReinaBatata\Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReinaBatataMetaDataSeeder extends Seeder
{
    public function run()
    {
        DB::table('reinabatata_meta_data')->delete();

        DB::table('reinabatata_meta_data')->insert([
            'id'                       => 1,
            'locale'                   => 'es',

            'home_page_content'        => "<p>@include('shop::home.advertisements.advertisement-four')@include('shop::home.featured-products') @include('shop::home.product-policy') @include('shop::home.advertisements.advertisement-three') @include('shop::home.new-products') @include('shop::home.advertisements.advertisement-two')</p>",
            'footer_left_content'      => __('reinabatata::app.admin.meta-data.footer-left-raw-content'),

            'footer_middle_content'    => '<div class="col-lg-6 col-md-12 col-sm-12 no-padding"><ul type="none"><li><a href="https://webkul.com/about-us/company-profile/">About Us</a></li><li><a href="https://webkul.com/about-us/company-profile/">Customer Service</a></li><li><a href="https://webkul.com/about-us/company-profile/">What&rsquo;s New</a></li><li><a href="https://webkul.com/about-us/company-profile/">Contact Us </a></li></ul></div><div class="col-lg-6 col-md-12 col-sm-12 no-padding"><ul type="none"><li><a href="https://webkul.com/about-us/company-profile/"> Order and Returns </a></li><li><a href="https://webkul.com/about-us/company-profile/"> Payment Policy </a></li><li><a href="https://webkul.com/about-us/company-profile/"> Shipping Policy</a></li><li><a href="https://webkul.com/about-us/company-profile/"> Privacy and Cookies Policy </a></li></ul></div>',
            'slider'                   => 1,

            'subscription_bar_content' => '<div class="social-icons col-lg-6"><a href="https://www.facebook.com/reina.batata.1840" target="_blank" class="unset" rel="noopener noreferrer"><i class="fs24 within-circle rango-facebook" title="facebook"></i> </a><a href="https://www.instagram.com/reinabatata.petshop/?hl=es-la" target="_blank" class="unset" rel="noopener noreferrer"><i class="fs24 within-circle rango-instagram" title="instagram"></i></a><a href="https://api.whatsapp.com/send?phone=5491169122541" target="_blank" class="unset" rel="noopener noreferrer"><i class="fs24 within-circle rango-phone" title="whatsapp"></i></a></div>',

            'product_policy'           => '<div class="row col-12 remove-padding-margin"><div class="col-lg-4 col-sm-12 product-policy-wrapper"><div class="card"><div class="policy"><div class="left"><i class="rango-van-ship fs40"></i></div> <div class="right"><span class="font-setting fs20">Free Shipping on Order $20 or More</span></div></div></div></div> <div class="col-lg-4 col-sm-12 product-policy-wrapper"><div class="card"><div class="policy"><div class="left"><i class="rango-exchnage fs40"></i></div> <div class="right"><span class="font-setting fs20">Product Replace &amp; Return Available </span></div></div></div></div> <div class="col-lg-4 col-sm-12 product-policy-wrapper"><div class="card"><div class="policy"><div class="left"><i class="rango-exchnage fs40"></i></div> <div class="right"><span class="font-setting fs20">Product Exchange and EMI Available </span></div></div></div></div></div>',
        ]);
    }
}
