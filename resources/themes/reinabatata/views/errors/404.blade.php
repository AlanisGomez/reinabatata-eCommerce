@extends('shop::layouts.master')

@section('page_title')
    {{ __('admin::app.error.404.page-title') }}
@stop

@section('body-header')
@endsection

@section('full-content-wrapper')
    <div class="error-page row text-center">
        <div class="col-12 col-md-6">
            <div class="row">
                    <div class="col-12 error-ilustration bg-image"></div>
            </div>

        </div>
        <div class="col-12 col-md-6 pt-md-5">
            <div class="col-12 fs24">
                {{ __('reinabatata::app.error.page-lost-short') }}
            </div>

            <p class="col-12 fs20">
                {{ __('reinabatata::app.error.page-lost-description') }}
            </p>

            <a type="button" class="row btn btn-primary remove-decoration" href="{{ route('shop.home.index') }}">
                <span class="col-12 fs16">
                    {{ __('reinabatata::app.error.go-to-home') }}
                </span>
            </a>
        </div>
    </div>

@endsection

@section('footer')
@show
