<?php

    use Webphorium\ReinaBatata\ReinaBatata;

    if (! function_exists('reinabatata')) {
        function reinabatata()
        {
            return app()->make(ReinaBatata::class);
        }
    }
?>