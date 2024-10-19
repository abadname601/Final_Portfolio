
@extends('layout.master')

@section('content')


                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <h2 class="text-white">EXPLORE MY WORKS </h2>

                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span></span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">Laravel</b>
                                    <b>CSS</b>
                                    <b>Html</b>
                                </span>
                            </h1>

                            <div class="custom-btn-group">
                                <a href="#section_2" class="btn custom-btn smoothscroll me-3">Get to know me</a>

                             
                            </div>
                        </div>

                      

                    </div>
                </div>

                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg> 
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-lg-5 mb-4">About Me</h2>
                        </div>

                        <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                         <!-- <h3 class="mb-3">Angela B. Abad</h3> -->

                            <p><strong>Hi! I’m Angela B. Abad,</strong>  a third-year IT student with a growing passion for web development. 
        Throughout my studies, I’ve worked on several projects, most of these are collaborative works.
        In these projects, I used technologies like Laravel, HTML, and CSS. This portfolio is a collection of my work, where you can see the progress I’ve made and 
        the projects I’ve built along the way.</p>

                            <p>  Feel free to explore my projects and see what I’ve been up to!</p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/members/angela.jpg" class="member-block-image img-fluid" alt="">

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="member-block-info d-flex align-items-center">
                                    <h4>Angela</h4>

                                    <p class="ms-auto">BSIT 3C</p>
                                </div>
                            </div>
                        </div>

                     

                              
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-3">Lab Activities</h2>
                        </div>

                        <div class="row custom-block mb-3">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">01</h6>
                                    
                                    <strong class="text-white">Lab 1</strong>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="{{ url('/lab1') }}">
                                        <img src="images/lab1.png" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="{{ url('/lab1') }}" class="events-title mb-3">Setup</a>

                                    <p class="mb-0">In this project, I installed Laravel along with its dependencies, created a Laravel project, and set it up in a Git repository. I then configured the `.env` file to include the database connection details. After that, I developed three views: the homepage, about page, and content page. Lastly, I set up and ran the routes to ensure everything was connected and functioning properly.</p>

                                   
                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">
                                       
                                        <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="{{ url('/lab1') }}" class="btn custom-btn">See more</a>
                                        </div>  
                                    </div>
                                </div>              
                            </div>
                        </div>


                        <div class="row custom-block custom-block-bg">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">02</h6>
                                    
                                    <strong class="text-white">Lab 2</strong>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                <a href="{{ url('/lab2') }}">
                                        <img src="images/lab2.png" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="{{ url('/lab2') }}" class="events-title mb-3">Routes</a>

                                    <p class="mb-0">In this project, I created basic routes for a Laravel application, including one that returns a view for the homepage with a welcome message, an "About Us" page, a route that redirects from `/home` to the homepage, and a "Contact Us" form. I also defined a route that accepts a required username parameter to display a personalized welcome message, then modified it to make the username optional, defaulting to "Guest" if not provided, while applying a constraint to ensure only alphabetic characters are accepted for the username.</p>
                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                     
                                        <div class="d-flex align-items-center ms-lg-auto">
                                        <a href="{{ url('/lab2') }}" class="btn custom-btn">See more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row custom-block mb-3">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">03</h6>
                                    
                                    <strong class="text-white">Lab 3</strong>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                <a href="{{ url('/lab3') }}">
                                        <img src="images/lab3.png" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="{{ url('/lab3') }}" class="events-title mb-3">Layout</a>

                                    <p class="mb-0">In this project, we created a "Components" folder within the `resources/views` directory and added a `Layout.blade.php` file to define the basic HTML structure. We then created three new Blade files that extend the layout and include page-specific content. Finally, we updated the routes in `web.php` to return the respective views for each page.</p>

                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                    

                                        <div class="d-flex align-items-center ms-lg-auto">
                                        <a href="{{ url('/lab3') }}" class="btn custom-btn">See more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row custom-block custom-block-bg">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">04</h6>
                                    
                                    <strong class="text-white">Lab 4</strong>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                <a href="{{ url('/lab4') }}">
                                        <img src="images/lab4.png" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="{{ url('/lab4') }}" class="events-title mb-3">Middleware</a>

                                    <p class="mb-0">In this project, we created and registered the `CheckAge` and `LogRequests` middleware to enforce age restrictions and log HTTP request details to `log.txt`. We registered the middleware in `app/Http/Kernel.php` for global and route-specific use, then applied the `CheckAge` middleware to routes for a welcome page and a dashboard, testing it with various age values. Lastly, we modified the `CheckAge` middleware to accept a minimum age parameter and created a route to enforce a 21-year age restriction.</p>

                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                      

                                        <div class="d-flex align-items-center ms-lg-auto">
                                        <a href="{{ url('/lab4') }}" class="btn custom-btn">See more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
</div>

            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12">
                            <form action="#" method="post" class="custom-form contact-form" role="form">
                                <h2 class="mb-4 pb-2">Contact Me</h2>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                            
                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                            
                                            <label for="floatingTextarea">Message</label>
                                        </div>

                                        <button type="submit" class="form-control">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="contact-info mt-5">
                                <div class="contact-info-item">
                                    <div class="contact-info-body">
                                        <strong>Philippines</strong>

                                        <p class="mt-2 mb-1">
                                            <a href="tel: 0991-604-0407" class="contact-link">
                                                0991 604 0407 
                                            
                                            </a>

                                            <p> <a href="mailto:angelaabad@gmail.com">angelaabad@gmail.com</a></p>
                                        </p>

                                     
                                    </div>

                                   
                                </div>

                                <img src="images/WorldMap.svg" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        @endsection