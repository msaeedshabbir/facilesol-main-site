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
			<div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="{{url('frontend/images/team/team-dark-1.png')}}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="{{url('/team')}}">Arlene McCoy</a></h2>
						<p class="text-white">CEO @ Company</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="{{url('frontend/images/team/team-dark-2.png')}}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="team-details.html">Arlene McCoy</a></h2>
						<p class="text-white">CEO @ Company</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="{{url('frontend/images/team/team-dark-3.png')}}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="team-details.html">Arlene McCoy</a></h2>
						<p class="text-white">CEO @ Company</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="{{url('frontend/images/team/team-dark-4.png')}}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="team-details.html">Arlene McCoy</a></h2>
						<p class="text-white">CEO @ Company</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="{{url('frontend/images/team/team-dark-5.png')}}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="team-details.html">Arlene McCoy</a></h2>
						<p class="text-white">CEO @ Company</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="{{url('frontend/images/team/team-dark-6.png')}}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="team-details.html">Arlene McCoy</a></h2>
						<p class="text-white">CEO @ Company</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="{{url('frontend/images/team/team-dark-7.png')}}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="team-details.html">Arlene McCoy</a></h2>
						<p class="text-white">CEO @ Company</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-lg-0">
				<div class="team-dark-box position-relative overflow-hidden">
					<img class="w-100" src="{{url('frontend/images/team/team-dark-8.png')}}" alt="Image Not Found">
					<div class="team-dark-box-info position-absolute w-100">
						<h2 class="text-white"><a href="team-details.html">Arlene McCoy</a></h2>
						<p class="text-white">CEO @ Company</p>
					</div>
					<ul class="team-dark-social position-absolute">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Team End -->
@endsection
