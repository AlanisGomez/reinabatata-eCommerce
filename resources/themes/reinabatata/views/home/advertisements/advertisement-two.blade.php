@php
    $isRendered = false;
    $advertisementTwo = null;
@endphp

@if ($reinabatataMetaData && $reinabatataMetaData->advertisement)
    @php
        $advertisement = json_decode($reinabatataMetaData->advertisement, true);

        if (isset($advertisement[2]) && is_array($advertisement[2])) {
            $advertisementTwo = array_values(array_filter($advertisement[2]));
        }
    @endphp

    @if ($advertisementTwo)
        @php
            $isRendered = true;
        @endphp

        <div class="container-fluid advertisement-two-container">
            <div class="row">
                @if ( isset($advertisementTwo[0]))
                    <a class="col-lg-9 col-md-12 no-padding">
                        <img src="{{ asset('/storage/' . $advertisementTwo[0]) }}" />
                    </a>
                @endif

            </div>
        </div>
    @endif
@endif

@if (! $isRendered)
    <div class="container-fluid advertisement-two-container">
        <div class="row">
            <a class="col-md-12 d-none no-padding">
                <img src="{{ asset('/themes/reinabatata/assets/images/ilustration-footer.svg') }}" />
            </a>
            <a class="col-md-12 d-none d-md-block no-padding">
                <img src="{{ asset('/themes/reinabatata/assets/images/ilustration-footer-desktop.svg') }}" />
            </a>
        </div>
    </div>
@endif