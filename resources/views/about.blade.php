@extends('layouts.public')

@section('content')
<div class="row">
    <div class="col-lg-8">
        @isset($isArchive)
            <div class="alert alert-info mb-4"><i class="far fa-archive" aria-hidden="true"></i> @lang('participa.is_archive', ['end_date' => human_date($edition->end_date) . ' ' . date('Y', strtotime($edition->end_date))])</div>
        @endisset
    
        @php
            $about = $edition->about;
            $about = str_replace("[template]", $page['template'], $about);
            $about = str_replace("[options]", $page['options'], $about);
        @endphp
        {!! $about !!}
    </div>
    <div class="col-lg-4">
        @include('components/sidebar')
    </div>
</div>
@endsection

@section('wayback')
    @include('components.wayback')
@endsection
