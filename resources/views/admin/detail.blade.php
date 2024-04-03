@extends('admin.layouts.app')

@php
    // Permet de savoir la route précédente
    $previousUrl = URL::previous();
    $parsedUrl = parse_url($previousUrl);
    $previousPath = isset($parsedUrl['path']) ? $parsedUrl['path'] : '/';
@endphp

@if ($previousPath == '/laravel')
    @include('admin.shared.detaillaravel')
@endif

@if ($previousPath == '/livewire')
    @include('admin.shared.detaillivewire')
@endif

