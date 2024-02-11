@extends('frontend.layouts.main')
@section('title', 'Services')
@section('main-container')
<!-- Breadcrumb -->
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/service.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">Our Services</h1>
                    <p class="text-white "><a href="{{url('/')}}">Home</a><i class="far fa-chevron-double-right"></i> Services</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Services -->
<div class="services-area mt-120 mb-120 position-relative">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Our creative team</span>
					<h2>Meet our IT professional team members</h2>
				</div>
			</div>
		</div>
		<div class="row gy-4 mt-lg-4 mt-1" >
			<div class="col-lg-6">
				<div class="service-box service-box-two d-flex">
					<div class="service-icon mb-3 mb-md-0">
						<img src="assets/images/service/service-icon-two-1.svg" alt="">
					</div>
					<div class="service-info">
						<h2 class="mt-0">Managed IT Services</h2>
						<p>Managed IT services are tasks handled by a third of party business information technology services. The managed services model is a way to offload. </p>
						<a class="d-inline-flex align-items-center" href="{{url('/services')}}">Read More <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-box service-box-two d-flex">
					<div class="service-icon mb-3 mb-md-0">
						<img src="assets/images/service/service-icon-two-2.svg" alt="">
					</div>
					<div class="service-info">
						<h2 class="mt-0">Managed Cyber Security</h2>
						<p>A Managed Cyber security services provider is an outside services provider we focused cybersecurity technology, best practices development.</p>
						<a class="d-inline-flex align-items-center" href="services-details.html">Discover More <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-box service-box-two d-flex">
					<div class="service-icon mb-3 mb-md-0">
						<img src="assets/images/service/service-icon-two-3.svg" alt="">
					</div>
					<div class="service-info">
						<h2 class="mt-0">Cloud & Hosting Services</h2>
						<p>Cloud hosting makes applications and websites accessible using cloud resources. Unlike traditional hosting, solutions are not deployed.</p>
						<a class="d-inline-flex align-items-center" href="services-details.html">Discover More <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-box service-box-two d-flex">
					<div class="service-icon mb-3 mb-md-0">
						<img src="assets/images/service/service-icon-two-4.svg" alt="">
					</div>
					<div class="service-info">
						<h2 class="mt-0">Website & App Development</h2>
						<p>Web application development is the creation of the application programs that reside on remote servers and are delivered to the user's device.</p>
						<a class="d-inline-flex align-items-center" href="services-details.html">Discover More <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-box service-box-two d-flex">
					<div class="service-icon mb-3 mb-md-0">
						<img src="assets/images/service/service-icon-two-5.svg" alt="">
					</div>
					<div class="service-info">
						<h2 class="mt-0">Backup & Disaster Recovery</h2>
						<p>Disaster recovery, on the other hand, refers to the plan & processes for quickly reestablishing  access to applications, data, and IT resources.</p>
						<a class="d-inline-flex align-items-center" href="services-details.html">Discover More <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-box service-box-two d-flex">
					<div class="service-icon mb-3 mb-md-0">
						<img src="assets/images/service/service-icon-two-6.svg" alt="">
					</div>
					<div class="service-info">
						<h2 class="mt-0">Network Security</h2>
						<p>Network Security protects your network and data from breaches, intrusions and other threats. This is a vast and overarching term that describes.</p>
						<a class="d-inline-flex align-items-center" href="services-details.html">Discover More <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <img class="start-0 top-0 position-absolute" src="assets/images/shape/about.png" alt="">
</div>
<!-- Services End -->
<!-- Solution -->
<div class="solution-area pb-120">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 order-lg-0 order-1 mobt-60">
				<div class="section-title">
					<span>Working efficiently</span>
					<h2>We are committed to providing high quality IT solutions</h2>
				</div>
				<div class="best-way-wrap best-way-style-three">
					<div class="best-way-box">
						<div class="best-way-info-wrap d-flex">
							<div class="best-way-icon d-flex align-items-center justify-content-center flex-shrink-0">
								<img src="assets/images/icon/headphone-two.svg" alt="">
							</div>
							<div class="best-way-info">
								<h2>Real-time IT support</h2>
								<p>Give your team access to Electric’s elite squadron of over 200 IT technicians less than 10 minutes.</p>
							</div>
						</div>
					</div>
					<div class="best-way-box">
						<div class="best-way-info-wrap d-flex">
							<div class="best-way-icon d-flex align-items-center justify-content-center flex-shrink-0">
								<img src="assets/images/icon/light.svg" alt="">
							</div>
							<div class="best-way-info">
								<h2>Strategic IT projects</h2>
								<p>Time for an enormous project? Whether you are working on ISO certification or planning an office.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 order-lg-1 order-0">
				<div class="security-img-wrap security-img-wrap-two position-relative d-flex justify-content-end">
					<div class="security-img">
						<img class="w-100" src="assets/images/service/service-page-img.png" alt="">
					</div>
					<div class="security-img-info text-end position-absolute start-0">
						<div class="security-img-info-content text-center d-inline-block">
							<span class="d-inline-block">98%</span>
							<p> Success Rate</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Solution End -->
<!-- Work process -->
<div class="work-process-area pb-96 pt-120 bg-color">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Our work process</span>
					<h2>We follow a simple work process for work</h2>
				</div>
			</div>
		</div>
		<div class="row mt-60">
			<div class="col-xl-3 col-lg-6 col-sm-6 work-process-box-wrap hover-box-wrap-one">
				<div class="work-process-box hover-box text-center show">
					<span>1</span>
					<h2>Choose a service</h2>
					<p>Great service providers listen first, listen and well</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-sm-6 work-process-box-wrap hover-box-wrap-one">
				<div class="work-process-box hover-box text-center active">
					<span>2</span>
					<h2>Request a meeting</h2>
					<p>Feel free to prefer another time and location for you</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-sm-6 work-process-box-wrap hover-box-wrap-one">
				<div class="work-process-box hover-box text-center show">
					<span>3</span>
					<h2>Get custom plans</h2>
					<p>Purchasing a custom drawn home plan ensures you get</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-sm-6 work-process-box-wrap hover-box-wrap-one">
				<div class="work-process-box hover-box text-center show">
					<span>4</span>
					<h2>Successfully done</h2>
					<p>Successfully done a project most popular phrase service</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Work process End -->
<!-- Price -->
<div class="price-area pt-120 pb-96">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Choose your best plan</span>
					<h2>We provide simple pricing plans for you</h2>
				</div>
			</div>
		</div>
		<div class="row mt-60">
			<div class="col-xl-4 col-md-6 hover-box-wrap-price">
				<div class="price-box hover-box show">
					<span class="price-title d-inline-block">Standard Plan</span>
					<h2 class="price-number">$30<sub>/Per Month</sub></h2>
					<div class="price-info">
						<p>Lorem ipsum dolor sit am, consectetur adipiscing elit. Ut elit tellus.</p>
						<a class="w-100 d-inline-block price-btn text-center" href="pricing.html">Choose Plan</a>
						<ul>
							<li><i class="far fa-check"></i>10 GB disk space availability</li>
							<li><i class="far fa-check"></i>50 GB NVMe SSD for use</li>
							<li><i class="far fa-check"></i>Free platform access for all</li>
							<li><i class="far fa-check"></i>Free lifetime updates facility</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 hover-box-wrap-price">
				<div class="price-box hover-box active">
					<span class="price-title d-inline-block">Professional Plan</span>
					<h2 class="price-number">$85<sub>/Per Month</sub></h2>
					<div class="price-info">
						<p>Lorem ipsum dolor sit am, consectetur adipiscing elit. Ut elit tellus.</p>
						<a class="w-100 d-inline-block price-btn text-center" href="pricing.html">Choose Plan</a>
						<ul>
							<li><i class="far fa-check"></i>500 GB disk space availability</li>
							<li><i class="far fa-check"></i>100 GB NVMe SSD for use</li>
							<li><i class="far fa-check"></i>Free platform access for all</li>
							<li><i class="far fa-check"></i>Free lifetime updates facility</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 hover-box-wrap-price">
				<div class="price-box hover-box show">
					<span class="price-title d-inline-block">Enterprise Plan</span>
					<h2 class="price-number">$199<sub>/Per Month</sub></h2>
					<div class="price-info">
						<p>Lorem ipsum dolor sit am, consectetur adipiscing elit. Ut elit tellus.</p>
						<a class="w-100 d-inline-block price-btn text-center" href="pricing.html">Choose Plan</a>
						<ul>
							<li><i class="far fa-check"></i>1000 GB disk space availability</li>
							<li><i class="far fa-check"></i>200 GB NVMe SSD for use</li>
							<li><i class="far fa-check"></i>Free platform access for all</li>
							<li><i class="far fa-check"></i>Free lifetime updates facility</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Price End -->
@endsection
