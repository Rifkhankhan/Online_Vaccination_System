<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Vaccination System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <meta name="description" content="">
            <meta name="author" content="">

            <title>Medic Care Bootstrap 5 CSS Template</title>

            <!-- CSS FILES -->
            <link rel="preconnect" href="https://fonts.googleapis.com">

            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

            <link href="css/bootstrap.min.css" rel="stylesheet">

            <link href="css/bootstrap-icons.css" rel="stylesheet">

            <link href="css/owl.carousel.min.css" rel="stylesheet">

            <link href="css/owl.theme.default.min.css" rel="stylesheet">

            <link href="css/templatemo-medic-care.css" rel="stylesheet">
    </head>
    <body class="antialiased">

        <main>

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                    Medic Care
                    <strong class="d-block">Health Specialist</strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#hero">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#timeline">Timeline</a>
                        </li>

                        <a class="navbar-brand d-none d-lg-block">
                            Medic Care
                            <strong class="d-block">Health Specialist</strong>
                        </a>

                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Testimonials</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>



                        <li class="nav-item">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="nav-link" href="#reviews">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="nav-link" >Log in</a>


                                @endauth
                            @endif
                        </li>


                    </ul>
                </div>

            </div>
        </nav>

        <section class="hero" id="hero">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg" class="img-fluid" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg" class="img-fluid" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="heroText d-flex flex-column justify-content-center">

                            <h1 class="mt-auto mb-2">
                                Better
                                <div class="animated-info">
                                    <span class="animated-item">health</span>
                                    <span class="animated-item">days</span>
                                    <span class="animated-item">lives</span>
                                </div>
                            </h1>

                            <p class="mb-4">Medic Care is a Bootstrap 5 Template provided by TemplateMo website. Credits go to FreePik and RawPixel for images used in this template.</p>

                            <div class="heroLinks d-flex flex-wrap align-items-center">
                                <a class="custom-link me-4" href="#about" data-hover="Learn More">Learn More</a>

                                <p class="contact-phone mb-0"><i class="bi-phone"></i> 010-020-0340</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding" id="about">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="mb-lg-3 mb-3">Meet Dr. Rifkhan</h2>

                        <p>Protect yourself and others by wearing masks and washing hands frequently. Outdoor is safer than indoor for gatherings or holding events. People who get sick with Coronavirus disease (COVID-19) will experience mild to moderate symptoms and recover without special treatments.</p>

                        <p>You can feel free to use this CSS template for your medical profession or health care related websites. You can <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">support us a little</a> via PayPal if this template is good and useful for your work.</p>
                    </div>

                    <div class="col-lg-4 col-md-5 col-12 mx-auto">
                        <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                            <p class="featured-text"><span class="featured-number">12</span> Years<br> of Experiences</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-6 ps-0">
                        <img src="images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                    </div>

                    <div class="col-lg-6 col-6 pe-0">
                        <img src="images/gallery/female-doctor-with-presenting-hand-gesture.jpg" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding pb-0" id="timeline">
            <div class="container">
                <div class="row">

                    <h2 class="text-center mb-lg-5 mb-4">Our Timeline</h2>

                    <div class="timeline">
                        <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                            <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Get the vaccine</h3>

                                <p>Donec facilisis urna dui, a dignissim mauris pretium a. Quisque quis libero fermentum, tempus felis eu, consequat nibh.</p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-patch-check-fill timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                            </div>
                        </div>

                        <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                            <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Consulting your health</h3>

                                <p>You are fully permitted to use this template for your commercial or personal website. You are not permitted to redistribute the template ZIP file for a download purpose on any other <a href="https://www.google.com/search?q=free+css" target="_blank">Free CSS collection</a> website.</p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-book timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                <time>2021-07-15 Thursday</time>
                            </div>
                        </div>

                        <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                            <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Certified Nurses</h3>

                                <p>Phasellus eleifend, urna interdum congue viverra, arcu neque ultrices ligula, id pulvinar nisi nibh et lacus. Vivamus gravida, ipsum non euismod tincidunt, sapien elit fermentum mi, quis iaculis enim ligula at arcu.</p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-file-medical timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                <time>2021-06-28 Monday</time>
                            </div>
                        </div>

                        <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                            <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Covid-19 Hospitals</h3>

                                <p class="mb-0 pb-0">Fusce vestibulum euismod nulla sed ultrices. Praesent rutrum nulla vel sapien euismod, quis tempus dui placerat.</p>

                                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla</p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-globe timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                <time>2021-05-30 Sunday</time>
                            </div>
                        </div>

                        <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                            <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Freelance Nursing</h3>

                                <p>If you need a working contact form that submits email to your inbox, please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">visit our contact page</a> for more information.</p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-person timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                <time>2021-05-18 Tuesday</time>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding pb-0" id="reviews">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-center mb-lg-5 mb-4">Our Patients</h2>

                        <div class="owl-carousel reviews-carousel">

                            <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                <div class="reviews-stars">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </div>

                                <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Best Health Care</strong></p>

                                <p class="reviews-text w-100">Phasellus ligula ante, tempus ac imperdiet ut, mattis ac nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                                <img src="images/reviews/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid reviews-image" alt="">

                                <figcaption class="ms-4">
                                    <strong>Marie</strong>

                                    <span class="text-muted">Patient</span>
                                </figcaption>
                            </figure>

                            <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                <div class="reviews-stars">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </div>

                                <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Doctor cares everyone!</strong></p>

                                <p class="reviews-text w-100">Donec in elementum orci, nec posuere ligula. Quisque vulputate diam et ullamcorper ullamcorper. Pellentesque vestibulum neque at leo fermentum mattis.</p>

                                <img src="images/reviews/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg" class="img-fluid reviews-image" alt="">

                                <figcaption class="ms-4">
                                    <strong>Ben Walker</strong>

                                    <span class="text-muted">Recovered</span>
                                </figcaption>
                            </figure>

                            <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                <div class="reviews-stars">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>

                                <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Great services!</strong></p>

                                <p class="reviews-text w-100">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec sit amet velit vitae purus aliquam efficitur.</p>

                                <img src="images/reviews/portrait-british-woman.jpeg" class="img-fluid reviews-image" alt="">

                                <figcaption class="ms-4">
                                    <strong>Laura Zono</strong>

                                    <span class="text-muted">New Patient</span>
                                </figcaption>
                            </figure>

                            <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                <div class="reviews-stars">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </div>

                                <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Best Advices</strong></p>

                                <p class="reviews-text w-100">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.</p>

                                <img src="images/reviews/woman-wearing-mask-face-closeup-covid-19-green-background.jpeg" class="img-fluid reviews-image" alt="">

                                <figcaption class="ms-4">
                                    <strong>Rosey</strong>

                                    <span class="text-muted">Almost Recovered</span>
                                </figcaption>
                            </figure>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding" id="booking">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="booking-form">

                            <h2 class="text-center mb-lg-3 mb-2">Register</h2>

                            <form  action="{{ route('register') }}" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="first_name" id="name" class="form-control" placeholder="First Name" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="last_name"  pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Last Name" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="telephone" name="mobile"   class="form-control" placeholder="Phone: 07 5/7/8 xxx xxxx">
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="email" name="email" id="date"  class="form-control" placeholder="Email">
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="moh"  pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Ministry of Health" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="address"  pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Address" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="date" name="dob"   class="form-control" placeholder="Date of Birth" required>
                                    </div>


                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="nic"   class="form-control" placeholder="NIC" required>
                                    </div>


                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="district"   class="form-control" placeholder="District" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <select name="genter" id="" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="user_name"   class="form-control" placeholder="User Name" required>
                                        <input type="hidden" name="role"   class="form-control" value="people" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="password" name="password"   class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                        <button type="submit" class="form-control" id="submit-button">Register</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        </main>
    </body>
</html>


