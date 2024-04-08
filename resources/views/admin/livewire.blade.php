@extends('admin.layouts.app')

@section('title', 'Archives de livewire')

@section('content')
    @include('admin.shared.recherche', ['action' => ''])

    <!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
                        @foreach ($archivesLivewires as $archiveLivewire)
						    <div class="col-lg-4 col-md-6 col-12 ">
							    <!-- single-schedule -->
                                    <div class="single-schedule first">
                                        <div class="inner">
                                            <div class="icon">
                                                <i class="fa fa-ambulance"></i>
                                            </div>
                                            <div class="single-content">
                                                <h4>{{ $archiveLivewire->motsCle }}</h4>
                                                <p style="background: #020024">{{ $archiveLivewire->Contenu }}</p>
                                                <a href="{{ route('archives.livewire.detail', ['livewire' => $archiveLivewire->id, 'slug' => $archiveLivewire->getSlug()]) }}">Suite <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->
        <div class="container my-4">
            {{ $archivesLivewires->links() }}
        </div>
@endsection