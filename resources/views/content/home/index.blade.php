@extends('content.main')

@section('container')
<div class="lines-wrap">
    <div class="lines-inner">
        <div class="lines"></div>
    </div>
</div>
<!-- END lines -->
@include('header.navigation')

<div class="cover-v1 jarallax" style="background-image: url('images/cover_bg_2.jpg');" id="home-section">
    <div class="container">
        <div class="row align-items-center">
            
        <div class="col-md-7 mx-auto text-center">
            <h1 class="heading gsap-reveal-hero">Unfold</h1>
            <h2 class="subheading gsap-reveal-hero">I’m Glenn Chapman Hoyer A Product Designer Based In San Francisco</h2>
        </div>

        </div>
    </div>


    <a href="#portfolio-section" class="mouse-wrap smoothscroll">
        <span class="mouse">
        <span class="scroll"></span>
        </span>
        <span class="mouse-label">Scroll</span>
    </a>

</div>
<!-- END .cover-v1 -->

<div class="unslate_co--section" id="portfolio-section">
    <div class="container">
        
        
        <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
        <div id="portfolio-single-holder"></div>

        <div class="portfolio-wrapper">

            <div class="d-flex align-items-center mb-4 gsap-reveal gsap-reveal-filter">
                <h2 class="mr-auto heading-h2"><span class="gsap-reveal">Portfolio</span></h2>

                <!-- <a href="#" class="text-white js-filter d-inline-block d-lg-none">Filter</a>
                
                <div class="filter-wrap">
                <div class="filter ml-auto" id="filters">
                    <a href="#" class="active" data-filter="*">All</a>
                    <a href="#" data-filter=".web">Web</a>
                    <a href="#" data-filter=".branding">Branding</a>
                    <a href="#" data-filter=".illustration">Illustration</a>
                    <a href="#" data-filter=".packaging">Packaging</a>
                </div>
                </div> -->
            </div>


            
            <div id="posts" class="row gutter-isotope-item">
                @foreach($portofolio as $item)
                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="{{ route('content.detail', $item->id) }}" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="1">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->role }}</p>
                                </div>
                            </div>
                            <img src="{{ $item->picture_path }}" class="lazyload  img-fluid" alt="Images" />
                        </a>
                    </div>
                @endforeach
            </div>
        
        </div>


    </div>
</div>

<div class="unslate_co--section" id="about-section">
    <div class="container">
        
        <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">About Me</span></h2>
        <span class="gsap-reveal">
        <img src="images/divider.png" alt="divider" width="76">
        </span>
        </div>
        

        <div class="row mt-5 justify-content-between">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <figure class="dotted-bg gsap-reveal-img ">
            <img src="images/about_me_pic2.jpg" alt="Image" class="img-fluid">
            </figure>
        </div>
        <div class="col-lg-4 pr-lg-5">
            <h3 class="mb-4 heading-h3"><span class="gsap-reveal">We can make it together</span></h3>
            <p class="lead gsap-reveal">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there <a href="#">live the blind</a> texts. </p>
            <p class="mb-4 gsap-reveal">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p class="gsap-reveal"><a href="#" class="btn btn-outline-pill btn-custom-light">Download my CV</a></p>
        </div>
        </div>
    </div>
</div>

<div class="unslate_co--section" id="services-section">
    <div class="container">

        <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Services</span></h2>
        <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
        </div>

        <div class="row gutter-v3">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
            <div class="wrap-icon mb-3">
                <img src="images/svg/001-options.svg" alt="Image" width="45">
            </div>
            <h3>Digital <br> Strategy</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
            <div class="wrap-icon mb-3">
                <img src="images/svg/002-chat.svg" alt="Icon" width="45">
            </div>
            <h3>Web <br> Design</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
            <div class="wrap-icon mb-3">
                <img src="images/svg/003-contact-book.svg" alt="Image" class="img-fluid" width="45">
            </div>
            <h3>User <br> Experience</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div> 
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
            <div class="wrap-icon mb-3">
                <img src="images/svg/004-percentage.svg" alt="Image" width="45">
            </div>
            <h3>Web <br> Development</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
            <div class="wrap-icon mb-3">
                <img src="images/svg/006-goal.svg" alt="Image" width="45">
            </div>
            <h3>WordPress <br> Solutions</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
            <div class="wrap-icon mb-3">
                <img src="images/svg/005-line-chart.svg" alt="Image" width="45">
            </div>
            <h3>Mobile <br> Applications</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div> 
        </div>

        </div>
    </div>
</div>

<div class="unslate_co--section" id="contact-section">
    <div class="container">
        <div class="section-heading-wrap text-center mb-5">
        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Get In Touch</span></h2>
        <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
        </div>


        <div class="row justify-content-between">
        
        <div class="col-md-6">
            <form method="post" class="form-outline-style-v1" id="contactForm">
            <div class="form-group row mb-0">

                <div class="col-lg-6 form-group gsap-reveal">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="col-lg-6 form-group gsap-reveal">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="col-lg-12 form-group gsap-reveal">
                <label for="message">Write your message...</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row gsap-reveal">
                <div class="col-md-12 d-flex align-items-center">
                    <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Send Message">
                    <span class="submitting"></span>
                </div>
                </div>
            </form>
            <div id="form-message-warning" class="mt-4"></div> 
            <div id="form-message-success">
            Your message was sent, thank you!
            </div>

        </div>

        <div class="col-md-4">
            <div class="contact-info-v1">
            <div class="gsap-reveal d-block">
                <span class="d-block contact-info-label">Email</span>
                <a href="#" class="contact-info-val">info@yourdomain.com</a>
            </div>
            <div class="gsap-reveal d-block">
                <span class="d-block contact-info-label">Phone</span>
                <a href="#" class="contact-info-val">+12 345 6789 012</a>
            </div>
            <div class="gsap-reveal d-block">
                <span class="d-block contact-info-label">Address</span>
                <address class="contact-info-val">273 South Riverview Rd. <br> New York, NY 10011</address>
            </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection