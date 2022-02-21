@extends('base')
@section('title', ' Blog')


@section('main')
    <!-- =========================== 3. Page Header Section =========================================== -->

    <x-page-header />

    <!-- =========================== 4. Blog Section =========================================== -->

    <section class="blog-area">
        <div class="container">
            <div class="section-heading text-center mx-auto">
                <h2>Latest Posts</h2>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you.</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-01.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">Why you should hire UI/UX Guy before work.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-02.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">A good website starts with a good idea and great people.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-03.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">A good website starts with a good idea and great people.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-04.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">Why you should hire UI/UX Guy before work.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-05.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">A good website starts with a good idea and great people.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-06.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">A good website starts with a good idea and great people.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-07.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">Why you should hire UI/UX Guy before work.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-08.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">A good website starts with a good idea and great people.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href=" {{ url('blog-info') }} "><img src="assets/images/blog/post-09.png" alt="Habu"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href=" {{ url('blog-info') }} ">News</a>
                            <h2><a href=" {{ url('blog-info') }} ">A good website starts with a good idea and great people.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href=" {{ url('blog-info') }} "><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-auto mt-60">
                    <a href=" {{ url('blog-info') }} " class="wow animate__animated animate__flipInX large-blue-button">Load More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== 5. Subscribe Section =========================================== -->

    <div class="custom-projects">
        <div class="container d-lg-flex align-items-center">
            <div class="section-heading">
                <h1>Subscribe</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="subscribe-form">
                <form action="#">
                    <input type="email" placeholder="INFO@EXAMPLE.COM">
                    <button type="submit">GET A QUOTE</button>
                </form>
            </div>
        </div>
        <div class="custom-projects-shape-2">
            <img src="assets/images/shapes/shape-02.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-1">
            <img src="assets/images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                alt="Habu">
        </div>
        <div class="custom-projects-circle-2">
            <img src="assets/images/shapes/shape-circle.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-3">
            <img src="assets/images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                alt="Habu">
        </div>
        <div class="custom-projects-circle-4"></div>
    </div>
@endsection