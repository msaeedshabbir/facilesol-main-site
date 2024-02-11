@extends('frontend.layouts.main')
@section('title', 'Terms & Conditions')
@section('main-container')
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/terms.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">Terms & Conditions</h1>
                    <p class="text-white "><a href="{{url('/terms')}}">Home</a><i class="far fa-chevron-double-right"></i> Terms & Conditions</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="terms-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="nav flex-column terms-wrap nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active d-flex align-items-center" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="d-inline-flex justify-content-center align-items-center">1</span> Terms and Conditions</button>
                    <button class="nav-link d-flex align-items-center" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="d-inline-flex justify-content-center align-items-center">2</span> Privacy Policy</button>
                    <button class="nav-link d-flex align-items-center" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="d-inline-flex justify-content-center align-items-center">3</span> User Policy</button>
                </div>
            </div>
            <div class="col-lg-7 mobt-60">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <article>
                            <div class="section-title mb-4">
                                <h2>Terms of Service</h2>
                                <p>Below are our Terms of Service, which outline a lot of legal is goodies, but the bottom line is it’s our aim to always take care of both you, as customer. These terms apply to the website, emails, or any other communication.</p>
                            </div>
                            <h2 class="article-title">Licensing Terms</h2>
                            <ul class="terms-list">
                                <li>The Standard License grants you a non-exclusive right to make use of Theme you have purchased.</li>
                                <li>You are licensed to use the Item to create one and the End Product can be distributed for Free.</li>
                                <li>If a Theme contains code, images, or content sourced from elsewhere under that item retains its original license.</li>
                                <li>This license can be terminated if you breach it and you lose the right to distribute the End Product until the Theme has been fully removed from the End Product.</li>
                                <li>The author of the Theme retains ownership of the Theme, but grants you the license on these terms.</li>
                            </ul>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <article>
                            <div class="section-title mb-4">
                                <h2>Privacy Policy</h2>
                                <p>When you visit the Site, we automatically collect certain information about your device, including information about your web browser, IP address, for time zone, and some of the cookies that are installed on your device.</p>
                            </div>
                            <h2 class="article-title">Standard License</h2>
                            <ul class="terms-list">
                                <li>The Standard License grants you a non-exclusive right to make use of Theme you have purchased.</li>
                                <li>ou are licensed to use the Item to create one End Product for yourself or for one client, and the End Product can be distributed for Free.</li>
                                <li>If a Theme contains code, images, or content sourced from else where under a different license, that item retains its original license. Thelicense for the code, images, or content will be noted by the Theme author. You are responsible for adhering to the original license or clearing it with the author of the code, image, or content.</li>
                            </ul>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <article>
                            <div class="section-title mb-4">
                                <h2>User Policy</h2>
                                <p>A user account policy is a document which outlines the requirements for requesting and maintaining an account on computer systems or networks, typically within an organization. It is very important for large sites.</p>
                            </div>
                            <h2 class="article-title">Licensing Terms</h2>
                            <ul class="terms-list">
                                <li>Self-policing of passwords and access codes as set forth above.</li>
                                <li>Respecting authorial integrity and the intellectual property rights.</li>
                                <li>Respecting and protecting the confidentiality, integrity, and availability of all University IT Resources.</li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
