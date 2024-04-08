@extends('admin.layouts.app')

@section('title', 'Archives de css')

@section('content')
    @include('admin.shared.recherche')

        <!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
                        @foreach ($archivesCss as $archiveCss)
						    <div class="col-lg-4 col-md-6 col-12 ">
							    <!-- single-schedule -->
                                    <div class="single-schedule first">
                                        <div class="inner">
                                            <div class="icon">
                                                <i class="fa fa-ambulance"></i>
                                            </div>
                                            <div class="single-content">
                                                <h4>{{ $archiveCss->motsCle }}</h4>
                                                <p style="background: #020024">{{ $archiveCss->Contenu }}</p>
                                                <a href="{{ route('archives.css.detail', ['slug' => $archiveCss->getSlug(), 'css' => $archiveCss->id]) }}">Suite <i class="fa fa-long-arrow-right"></i></a>
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
            {{ $archivesCss->links() }}
        </div>
@endsection