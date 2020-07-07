@extends('admin::layouts.content')

@section('page_title')
    {{ __('reinabatata::app.admin.category.title') }}
@stop

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('reinabatata::app.admin.category.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('reinabatata.admin.category.create') }}" class="btn btn-lg btn-primary">
                    {{ __('reinabatata::app.admin.category.btn-add-category') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            @inject('reinabatata_category', 'Webkul\ReinaBatata\DataGrids\CategoryDataGrid')
            {!! $reinabatata_category->render() !!}
        </div>
    </div>
@stop