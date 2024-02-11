@extends('frontend.layouts.main')
@section('title', 'Blog')
@section('main-container')
<!-- Breadcrumb -->
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/blog.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">Our Blogs</h1>
                    <p class="text-white "><a href="{{url('/')}}">Home</a><i class="far fa-chevron-double-right"></i> Blog</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Blog  -->
<div class="blog-sidebar-area pt-120 pb-96">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-two-wrap">
                    <div class="blog-img overflow-hidden">
                        <img class="w-100" src="{{url('frontend/images/blog/blog-two-1.png')}}" alt="Image Not Found">
                    </div>
                    <div class="blog-info">
                        <div class="meta-wrap d-flex flex-wrap align-items-center">
                            <p><i class="far fa-user-circle"></i> By Adam Smith</p>
                            <p><i class="fal fa-calendar-minus"></i> Jan 20, 2023</p>
                            <p><a class="category-meta" href="blog-details.html">Technology</a></p>
                        </div>
                        <h2><a href="blog-details.html">Start and grow your business with AI ultimate upscale — a step-by-step guide: 4 use cases</a></h2>
                        <p>OpenAI just released the ChatGPT API. Here’s how some companies have powered their products with the ChatGPT API...</p>
                        <a class="d-inline-flex align-items-center blog-btn" href="blog-details.html">Read More <i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-two-wrap">
                    <div class="blog-img overflow-hidden">
                        <img class="w-100" src="{{url('frontend/images/blog/blog-two-2.png')}}" alt="Image Not Found">
                    </div>
                    <div class="blog-info">
                        <div class="meta-wrap d-flex flex-wrap align-items-center">
                            <p><i class="far fa-user-circle"></i> By Max Uddit</p>
                            <p><i class="fal fa-calendar-minus"></i> Jan 20, 2023</p>
                            <p><a class="category-meta" href="blog-details.html">Startup</a></p>
                        </div>
                        <h2><a href="blog-details.html">ChatGPT-4: Taking conversational AI to the next level with the advanced language generation and context-awareness</a></h2>
                        <p>Over the past few years, conversational AI has been evolving at an unprecedented rate, and ChatGPT has been at the forefront of this revolution...</p>
                        <a class="d-inline-flex align-items-center blog-btn" href="blog-details.html">Read More <i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-two-wrap">
                    <div class="blog-img overflow-hidden">
                        <img class="w-100" src="{{url('frontend/images/blog/blog-two-3.png')}}" alt="Image Not Found">
                    </div>
                    <div class="blog-info">
                        <div class="meta-wrap d-flex flex-wrap align-items-center">
                            <p><i class="far fa-user-circle"></i> By William Sony</p>
                            <p><i class="fal fa-calendar-minus"></i> Jan 20, 2023</p>
                            <p><a class="category-meta" href="blog-details.html">Tech</a></p>
                        </div>
                        <h2><a href="blog-details.html">Relational vs non-relational databases, querying data and what product managers really need to know</a></h2>
                        <p>Welcome to part five of a series of articles covering the technical knowledge that every Product Manager ought to know. Today I’m going to be talking about...</p>
                        <a class="d-inline-flex align-items-center blog-btn" href="blog-details.html">Read More <i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-lg-12">
                        <ul class="pagination-list text-md-center">
                            <li><a href="#"><i class="far fa-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="far fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mobt-60">
                <div class="sidebar-wrap">
                    <div class="sidebar-box">
                        <form action="#" class="sidebar-search position-relative">
                            <input class="w-100" type="search" placeholder="Type to search...">
                            <i class="far fa-search position-absolute top-50 translate-middle-y"></i>
                        </form>
                    </div>
                    <div class="sidebar-box">
                        <h3 class="sidebar-title position-relative d-inline-block">Blog Categories</h3>
                        <ul class="sidebar-category-list">
                            <li><a href="#">Technology <span>(83)</span></a></li>
                            <li><a href="#">Business & Marketing <span>(18)</span></a></li>
                            <li><a href="#">Artificial Intelligence <span>(23)</span></a></li>
                            <li><a href="#">Programming <span>(10)</span></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <h3 class="sidebar-title position-relative d-inline-block">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="single-recent-post d-flex align-items-center">
                                <a class="flex-shrink-0" href="blog-details.html"><img src="{{url('frontend/images/blog/recent-post-1.png')}}" alt="Image Not Found"></a>
                                <div class="recent-post-info">
                                    <p><i class="fal fa-calendar-minus"></i> Jan 20, 2023</p>
                                    <h4><a href="blog-details.html">Six ‘what ifs’ that could transformdigital agency</a></h4>
                                </div>
                            </div>
                            <div class="single-recent-post d-flex align-items-center">
                                <a class="flex-shrink-0" href="blog-details.html"><img src="{{url('frontend/images/blog/recent-post-2.png')}}" alt="Image Not Found"></a>
                                <div class="recent-post-info">
                                    <p><i class="fal fa-calendar-minus"></i> Jan 20, 2023</p>
                                    <h4><a href="blog-details.html">Case story: How to the design avatar generator</a></h4>
                                </div>
                            </div>
                            <div class="single-recent-post d-flex align-items-center">
                                <a class="flex-shrink-0" href="blog-details.html"><img src="{{url('frontend/images/blog/recent-post-3.png')}}" alt="Image Not Found"></a>
                                <div class="recent-post-info">
                                    <p><i class="fal fa-calendar-minus"></i> Jan 20, 2023</p>
                                    <h4><a href="blog-details.html">Build a digital agency website in 4 easy steps</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <h3 class="sidebar-title position-relative d-inline-block">Tags</h3>
                        <ul class="sidebar-tag-list">
                            <li><a href="#">Article</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Digital</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">UI/UX</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">NFT</a></li>
                            <li><a href="#">Crypto</a></li>
                            <li><a href="#">Finance</a></li>
                            <li><a href="#">Trends</a></li>
                            <li><a href="#">Web</a></li>
                            <li><a href="#">Asset</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
