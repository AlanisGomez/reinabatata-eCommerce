<header class="sticky-header px-3 py-2" v-if="!isMobile()">
    <div class="row col-12 remove-padding-margin velocity-divide-page">
        <div class="col-md-2">
            <logo-component></logo-component>
        </div>
        <div class="col-md-10">
            <searchbar-component></searchbar-component>
        </div>
    </div>
</header>

@push('scripts')
    <script type="text/javascript">
        (() => {
            document.addEventListener('scroll', e => {
                scrollPosition = Math.round(window.scrollY);

                if (scrollPosition > 50){
                    document.querySelector('header').classList.add('header-shadow');
                } else {
                    document.querySelector('header').classList.remove('header-shadow');
                }
            });
        })()
    </script>
@endpush
