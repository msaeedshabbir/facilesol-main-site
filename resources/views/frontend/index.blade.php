@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
<!-- Hero -->
<div class="hero-area position-relative ">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 order-lg-0 order-1 mobt-60">
				<div class="hero-info">
					<span class="text-white d-inline-block">Efficiency Redefined, Solutions Perfected</span>
					<h1 class="text-white">Facile Solutions</h1>
					<p class="text-white">Facile Solutions is a distinguished global software provider, specializing in delivering comprehensive IT solutions customized to meet the unique requirements of your business. Our portfolio includes cutting-edge mobile, web, and bespoke software solutions meticulously crafted to deliver tangible results and optimize overall business efficiency.</p>
					<div class="hero-btn-wrap">
						<a class="common-btn white-bg " href="{{url('/about')}}">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 order-lg-1 order-0">
				<div class="hero-img-wrap">
					<img class="w-100" src="{{url('frontend/images/hero/hero-img-1.png')}}" alt="Image Not Found">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Hero End -->
<!-- About -->
<div class="about-area mt-120 mb-120">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-5">
				<div class="about-img">
					<img class="w-100" src="{{url('frontend/images/about/about-img-1.png')}}" alt="Image Not Found">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title mobt-60">
					<span>Featured Solution</span>
					<h2>POS solution for your business</h2>
					<p>Experience the freedom of choice, efficiency, and adaptability with our industry-tailored POS solutions, positioning your business for success in the ever-evolving marketplace.</p>
					<a class="common-btn white-blue mt-4" href="{{url('/pos')}}">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About End -->
<!-- Countdown -->
<div class="countdown-area">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-12 col-xl-5 col-xxl-5">
				<div class="section-title style-two text-center text-xl-start">
					<span>Fun Facts about Facile Solutions</span>
					<h2>Byte-sized Brilliance.</h2>
				</div>
			</div>
			<div class="col-lg-12 col-xl-7 col-xxl-6  mt-xl-0 mt-5">
				<div class="row row-cols-1 row-cols-md-3">
					<div class="col">
						<div class="count-box text-center ">
							<svg viewBox="0 0 46 38" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M33.4167 35.6667H43.8334V31.5C43.8334 28.0483 41.0351 25.25 37.5834 25.25C35.5925 25.25 33.8191 26.1809 32.6745 27.6311M33.4167 35.6667H12.5834M33.4167 35.6667V31.5C33.4167 30.1329 33.1533 28.8272 32.6745 27.6311M12.5834 35.6667H2.16669V31.5C2.16669 28.0483 4.96491 25.25 8.41669 25.25C10.4075 25.25 12.181 26.1809 13.3255 27.6311M12.5834 35.6667V31.5C12.5834 30.1329 12.8467 28.8272 13.3255 27.6311M13.3255 27.6311C14.8615 23.7938 18.6142 21.0834 23 21.0834C27.3858 21.0834 31.1386 23.7938 32.6745 27.6311M29.25 8.58337C29.25 12.0352 26.4518 14.8334 23 14.8334C19.5482 14.8334 16.75 12.0352 16.75 8.58337C16.75 5.13159 19.5482 2.33337 23 2.33337C26.4518 2.33337 29.25 5.13159 29.25 8.58337ZM41.75 14.8334C41.75 17.1346 39.8845 19 37.5834 19C35.2822 19 33.4167 17.1346 33.4167 14.8334C33.4167 12.5322 35.2822 10.6667 37.5834 10.6667C39.8845 10.6667 41.75 12.5322 41.75 14.8334ZM12.5834 14.8334C12.5834 17.1346 10.7179 19 8.41669 19C6.1155 19 4.25002 17.1346 4.25002 14.8334C4.25002 12.5322 6.1155 10.6667 8.41669 10.6667C10.7179 10.6667 12.5834 12.5322 12.5834 14.8334Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<div class="count-number-box counter-item">
								<h2 class="text-white" >
									<span class="odometer d-inline-block" data-odometer-final="20">.</span>
									<em>+</em>
								</h2>
							</div>
							<p class="text-white">Creative Members</p>
						</div>
					</div>
					<div class="col">
						<div class="count-box text-center ">
							<svg viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16.1324 31.4167H25.8677M21 2.25V4.33333M34.2583 7.74175L32.7851 9.21489M39.7501 20.9999H37.6668M4.33346 20.9999H2.25012M9.2149 9.21489L7.74176 7.74175M13.6343 28.3657C9.56635 24.2978 9.56635 17.7023 13.6343 13.6344C17.7023 9.56639 24.2977 9.56639 28.3657 13.6344C32.4337 17.7023 32.4337 24.2978 28.3657 28.3657L27.2259 29.5055C25.9074 30.824 25.1667 32.6123 25.1667 34.477V35.5833C25.1667 37.8845 23.3012 39.75 21 39.75C18.6988 39.75 16.8333 37.8845 16.8333 35.5833V34.477C16.8333 32.6123 16.0926 30.824 14.7741 29.5055L13.6343 28.3657Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<div class="count-number-box counter-item">
								<h2 class="text-white">
									<span class="odometer d-inline-block" data-odometer-final="400">.</span>
									<em>+</em>
								</h2>
							</div>
							<p class="text-white">Successful Projects</p>
						</div>
					</div>
					<div class="col">
						<div class="count-box text-center">
							<svg viewBox="0 0 38 42" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.0834 16.8333V2.25L2.33337 25.1667H16.9167L16.9167 39.75L35.6667 16.8333L21.0834 16.8333Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<div class="count-number-box counter-item">
								<h2 class="text-white" >
									<span class="odometer d-inline-block" data-odometer-final="50">.</span>
									<em>+</em>
								</h2>
							</div>
							<p class="text-white">Satisfied Customers</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Countdown End -->
<!-- Services -->
<div class="services-area pt-120 pb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Seamless Solutions for a Connected World.</span>
					<h2>Our Services</h2>
					<p>At Facile Solutions, we offer a range of innovative services designed to meet the diverse needs of our clients. </p>
				</div>
			</div>
		</div>
		<div class="row gy-4 mt-lg-4 mt-1" >
			<div class="col-lg-4 col-md-6">
				<div class="service-box text-center">
					<img src="{{url('frontend/images/service/service-icon-six-1.svg')}}" alt="Image Not Found">
					<h2>Secure POS Solutions</h2>
					<p>Network Security protects your network and data from breaches, intrusions and other threats. This is a vast </p>
					<a class="d-inline-flex align-items-center" href="{{url('/services')}}">Read More <i class="fas fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-box text-center">
					<img src="{{url('frontend/images/service/service-icon-six-4.svg')}}" alt="Image Not Found">
					<h2>Secure Web Apps</h2>
					<p>Network Security protects your network and data from breaches, intrusions and other threats. This is a vast </p>
					<a class="d-inline-flex align-items-center" href="{{url('/services')}}">Read More <i class="fas fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-box text-center">
					<img src="{{url('frontend/images/service/service-icon-5.svg')}}" alt="Image Not Found">
					<h2>Mobile Apps</h2>
					<p>Technically a web solution is a program distributed over a network & accessible through a common web browser.</p>
					<a class="d-inline-flex align-items-center" href="{{url('/services')}}">Read More <i class="fas fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-box text-center">
					<img src="{{url('frontend/images/service/service-icon-4.svg')}}" alt="Image Not Found">
					<h2>Cloud Security</h2>
					<p>These services are designed to provide easy, affordable access to applications and resources, without the need</p>
					<a class="d-inline-flex align-items-center" href="{{url('/services')}}">Read More <i class="fas fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-box text-center">
					<img src="{{url('frontend/images/service/service-icon-5.svg')}}" alt="Image Not Found">
					<h2>Application Security</h2>
					<p>Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web.</p>
					<a class="d-inline-flex align-items-center" href="{{url('/services')}}">Read More <i class="fas fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-box text-center">
					<img src="{{url('frontend/images/service/service-icon-6.svg')}}" alt="Image Not Found">
					<h2>Risk Management</h2>
					<p>Digital marketing  called online marketing, is the promotion of brands to the connect with potential customers</p>
					<a class="d-inline-flex align-items-center" href="{{url('/services')}}">Read More <i class="fas fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Services End -->
<!-- Chose us -->
<div class="chose-area pb-120">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-5 order-lg-0 order-1 mobt-60">
				<div class="section-title">
					<span>Why choose us</span>
					<h2>We promise high quality IT services</h2>
					<p>Supporting the growth of our clients is a fundamental reason why our IT Services is the chosen Austin IT partner for many</p>
				</div>
				<div class="chart-wrap d-flex align-items-center flex-wrap">
					<div class="circle_percent" data-percent="90">
						<div class="circle_inner">
							<div class="round_per"></div>
						</div>
					</div>
					<div class="chart-content">
						<h2>Success Rate </h2>
						<p>We help you achieve your goals</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 order-lg-1 order-0">
				<div class="chose-img">
					<img src="{{url('frontend//images/chose-img.png')}}" alt="Image Not Found">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Chose us End -->
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
<!-- team -->
<div class="team-area pb-120 pt-120">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5 order-lg-0 order-1 mobt-60">
				<div class="section-title">
					<span>Our creative team</span>
					<h2>Meet members of our creative team</h2>
					<p>We work to create the most attractive & meaningful place for small businesses. Our Team always ready to help you.</p>
				</div>
				<ul class="team-work-list mt-4 mb-5">
					<li><i class="fas fa-badge-check "></i> A team consisting of skilled members</li>
					<li><i class="fas fa-badge-check"></i> Ready to help you 24/7  support</li>
				</ul>
				<a class="common-btn white-blue" href="{{url('/team')}}">View All Members</a>
			</div>
			<div class="col-lg-6 order-lg-1 order-0">
				<div class="row gy-4">
					<div class="col-xl-4 col-6">
						<div class="team-box text-center">
							<div class="team-img overflow-hidden ">
								<img class="w-100" src="{{ url('frontend//images/team/team-img-1.png') }}" alt="Image Not Found">
							</div>
							<div class="team-info">
								<h2>Arlene McCoy</h2>
								<p>CEO @ Company</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-6">
						<div class="team-box text-center">
							<div class="team-img overflow-hidden ">
								<img class="w-100" src="{{url('frontend/images/team/team-img-2.png')}}" alt="Image Not Found">
							</div>
							<div class="team-info">
								<h2>Theresa Webb</h2>
								<p>Project Manager</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-6">
						<div class="team-box text-center">
							<div class="team-img overflow-hidden ">
								<img class="w-100" src="{{url('frontend//images/team/team-img-3.png')}}" alt="Image Not Found">
							</div>
							<div class="team-info">
								<h2>Floyd Miles</h2>
								<p>SEO Manager</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-6">
						<div class="team-box text-center">
							<div class="team-img overflow-hidden ">
								<img class="w-100" src="{{url('frontend/images/team/team-img-4.png')}}" alt="Image Not Found">
							</div>
							<div class="team-info">
								<h2>Darlene Robertson</h2>
								<p>Web Developer</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-6">
						<div class="team-box text-center">
							<div class="team-img overflow-hidden ">
								<img class="w-100" src="{{url('frontend/images/team/team-img-5.png')}}" alt="Image Not Found">
							</div>
							<div class="team-info">
								<h2>Bessie Cooper</h2>
								<p>Product Designer</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-6">
						<div class="team-box text-center">
							<div class="team-img overflow-hidden ">
								<img class="w-100" src="{{url('frontend//images/team/team-img-6.png')}}" alt="Image Not Found">
							</div>
							<div class="team-info">
								<h2>Jerome Bell</h2>
								<p>HTML Developer</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- team End -->

<!-- FAQ -->
<div class="faq-area pb-120">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5 ">
				<div class="section-title">
					<span>Need more information</span>
					<h2>Frequently asked questions</h2>
					<p>When we talk to clients about our IT services for their company, a few of the same questions come up.</p>
				</div>
				<a class="common-btn white-blue mt-5" href="{{url('/faqs')}}">Go To Faq</a>
			</div>
			<div class="col-lg-6 mobt-60">
				<div class="accordion faq-wrap" id="accordionExample">
					<div class="accordion-item">
					  <h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							How can we help your business?
						</button>
					  </h2>
					  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							Our IT support services, customers can be assisted from multiple channels & it gives end-users more for they can reach a business.
						</div>
					  </div>
					</div>
					<div class="accordion-item">
					  <h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							How is our work process simplified?
						</button>
					  </h2>
					  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							Our IT support services, customers can be assisted from multiple channels & it gives end-users more for they can reach a business.
						</div>
					  </div>
					</div>
					<div class="accordion-item">
					  <h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							How does our IT support policy work?
						</button>
					  </h2>
					  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							Our IT support services, customers can be assisted from multiple channels & it gives end-users more for they can reach a business.
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FAQ End -->
<!-- Testimonial -->
<div class="testimonial-area bg-color pb-120 pt-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Testimonials</span>
					<h2>See what people are saying about us</h2>
				</div>
			</div>
		</div>
		<div class="row mt-60">
			<div class="col-lg-12">
				<div class="swiper testimonial-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testimonial-box">
								<ul>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
								</ul>
								<h3>Excellent service</h3>
								<p>“Excellent IT service provider. The team contacted me quickly and dealt with my issue promptly & professionally. I can highly recommend this company.”</p>
								<div class="testimonial-author-wrap d-flex align-items-center">
									<div class="testimonial-author-img overflow-hidden">
										<img src="{{url('frontend/images/testimonial-author-1.png')}}" alt="Image Not Found">
									</div>
									<div class="testimonial-author-info">
										<p>Karen Lynn</p>
										<span class="d-inline-block">Founder @ Company</span>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-box">
								<ul>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
								</ul>
								<h3>Totally reliable IT service</h3>
								<p>“I signed up with IT solutions with some trepidation as I had previously been many relying on an American-based but this company providing reliable.”</p>
								<div class="testimonial-author-wrap d-flex align-items-center">
									<div class="testimonial-author-img overflow-hidden">
										<img src="{{url('frontend/images/testimonial-author-2.png')}}" alt="Image Not Found">
									</div>
									<div class="testimonial-author-info">
										<p>Dianne Russell</p>
										<span class="d-inline-block">Marketing Expert</span>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-box">
								<ul>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
								</ul>
								<h3>Best company ever</h3>
								<p>“I have been looking for a good on line PC support company for some time &found it  paid for a one hour remote session which cleaned up laptop.”</p>
								<div class="testimonial-author-wrap d-flex align-items-center">
									<div class="testimonial-author-img overflow-hidden">
										<img src="{{ url('frontend/testimonial-author-3.png')}}" alt="Image Not Found">
									</div>
									<div class="testimonial-author-info">
										<p>Marvin McKinney</p>
										<span class="d-inline-block">College Student</span>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-box">
								<ul>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
									<li><a href="#"><i class="fas fa-star"></i></a></li>
								</ul>
								<h3>Excellent service</h3>
								<p>“Excellent IT service provider. The team contacted me quickly and dealt with my issue promptly & professionally. I can highly recommend this company.”</p>
								<div class="testimonial-author-wrap d-flex align-items-center">
									<div class="testimonial-author-img overflow-hidden">
										<img src="{{url('frontend/images/testimonial-author-1.png')}}" alt="Image Not Found">
									</div>
									<div class="testimonial-author-info">
										<p>Karen Lynn</p>
										<span class="d-inline-block">Founder @ Company</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="testimonial-pagination"></div>
			</div>
		</div>
	</div>
</div>
<!-- Testimonial End -->
<!-- Blog -->
<div class="blog-area pb-96 pt-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Our latest news</span>
					<h2>Discover our latest articles and insights</h2>
				</div>
			</div>
		</div>
		<div class="row mt-60 ">
			<div class="col-xl-4 col-md-6">
				<div class="blog-box">
					<div class="blog-img overflow-hidden position-relative">
						<a href="{{url('/blog')}}">
							<img class="w-100" src="{{url('frontend/images/blog/blog-1.png')}}" alt="Image Not Found">
							<img class="w-100" src="{{url('frontend/images/blog/blog-1.png')}}" alt="Image Not Found">
						</a>
					</div>
					<div class="blog-info">
						<h2><a href="{{url('/blog')}}">Start and grow your business with AI: 4 use cases</a></h2>
						<p>Open AI just released with the ChatGPT API. Here’s how some companies have...</p>
					</div>
					<div class="blog-meta d-flex align-items-center">
						<div class="blog-author-img overflow-hidden">
							<img src="{{url('frontend/images/blog/author-1.png')}}" alt="Image Not Found">
						</div>
						<div class="blog-author-info">
							<h4>Karen Lynn</h4>
							<ul>
								<li>March 25,2023</li>
								<li>3 min read</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6">
				<div class="blog-box">
					<div class="blog-img overflow-hidden position-relative">
						<a href="{{url('/blog')}}">
							<img class="w-100" src="{{url('frontend/images/blog/blog-2.png')}}" alt="Image Not Found">
							<img class="w-100" src="{{url('frontend/images/blog/blog-2.png')}}" alt="Image Not Found">
						</a>
					</div>
					<div class="blog-info">
						<h2><a href="{{url('/blog')}}">How we cut the rate of GPT hallucinations from 20%...</a></h2>
						<p>Instead of fine-tuning, we used combination of prompt chaining post...</p>
					</div>
					<div class="blog-meta d-flex align-items-center">
						<div class="blog-author-img overflow-hidden">
							<img src="{{url('frontend/images/blog/author-2.png')}}" alt="Image Not Found">
						</div>
						<div class="blog-author-info">
							<h4>Abby Hadid</h4>
							<ul>
								<li>March 25,2023</li>
								<li>5 min read</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6">
				<div class="blog-box">
					<div class="blog-img overflow-hidden position-relative">
						<a href="{{url('/blog')}}">
							<img class="w-100" src="{{url('frontend/images/blog/blog-3.png')}}" alt="Image Not Found">
							<img class="w-100" src="{{url('frontend/images/blog/blog-3.png')}}" alt="Image Not Found">
						</a>
					</div>
					<div class="blog-info">
						<h2><a href="{{url('/blog')}}">How we upgraded frontend architecture for performance...</a></h2>
						<p>Introduction As a company that values user experience, we realized that our...</p>
					</div>
					<div class="blog-meta d-flex align-items-center">
						<div class="blog-author-img overflow-hidden">
							<img src="{{url('frontend/images/blog/author-3.png')}}" alt="Image Not Found">
						</div>
						<div class="blog-author-info">
							<h4>Navneet Sheik</h4>
							<ul>
								<li>March 25,2023</li>
								<li>1 min read</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog End -->
@endsection
