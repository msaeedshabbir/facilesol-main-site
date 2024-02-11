@extends('frontend.layouts.main')
@section('title', 'FS POS')
@section('main-container')
<div class="breadcrumb-area" style="background: linear-gradient(rgba(0, 38, 153, 0.8) 100%, rgba(0, 38, 153, 0.8) 100%), url({{url('frontend/images/breadcrumb/project-details.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-info text-center">
                    <h1 class="text-white">Point of Sale Solution</h1>
                    <p class="text-white "><a href="{{ url('/') }}">Home</a><i class="far fa-chevron-double-right"></i> FS POS</p>
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
					<span>Learn about project</span>
					<h2>CMS's  best software solutions provide</h2>
				</div>
			</div>
		</div>
        <div class="row mt-60 justify-content-center">
            <div class="col-lg-11">
                <img class="w-100 mb-4" src="{{ url('frontend/images/project/project-details.png') }}" alt="No Image Available">
                <ul class="project-duration d-flex justify-content-between flex-wrap">
                    <li><span>Client:</span> Adam Smith</li>
                    <li><span>Category:</span> Web Development</li>
                    <li><span>Duration:</span> 2 Week</li>
                    <li><span>Website Link:</span> example@gmail.com</li>
                </ul>
                <article>
                    <h2 class="article-title">Project overview :</h2>
                    <p>A content management system helps you create, manage, and publish content on the web. It also keep content organized and accessible so it can be used and repurposed effectively. There are various kinds of content management systems available—from cloud-based to a headless CMS—to meet every audience need.</p>
                    <p class="mt-3">CMS provides user-friendly features for easy editing and is compatible with installing plugins and tools that provide even more features for advanced functions. API CMS's are built to have an excellent user-friendly interface that is easy to use.</p>
                    <h2 class="article-title mt-4">What we did for this project :</h2>
                    <p>A content management system (CMS) is an application that is used to manage content, allowing multiple contributors to create, edit and publish. Content in a CMS is typically stored in a database and displayed in a presentation layer based on a set of templates like a website.</p>
                    <ul class="team-work-list mt-4 mb-5">
                        <li><i class="fas fa-badge-check"></i> Creating and editing content</li>
                        <li><i class="fas fa-badge-check"></i> Workflows, reporting, and content organization</li>
                        <li><i class="fas fa-badge-check"></i> User and role-based administration and security</li>
                        <li><i class="fas fa-badge-check"></i> Multilingual content capabilities</li>
                        <li><i class="fas fa-badge-check"></i> Flexibility, scalability, and performance and analysis</li>
                    </ul>
                    <h2 class="article-title ">Project results :</h2>
                    <p>Having a content management system for your website allows you to have control of your content. It means having the ability to update, change or delete any images, text, video, or audio. It allows you to keep your site organized, up to date and looking.</p>
                    <div class="related-project pt-5 mt-5">
                        <h2 class="article-title">Related Project:</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suf alteration in some form, by injected humour, or randomized words which don't look even slightly believable.</p>
                        <div class="row mt-2 gy-4">
                            <div class="col-sm-6">
                                <img class="w-100" src="{{ url('frontend/images/project/related-1.png') }}" alt="No Image Available">
                            </div>
                            <div class="col-sm-6">
                                <img class="w-100" src="{{ url('frontend/images/project/related-2.png') }}" alt="No Image Available">

                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- Details Article End -->
@endsection
