@if ($logo = core()->getCurrentChannel()->logo_url)
    <img src="{{ $logo }}" alt="{{ config('app.name') }}"/>
@else
    <img src="{{ asset('/themes/reinabatata/assets/images/Logo.svg') }}">
@endif