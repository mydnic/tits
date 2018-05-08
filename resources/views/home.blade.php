@extends('layout')

@section('content')
<header class="default-header">
    <div class="container">
        <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="#home"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="main-menubar d-flex align-items-center">
                    <nav class="hide">
                        <a href="#home">Home</a>
                        <a href="#service">Services</a>
                        <a href="#appoinment">Get in Touch</a>
                        <a href="#consultant">Team</a>
                    </nav>
                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="container-fluid">
        <div class="row fullscreen align-items-center">
            <div class="banner-content col-lg-6 offset-lg-2 col-md-12">
                <h1 class="text-uppercase">
                    We don't need suits<br>
                    to get shit done.
                </h1>
                <p>
                    We are a team of professionnal developers. No matter how we dress, we deliver.
                </p>
                <button class="primary-btn2 mt-20 text-uppercase">get in touch<span class="lnr lnr-arrow-right"></span></button>
            </div>
            <div class="col-lg-4 align-self-end img-right pull-right">
                <img class="img-fluid" src="/img/DSC0018.jpg" alt="Clement Rigo">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="icon">
                        <span class="lnr lnr-rocket"></span>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">PHP Back-End</h4>
                        <p>
                            We <i class="fa fa-heart" aria-hidden="true"></i> PHP ! We develop all of our applications with the Laravel Framework.
                        </p>
                    </div>
                </div>
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="icon">
                        <span class="lnr lnr-chart-bars"></span>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Javascript Front-End</h4>
                        <p>
                            Any website is so much better with a bit of Javascript ! We work with VueJS to boost your projects.
                        </p>
                    </div>
                </div>
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-bug"></span>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Single Page Application</h4>
                        <p>
                            SPA is a big trend! Most of our projects are build this way thanks to VueJS.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="icon">
                        <span class="lnr lnr-heart-pulse"></span>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Progressive Web Application</h4>
                        <p>
                            High Accessibility on mobile devices is very important.
                        </p>
                    </div>
                </div>
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="icon">
                        <span class="lnr lnr-paw"></span>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Responsiveness</h4>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-users"></span>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Technologies</h4>
                        <p>
                            VueJS, Laravel, Bulma, Bootstrap
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->


<!-- Start about Area -->
<section class="about-area" id="appoinment">
    <div class="container-fluid">
        <div class="row d-flex justify-content-end align-items-center">
            <div class="col-lg-6 col-md-12 about-left no-padding">
                <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 about-right no-padding">
                <h1>Get in Touch</h1>
                <form class="booking-form" id="myForm" action="donate.php">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <input name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" class="form-control mt-20" required="" type="text" required>
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="text" required>
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input id="datepicker2" name="project" class="single-in mt-20"  onblur="this.placeholder = 'Project Name'" type="text" placeholder="Project Name" required>
                        </div>
                        <div class="col-lg-12 flex-column">
                            <textarea class="form-control mt-20" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-end send-btns">
                            <button class="submit-btn primary-btn mt-20 text-uppercase">Send <span class="lnr lnr-arrow-right"></span></button>
                        </div>

                        <div class="alert-msg"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End about Area -->

<!-- Start consultans Area -->
<section class="consultans-area section-gap" id="consultant">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-80 header-text">
                <h1>Our Consultants</h1>
                <p>
                    No matter what you need, we got you covered
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 vol-wrap">
                <div class="single-con">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="/img/clement.png" alt="Clement Rigo">
                            <div class="content-details fadeIn-bottom">
                                <h4>Clément</h4>
                                <p>
                                    Founder & Manager
                                </p>
                            </div>
                        </a>
                     </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 vol-wrap">
                <div class="single-con">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" alt="">
                            <div class="content-details fadeIn-bottom">
                                <h4>Remi</h4>
                                <p>
                                    System Administrator
                                </p>
                            </div>
                        </a>
                     </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 vol-wrap">
                <div class="single-con">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                             <img class="content-image img-fluid d-block mx-auto" src="img/c3.jpg" alt="">
                            <div class="content-details fadeIn-bottom">
                                <h4>Drilon</h4>
                                <p>
                                    Full Stack Developer
                                </p>
                            </div>
                        </a>
                     </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 vol-wrap">
                <div class="single-con">
                    <div class="content">
                        <a href="#" target="_blank">
                          <div class="content-overlay"></div>
                             <img class="content-image img-fluid d-block mx-auto" src="img/c4.jpg" alt="">
                            <div class="content-details fadeIn-bottom">
                                <h4>Florentin</h4>
                                <p>
                                    Marketing & Copy Writting
                                </p>
                            </div>
                        </a>
                     </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End consultans Area -->

<!-- Start fact Area -->
<section class="facts-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-fact">
                <h2 class="counter">39</h2>
                <p class="text-uppercase">Projects Delivered</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h2 class="counter">35</h2>
                <p class="text-uppercase">Happy Clients</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h2 class="counter">985201</h2>
                <p class="text-uppercase">Git Commits</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h2 class="counter">10</h2>
                <p class="text-uppercase">XP years</p>
            </div>
        </div>
    </div>
</section>
<!-- end fact Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1>Our Recent Blogs</h1>
                <p>
                    Knowledge is way better when shared.
                 </p>
            </div>
        </div>
        <div class="row">
            <div class="single-blog col-lg-4 col-md-4">

                <img class="f-img img-fluid mx-auto" src="https://mydnic.be/uploads/post/hkh8DDTIfaq5hPlPoj3MwCO7UCTjG9YXCmghsT75.png" alt="">
                <h4>
                    <a href="https://mydnic.be/post/super-easy-way-to-authenticate-an-api-user-in-your-laravel-application-without-using-laravel-passport">Super Easy Way to Authenticate an API User in Your Laravel Application Without Using Laravel Passport</a>
                </h4>
                <p>
                    Since Laravel 5.3, Laravel Passport is the main way to authenticate an API consumer with an access token. I say it's the main way because it's the only way described in the Laravel documentation.
                </p>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="/img/clement.png" alt="Clement Rigo" width="33">
                        <a href="https://twitter.com/mydnic"><span>Clement Rigo</span></a>
                    </div>
                    <div class="meta">
                        7th April
                        <span class="lnr lnr-heart"></span> {{ rand(5, 150) }}
                        <span class="lnr lnr-bubble"></span> {{ rand(5, 150) }}
                    </div>
                </div>
            </div>
            <div class="single-blog col-lg-4 col-md-4">
                <img class="f-img img-fluid mx-auto" src="https://mydnic.be/uploads/post/yWPXflxpOH3leAuB1fNRU2mJnIY1QPZlQgHwkL95.png" alt="">
                <h4>
                    <a href="https://mydnic.be/post/how-to-build-an-efficient-and-seo-friendly-multilingual-architecture-for-your-laravel-application">How To Build An Efficient and SEO Friendly Multilingual Architecture For Your Laravel Application</a>
                </h4>
                <p>
                    So in the scope of this new tutorial, we will setup the logic and the architecture that will allow us to build an application that is 100% Multilingual, SEO Friendly and Scalable. As usual, I will use the example of a blog website, which is easy to understand and doesn't have too many features so it is easy for me to write this article, and for you to understand the actual result.
                </p>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="/img/clement.png" alt="Clement Rigo" width="33">
                        <a href="https://twitter.com/mydnic"><span>Clement Rigo</span></a>
                    </div>
                    <div class="meta">
                        9th May
                        <span class="lnr lnr-heart"></span> {{ rand(5, 150) }}
                        <span class="lnr lnr-bubble"></span> {{ rand(5, 150) }}
                    </div>
                </div>
            </div>
            <div class="single-blog col-lg-4 col-md-4">
                <img class="f-img img-fluid mx-auto" src="https://mydnic.be/uploads/post/qSvW89Yv1Ow6hkGWj7iU2G8oQREa7LHFANXlPvU9.png" alt="">
                <h4>
                    <a href="https://mydnic.be/post/the-perfect-like-system-for-laravel">The Ultimate Like System For Laravel Thanks To Many to Many Polymorphic Relationships</a>
                </h4>
                <p>
                    In the first article, we created a system that allows the users of your app to "like" and "unlike" a specific entity (or model) of your application (e.g. an article, a comment, a photo, whatever..). But if you want your users to be able to like several things, you have to create other "likes" tables. On Facebook, you can like a post, a comment, a picture, etc. So let's be efficient, and create a single table that will contain every likes of all your likeable entities.
                </p>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="/img/clement.png" alt="Clement Rigo" width="33">
                        <a href="https://twitter.com/mydnic"><span>Clement Rigo</span></a>
                    </div>
                    <div class="meta">
                        13th Dec
                        <span class="lnr lnr-heart"></span> {{ rand(5, 150) }}
                        <span class="lnr lnr-bubble"></span> {{ rand(5, 150) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
