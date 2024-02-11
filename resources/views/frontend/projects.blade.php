@extends('frontend.layouts.main')
@section('title', 'Projects')
@section('main-container')
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/project.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">Our Projects</h1>
                    <p class="text-white "><a href="{{url('/')}}">Home</a><i class="far fa-chevron-double-right"></i> Projects</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project-area pb-120 pt-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Some of our work</span>
					<h2>Thousands of projects have been completed</h2>
				</div>
			</div>
		</div>
		<div class="row mt-60">
			<div class="col-xl-12 col-lg-12 col-sm-12 col-12">
				<ul class="porject-link text-center">
					<li class="filter theme-color" data-filter="all">Show All</li>
					<li class="filter theme-color" data-filter=".web">Web Development</li>
					<li class="filter theme-color" data-filter=".branding">Branding</li>
					<li class="filter theme-color" data-filter=".security">Cyber Security</li>
					<li class="filter theme-color" data-filter=".it">IT Consultancy</li>
				</ul>
			</div>
		</div>
		<div class="row work-mixi popup-gallery mt-2 gy-4">
			<div class="col-lg-4 col-md-6 mix web">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-1.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-1.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mix branding">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-2.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-2.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mix security">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-3.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-3.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mix it">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-4.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-4.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mix it">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-5.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-5.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mix web">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-6.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-6.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mix branding">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-7.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-7.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mix security">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-8.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-8.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mix it">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-9.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-9.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mix web">
				<div class="project-page-box position-relative z-index-one">
					<img class="w-100" src="{{url('frontend/images/project/project-pg-10.png')}}" alt="Image Not Found">
					<a class="position-absolute project-popup d-flex justify-content-center align-items-center" href="assets/images/project/project-pg-10.png"><i class="far fa-plus-circle"></i></a>
					<div class="project-info position-absolute">
						<h2 class="text-white"><a href="projects-details.html">CMS best software solutions</a></h2>
						<p class="text-white">Web Development</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
