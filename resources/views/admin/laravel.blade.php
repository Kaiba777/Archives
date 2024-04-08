@extends('admin.layouts.app')

@section('title', 'Archives de laravel')

@section('content')
    @include('admin.shared.recherche', ['action' => ''])

    <!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
                        @foreach ($archivesLaravels as $archiveLaravel)
						    <div class="col-lg-4 col-md-6 col-12 ">
							    <!-- single-schedule -->
                                    <div class="single-schedule first">
                                        <div class="inner">
                                            <div class="icon">
                                                <i class="fa fa-ambulance"></i>
                                            </div>
                                            <div class="single-content">
                                                <h4>{{ $archiveLaravel->motsCle }}</h4>
                                                <p style="background: #020024">{{ $archiveLaravel->Contenu }}</p>
                                                <a href="{{ route('archives.laravel.detail', ['laravel' => $archiveLaravel->id, 'slug' => $archiveLaravel->getSlug()]) }}">Suite <i class="fa fa-long-arrow-right"></i></a>
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
            {{ $archivesLaravels->links() }}
        </div>
@endsection