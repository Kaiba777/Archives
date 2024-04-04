@section('title', 'Detail de html')

@section('content')
    <div class="d-flex justify-content-center" style="height: 300px; background: #020024">
        <div class="d-flex align-items-start flex-column bd-highlight mb-3">
            <div class="mb-auto p-2 bd-highlight" style="color: #fafaff">{{ $html->motsCle }}</div>
            <div class="p-2 bd-highlight mt-10" style="color: #fafaff">{{ $html->Contenu }}</div>
        </div>
    </div>
@endsection