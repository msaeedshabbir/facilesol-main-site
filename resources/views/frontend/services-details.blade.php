@extends('frontend.layouts.main')
@section('title', 'Service Details')
@section('main-container')
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/service-details.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">IT Management</h1>
                    <p class="text-white "><a href="{{url('/')}}">Home</a><i class="far fa-chevron-double-right"></i> Service Details</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="details-area pt-120 pb-120">
    <div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span>IT Management</span>
					<h2>Managing & controlling all your IT-based activities</h2>
				</div>
			</div>
		</div>
        <div class="row mt-60 justify-content-center">
            <div class="col-lg-11">
                <img class="w-100 mb-3" src="assets/images/service/service-details-img.png" alt="">
                <article>
                    <h2 class="article-title">What is known as IT management?</h2>
                    <p>Information technology service management (ITSM) is the activities that are performed by an organization to design, build, deliver, operate and control information technology (IT) services offered to customers.</p>
                    <p class="mt-3">IT management refers to the monitoring and administration of an organization's information technology systems: hardware, software and networks. IT management focuses on how to make information systems operate efficiently. Just as important, it's about helping people work better.</p>
                    <h2 class="article-title mt-4">What is known as IT management?</h2>
                    <p>IT management refers to the monitoring and administration of an organization's information technology systems: hardware, software and networks. IT management focuses on how to make information systems operate efficiently. Just as important, it's about helping people work better.</p>
                    <ul class="team-work-list mt-4 mb-5">
                        <li><i class="fas fa-badge-check"></i> Reduce operational costs & Improve skills</li>
                        <li><i class="fas fa-badge-check"></i> Risk-free implementation of IT changes</li>
                        <li><i class="fas fa-badge-check"></i> Improve accountability through standardization</li>
                        <li><i class="fas fa-badge-check"></i> Improve accountability within business functions</li>
                        <li><i class="fas fa-badge-check"></i> Improve visibility into operations & Improve performance</li>
                    </ul>
                    <h2 class="article-title ">What is the goal of IT managed services?</h2>
                    <p>Managed services, on the other hand, offer constant and consistent monitoring of your systems with the goal of preventing failures wherever possible. Remote monitoring means your service provider can always see what's going on and fix it directly.</p>
                </article>
            </div>
        </div>
    </div>
</div>
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
<div class="services-area mt-120 mb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Popular Services</span>
					<h2>We provide all types of professional IT services</h2>
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
						<a class="d-inline-flex align-items-center" href="services.html">Read More <i class="fas fa-long-arrow-right"></i></a>
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
						<a class="d-inline-flex align-items-center" href="services.html">Discover More <i class="fas fa-long-arrow-right"></i></a>
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
						<a class="d-inline-flex align-items-center" href="services.html">Discover More <i class="fas fa-long-arrow-right"></i></a>
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
						<a class="d-inline-flex align-items-center" href="services.html">Discover More <i class="fas fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
