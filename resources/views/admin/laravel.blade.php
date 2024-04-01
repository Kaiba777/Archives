@extends('admin.layouts.app')

@section('title', 'Archives de laravel')

@section('content')
    <div class="container d-flex justify-content-center mt-3">
        <div class="input-group col-lg-8 col-md-8">
            <input type="search" class="col-lg-8 col-md-8 pl-3" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <div class="col-auto">
                <button type="button" class="btn" data-mdb-ripple-init>search</button>
            </div>
        </div>
    </div>
@endsection