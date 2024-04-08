@php
    $action ??= '';
@endphp

<div class="bg-light p-5 text-center" style="margin-bottom: 100px">
    <form action="{{ $action }}" method="get" class="container d-flex justify-content-center">
        <input type="search" class="col-lg-8 col-md-8 pl-3" name="rechercher" placeholder="Rechercher" aria-label="Search" aria-describedby="search-addon" style="height: 50px" />
    </form>
</div>