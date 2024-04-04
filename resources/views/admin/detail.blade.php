@extends('admin.layouts.app')

@php
    // Permet de savoir la route précédente
    $previousUrl = URL::previous();
    $parsedUrl = parse_url($previousUrl);
    $previousPath = isset($parsedUrl['path']) ? $parsedUrl['path'] : '/';
@endphp

@if ($previousPath == '/laravel')
    @include('admin.shared.detail_laravel')
@endif

@if ($previousPath == '/livewire')
    @include('admin.shared.detail_livewire')
@endif

@if ($previousPath == '/javascript')
    @include('admin.shared.detail_javascript')
@endif

@if ($previousPath == '/html')
    @include('admin.shared.detail_html')
@endif

@if ($previousPath == '/css')
    @include('admin.shared.detail_css')
@endif

