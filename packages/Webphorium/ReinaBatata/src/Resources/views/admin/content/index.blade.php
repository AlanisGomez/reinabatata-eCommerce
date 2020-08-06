@extends('admin::layouts.content')

@section('page_title')
    {{ __('reinabatata::app.admin.contents.title') }}
@stop

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('reinabatata::app.admin.contents.title') }}</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('reinabatata.admin.content.create') }}" class="btn btn-lg btn-primary">
                    {{ __('reinabatata::app.admin.contents.btn-add-content') }}
                </a>
            </div>
        </div>

        <div class="page-content">
            @inject('reinabatata_contents', 'Webphorium\ReinaBatata\DataGrids\ContentDataGrid')
            {!! $reinabatata_contents->render() !!}
        </div>
    </div>
@stop