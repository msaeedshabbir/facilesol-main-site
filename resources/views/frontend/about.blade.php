@extends('frontend.layouts.main')
@section('title', 'About')
@section('main-container')
<!-- Breadcrumb -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">About Us</h1>
                    <p class="text-white "><a href="{{url('/')}}">Home</a><i class="far fa-chevron-double-right"></i> About</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- About -->
<div class="about-area pt-120 pb-120">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6 col-xxl-6">
				<div class="about-img">
					<img class="w-100" src="{{url('frontend/images/about/about-img-2.png')}}" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-xxl-5">
				<div class="section-title mobt-60">
					<span>About our company</span>
					<h2>We are a best IT solution provider</h2>
					<p>We have been helping businesses with their IT needs since 2010. We are provide fast, reliable, outsourced onsite and remote IT support services</p>
					<div class="about-tab-wrap about-tab-wrap-white mt-5">
						<ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
							  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Our Mission</button>
							</li>
							<li class="nav-item" role="presentation">
							  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Our Vision</button>
							</li>
							<li class="nav-item" role="presentation">
							  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">History</button>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<p>At New Media Services, we aim to conquer the impossible. We pledge a commitment to teamwork between our staff and valued clients to ensure the growth and success of everyone.</p>
								<a class="common-btn white-blue mt-4" href="about-us.html">Learn More</a>
							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<p>At New Media Services, we aim to conquer the impossible. We pledge a commitment to teamwork between our staff and valued clients to ensure the growth and success of everyone.</p>
								<a class="common-btn white-blue mt-4" href="about-us.html">Learn More</a>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<p>At New Media Services, we aim to conquer the impossible. We pledge a commitment to teamwork between our staff and valued clients to ensure the growth and success of everyone.</p>
								<a class="common-btn white-blue mt-4" href="about-us.html">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About End -->
<!-- Countdown -->
<div class="about-number-area bg-color pt-120 pb-120 position-relative">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title  text-center ">
					<span>Fun facts about our company</span>
					<h2>Our success rate is shown by numbers</h2>
				</div>
			</div>
		</div>
        <div class="row mt-lg-4 mt-1 gy-4">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="count-box count-box-about">
                    <div class="count-number-box counter-item">
                        <h2>
                            <span class="odometer d-inline-block" data-odometer-final="12">.</span>
                        </h2>
                    </div>
                    <p>Year of establishment</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="count-box count-box-about">
                    <div class="count-number-box counter-item">
                        <h2>
                            <span class="odometer d-inline-block" data-odometer-final="75">.</span>
                            <em>K</em>
                        </h2>
                    </div>
                    <p>Of customers worldwide</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="count-box count-box-about">
                    <div class="count-number-box counter-item">
                        <h2>
                            <span class="odometer d-inline-block" data-odometer-final="63">.</span>
                            <em>K</em>
                        </h2>
                    </div>
                    <p>Countries with active client base</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="count-box count-box-about">
                    <div class="count-number-box counter-item">
                        <h2>
                            <span class="odometer d-inline-block" data-odometer-final="4.5">.</span>
                        </h2>
                    </div>
                    <p>Success rate of the company this year </p>
                </div>
            </div>
        </div>
	</div>
    <img class="start-0 top-0 position-absolute" src="{{url('frontend/images/shape/about.png')}}" alt="No Image Available">
</div>
<!-- Countdown End -->
<!-- Chart -->
<div class="chart-area pt-120 pb-120">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-xl-6 col-lg-7">
				<div class="section-title">
					<span>Why choose us</span>
					<h2>The world's best IT-solutions company</h2>
					<p>For efficient, knowledgeable IT support that addresses all of your business technology needs, from our professionals. We do things differently at reliable technology services</p>
				</div>
				<a class="common-btn white-blue mt-5" href="contact.html">Contact Us</a>
			</div>
			<div class="col-lg-5 mobt-60">
                <div class="progress-bar-wrap">
                    <div class="progress">
                       <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>Software Development</span><span>85%</span></div>
                    </div>
                    <div class="progress">
                       <div class="progress-bar" role="progressbar" style="width: 94%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>Digital Marketing</span><span>94%</span></div>
                    </div>
                    <div class="progress">
                       <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>Web Design</span><span>87%</span></div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
<!-- Chart End -->
<!-- Feature -->
<div class="feature-area pb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title  text-center ">
					<span>Outstanding IT features</span>
					<h2>Contains modern features for a better experience</h2>
				</div>
			</div>
		</div>
		<div class="row mt-lg-4 mt-1 gy-4 justify-content-xl-between justify-content-center align-items-center">
			<div class="col-xl-3 col-lg-12">
				<div class="feature-box text-center">
					<img src="{{url('frontend/images/icon/feature-icon-1.svg')}}" alt="No Image Available">
					<h2>Secure IT services</h2>
					<p>Provide secure IT services limited have been used.</p>
				</div>
				<div class="feature-box text-center">
					<img src="{{url('frontend/images/icon/feature-icon-2.svg')}}" alt="No Image Available">
					<h2>Fast communication</h2>
					<p>Fast communication for best  Internet service provider.</p>
				</div>
			</div>
			<div class="col-xl-5 col-lg-8">
				<div class="feature-img-wrap">
					<img class="w-100" src="{{url('frontend/images/icon/feature-img.png')}}" alt="No Image Available">
				</div>
			</div>
			<div class="col-xl-3 col-lg-12">
				<div class="feature-box text-center">
					<img src="{{url('frontend/images/icon/feature-icon-3.svg')}}" alt="No Image Available">
					<h2>Backup solutions</h2>
					<p>Quickly backup and restore for information when issues.</p>
				</div>
				<div class="feature-box text-center">
					<img src="{{url('frontend/images/icon/feature-icon-4.svg')}}" alt="No Image Available">
					<h2>Modern technology</h2>
					<p>Innovation of technology use computers and networks.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Feature End -->
<!-- Team -->
<div class="team-area bg-color pb-120 pt-120">
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
					<img class="w-100" src="{{url('frontend/images/team/team-dark-1.png')}}" alt="No Image Available">
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
					<img class="w-100" src="{{url('frontend/images/team/team-dark-2.png')}}" alt="No Image Available">
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
					<img class="w-100" src="{{url('frontend/images/team/team-dark-3.png')}}" alt="No Image Available">
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
					<img class="w-100" src="{{url('frontend/images/team/team-dark-4.png')}}" alt="">
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
					<img class="w-100" src="{{url('frontend/images/team/team-dark-5.png')}}" alt="No Image Available">
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
					<img class="w-100" src="{{url('frontend/images/team/team-dark-6.png')}}" alt="No Image Available">
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
					<img class="w-100" src="{{url('frontend/images/team/team-dark-7.png')}}" alt="No Image Available">
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
					<img class="w-100" src="{{url('frontend/images/team/team-dark-8.png')}}" alt="No Image Available">
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
<!-- FAQ -->
<div class="faq-area pt-120 pb-120">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5 ">
				<div class="section-title">
					<span>Need more information</span>
					<h2>Frequently asked questions</h2>
					<p>When we talk to clients about our IT services for their company, a few of the same questions come up.</p>
				</div>
				<a class="common-btn white-blue mt-5" href="faqs.html">Go To Faq</a>
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
<div class="testimonial-area pb-120 position-relative">
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
										<img src="{{url('frontend/images/testimonial-author-1.png')}}" alt="No Image Available">
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
										<img src="{{url('frontend/images/testimonial-author-2.png')}}" alt="No Image Available">
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
										<img src="{{url('frontend/images/testimonial-author-3.png')}}" alt="No Image Available">
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
										<img src="{{url('frontend/images/testimonial-author-1.png')}}" alt="No Image Available">
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
    <img class="start-0 top-0 position-absolute" src="{{url('frontend/images/shape/about.png')}}" alt="No Image Available">
</div>
<!-- Testimonial End -->
@endsection

