@extends('admin.layouts.app')

@section('title', 'Archives de javascript')

@section('content')
        <!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
                        @foreach ($archivesJavascript as $archiveJavascript)
						    <div class="col-lg-4 col-md-6 col-12 ">
							    <!-- single-schedule -->
                                    <div class="single-schedule first">
                                        <div class="inner">
                                            <div class="icon">
                                                <i class="fa fa-ambulance"></i>
                                            </div>
                                            <div class="single-content">
                                                <h4>{{ $archiveJavascript->motCle }}</h4>
                                                <p style="background: #020024">{{ $archiveJavascript->Contenu }}</p>
                                                <a href="">Suite <i class="fa fa-long-arrow-right"></i></a>
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
@endsection