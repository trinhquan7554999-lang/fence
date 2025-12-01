<!DOCTYPE html>
<html lang="en">
<?php
// This file is part of the FenceFixer project.
// It is used to display the main page of the website with a carousel, about section, facts, features, services, quote form, team members, testimonials, and footer.
include 'includes/header.php';
?>


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-4 animated slideInDown">Professional fence repair,
                                    installation, and maintenance of residential and commercial fences</h1>
                                <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">We are an Experts in
                                    Professional Fence Repair & Installation Services</p>
                                <a href="./service.php" class="btn btn-primary py-3 px-5 animated slideInDown">Explore
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-4 animated slideInDown">Custom Fence Design &
                                    Installation</h1>
                                <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">Transform your property
                                    with our custom fence solutions. From classic wood to modern vinyl, we build fences
                                    that last for generations.</p>
                                <a href="./service.php" class="btn btn-primary py-3 px-5 animated slideInDown">Explore
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6 mb-5">Welcome To Your Trusted Fence Repair Specialists</h1>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 me-3" src="img/icon/icon-07-primary.png" alt="">
                                <h5 class="mb-0">Expert Craftsmen</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 me-3" src="img/icon/icon-09-primary.png" alt="">
                                <h5 class="mb-0">Premium Materials</h5>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4">We've built our business on over 20 years of experience providing quality fence
                        repair & installation and are proud to offer superior work and customer service. And, we own our
                        own wholesale siding and fencing supply store for the do-it-yourselfers!</p>
                    <div class="border-top mt-4 pt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <h5 class="mb-0">+1 435-724-7865</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-envelope text-white"></i>
                                    </div>
                                    <h5 class="mb-0">info@FenceFixer.space</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg"
                            style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white" data-toggle="counter-up">120</h1>
                <span class="text-primary">Happy Clients</span>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-4 text-white" data-toggle="counter-up">150</h1>
                <span class="text-primary">Projects Succeed</span>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-white" data-toggle="counter-up">75</h1>
                <span class="text-primary">Awards Achieved</span>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-white" data-toggle="counter-up">50</h1>
                <span class="text-primary">Team Members</span>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-5">Few of The Reasons Why People Opting Us!</h1>
                <div class="d-flex mb-5">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                        <img class="img-fluid" src="img/icon/icon-08-light.png" alt="Trusted Experts">
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Experienced & Reliable Technicians</h5>
                        <span>Our expert staff has the experience gained from years of experience repairing fences,
                            getting the job done quickly and professionally.</span>
                    </div>
                </div>
                <div class="d-flex mb-5">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                        <img class="img-fluid" src="img/icon/icon-10-light.png" alt="Affordable Pricing">
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Affordable & Transparent Pricing</h5>
                        <span>We are competitive without losing quality. No surprise fees — just honest, upfront
                            quotes.</span>
                    </div>
                </div>
                <div class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                        <img class="img-fluid" src="img/icon/icon-06-light.png" alt="Support">
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Prompt Service & Support</h5>
                        <span>Need urgent repairs? Our professional team is ready to come to you any time of the night
                            or day and bring your fence back to its safety, privacy and beauty.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/fence-repair.jpg" alt="Fence Repair Image"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->



<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-5">We Provide Professional Fence Repair & Installation Services</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="service-icon flex-shrink-0 bg-primary">
                            <img class="img-fluid" src="img/icon/icon-01-light.png" alt="">
                        </div>
                        <a class="h4 mx-4 mb-0" href="">Fence Repair</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-2.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="service-icon flex-shrink-0 bg-primary">
                            <img class="img-fluid" src="img/icon/icon-02-light.png" alt="">
                        </div>
                        <a class="h4 mx-4 mb-0" href="">New Installation</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-3.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="service-icon flex-shrink-0 bg-primary">
                            <img class="img-fluid" src="img/icon/icon-03-light.png" alt="">
                        </div>
                        <a class="h4 mx-4 mb-0" href="">Custom Design</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-4.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="service-icon flex-shrink-0 bg-primary">
                            <img class="img-fluid" src="img/icon/icon-04-light.png" alt="">
                        </div>
                        <a class="h4 mx-4 mb-0" href="">Gate Systems</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-5.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="service-icon flex-shrink-0 bg-primary">
                            <img class="img-fluid" src="img/icon/icon-05-light.png" alt="">
                        </div>
                        <a class="h4 mx-4 mb-0" href="">Security Fencing</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="service-icon flex-shrink-0 bg-primary">
                            <img class="img-fluid" src="img/icon/icon-06-light.png" alt="">
                        </div>
                        <a class="h4 mx-4 mb-0" href="">Maintenance</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



<!-- Cookie Consent Start -->
<div id="cookieConsent"
    style="position: fixed; bottom: 0; left: 0; width: 100%; background: #222; color: #fff; z-index: 9999; display: none;">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3">
        <span>We use cookies to ensure you get the best experience on our website. <a href="./cookies.php"
                style="color: #ffc107; text-decoration: underline;">Learn more</a></span>
        <button id="acceptCookies" class="btn btn-primary ms-md-3 mt-3 mt-md-0">Accept</button>
    </div>
</div>
<script>
    // Show cookie consent if not accepted
    if (!localStorage.getItem('cookieAccepted')) {
        document.getElementById('cookieConsent').style.display = 'block';
    }
    document.getElementById('acceptCookies').onclick = function () {
        localStorage.setItem('cookieAccepted', 'yes');
        document.getElementById('cookieConsent').style.display = 'none';
    };
</script>
<!-- Cookie Consent End -->


<?php
include 'includes/footer.php';
?>

</html>