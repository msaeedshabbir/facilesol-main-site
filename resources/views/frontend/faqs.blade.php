@extends('frontend.layouts.main')
@section('title', 'FAQs')
@section('main-container')
<!-- Breadcrumb -->
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/faq.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">FAQs</h1>
                    <p class="text-white "><a href="{{url('/')}}">Home</a><i class="far fa-chevron-double-right"></i> FAQs</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- FAQ -->
<div class="faq-dark pt-120 pb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<span>Do you have any questions?</span>
					<h2>If you have to know anything you can ask</h2>
				</div>
			</div>
		</div>
		<div class="row mt-60">
			<div class="col-lg-6">
				<div class="accordion faq-wrap faq-wrap-page" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Q. Are we too small for managed IT services?
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
								Q. Are you focusing on cyber security?
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
								Q. Are IT services benefiting my business?
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
			<div class="col-lg-6 mobt-24">
				<div class="accordion faq-wrap faq-wrap-page" id="accordionExample-two">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							Q. How can we help your provide IT service?
						  </button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample-two">
						  <div class="accordion-body">
							  Our IT support services, customers can be assisted from multiple channels & it gives end-users more for they can reach a business.
						  </div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							Q. How is our work process simplified?
						  </button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample-two">
						  <div class="accordion-body">
							  Our IT support services, customers can be assisted from multiple channels & it gives end-users more for they can reach a business.
						  </div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingSix">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							Q. How does our IT support policy work?
						  </button>
						</h2>
						<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample-two">
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
@endsection
