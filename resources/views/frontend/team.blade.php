@extends('frontend.layouts.main')
@section('title', 'Team')
@section('main-container')
<!-- Breadcrumb -->
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/team.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">Team Members</h1>
                    <p class="text-white "><a href="{{url('/')}}">Home</a><i class="far fa-chevron-double-right"></i> Team</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Team -->
<div class="team-area pb-120 pt-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Our creative team</span>
					<h2>Meet our IT professional team members</h2>
				</div>
			</div>
		</div>
		<div class="row mt-60 team-dark-wrap gy-4 gy-lg-0">
            @foreach ($team as $teamMember)
            <div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="backend/images/team/{{ $teamMember->image }}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="{{url('/team')}}">{{ $teamMember->fullname }}</a></h2>
						<p class="text-white">{{ $teamMember->designation }}</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="{{ $teamMember->twitter }}"><i class="fab fa-twitter"></i></a></li>
						<li><a href="{{ $teamMember->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="{{ $teamMember->insta }}"><i class="fab fa-instagram"></i></a></li>
						<li><a href="{{ $teamMember->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</div>
<!-- Team End -->
@endsection
