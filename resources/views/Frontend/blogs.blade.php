@extends('layouts.frontend')
@section('title') Blogs | Vertex Machineries @endsection
@section('content')
 <!-- Page Header Section Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Latest Blog</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure>
                                    <img src="/frontend/my-img/blog.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-tags">
                            <a href="/blog-details">OCT 25, 2025</a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-content-box">
                                
                                <div class="post-item-content">
                                    <h2><a href="/blog-details">The Future of Sustainable Architecture Building Green for Tomorrow</a></h2>
                                </div>
                            </div>
                            <div class="post-item-btn">
                                <a href="/blog-details" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure>
                                    <img src="/frontend/images/post-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-tags">
                            <a href="/blog-details">SEP 25, 2025</a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-content-box">
                                
                                <div class="post-item-content">
                                    <h2><a href="/blog-details">Bridging Aesthetics and Functionality in Building Design</a></h2>
                                </div>
                            </div>
                            <div class="post-item-btn">
                                <a href="/blog-details" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure>
                                    <img src="/frontend/images/post-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>

                        <div class="post-item-tags">
                            <a href="/blog-details">NOV 02, 2025</a>
                        </div>

                        <div class="post-item-body">
                            <div class="post-content-box">
                                
                                <div class="post-item-content">
                                    <h2><a href="/blog-details">Iconic Structures Lessons from Timeless Architectural Marvels</a></h2>
                                </div>
                            </div>
                            <div class="post-item-btn">
                                <a href="/blog-details" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
@endsection