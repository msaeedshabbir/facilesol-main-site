@extends('frontend.layouts.main')
@section('title', 'Team Memeber Details')
@section('main-container')
<!-- Breadcrumb -->
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/team-details.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">Team Details</h1>
                    <p class="text-white "><a href="{{url('/')}}">Home</a><i class="far fa-chevron-double-right"></i> Team Details</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Team Details Article -->
<div class="team-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-details-wrap">
                    <div class="row justify-content-between">
                        <div class="col-lg-4">
                            <img class="w-100 team-details-img" src="assets/images/team/team-details.png" alt="">
                        </div>
                        <div class="col-lg-7 mobt-60">
                            <article>
                                <div class="section-title mb-1">
                                    <span>Learn about Leslie Alexander</span>
                                    <h2>Leslie Alexander</h2>
                                </div>
                                <h2 class="article-title">SEO Manager</h2>
                                <p class="mb-3">My name is Leslie Alexander. In my 6 years of work experience in SEO, I have gain designed digital experiences for various companies.</p>
                                <p>My motivation has always been to understand and learn from people, which is why in my professional development, I have focused for  my attention on working in the area of ​​user experience design.</p>
                            </article>
                            <div class="details-social-wrap d-flex align-content-center justify-content-between mt-5 flex-column flex-md-row">
                                <ul class="social d-flex align-items-center mb-4 mb-md-0">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                                <a class="common-btn white-blue text-center" href="contact.html">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-5  mt-1 gy-4 justify-content-between">
            <div class="col-lg-4 col-sm-6">
                <h2 class="article-title">Tools</h2>
                <ul class="terms-list">
                    <li>Develop & execute successful SEO strategies</li>
                    <li>Conduct keyword research to guide content</li>
                    <li>Technical SEO issues & recommend fixes</li>
                    <li>Optimize website content, landing pages</li>
                    <li>Direct off-page optimization projects (e.g. link-building)</li>
                    <li>Collect data and report on traffic, rankings</li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h2 class="article-title">Knowledge</h2>
                <ul class="terms-list">
                    <li>SE Ranking</li>
                    <li>MOZ Local</li>
                    <li>Serenata</li>
                    <li>AgencyAnalytics</li>
                    <li>Raven Tools</li>
                    <li>Invasion</li>
                    <li>BrightEdge</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h2 class="article-title">Skills</h2>
                <ul class="terms-list">
                    <li>Knowledge of standard SEO practices</li>
                    <li>Knowledge of HTML/CSS</li>
                    <li>Good communication skills</li>
                    <li>Collaboration and teamwork</li>
                    <li>Experience with SEO reporting</li>
                    <li>Strong organizational and leadership skills</li>
                    <li>Analytical mindset with numerical aptitude</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Team Details Article End -->
@endsection
