@extends('layout.master')

@section('content')

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#3D405B" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">

            <h1 class="text-white mb-4 pb-2">Lab Exercise 2</h1>

        </div>

    </div>
</div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
            </section>


            <section class="events-section events-detail-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-8 col-12 mx-auto">
                            <h2 class="mb-lg-5 mb-4">Routes</h2>

                            <div class="custom-block-image-wrap">
                                <img src="images/lab2.png" class="custom-block-image img-fluid" alt="">
                            </div>

                            <div class="custom-block-info">
                                <h3 class="mb-3">Learning Routing</h3>

                             <p>   In this project, We set up several basic routes for a Laravel application to ensure smooth navigation and functionality. We started by creating a route that returns a view for the homepage, displaying a welcome message to the user. This homepage serves as the main landing page of the application, welcoming visitors with dynamic content. I then developed an "About Us" page, another crucial section of the site, where users can learn more about the purpose and mission of the application. 

To improve user experience and navigation, We created a redirect route that maps the `/home` URL to the homepage. This ensures that users who enter `/home` in the address bar are automatically redirected to the main landing page, maintaining consistency throughout the application.

In addition to the static pages, We designed a "Contact Us" form that allows users to get in touch with the site administrators. This form was implemented as part of a dedicated route, leading users to a form where they can fill out their details and inquiries, simulating a basic communication feature. While the form functionality was not fully implemented in this stage, it laid the groundwork for future integration with email or database services.

One of the more dynamic aspects of this project was the creation of a route that accepts a required parameter for a username. This route was designed to display a personalized welcome message based on the username provided in the URL. For example, if a user visits `/welcome/Angela`, they would see a message like "Welcome, Angela!" on the page. This feature adds a personal touch to the user experience, making the site feel more interactive.

As we progressed, We modified the route to make the username parameter optional. If no username is provided, the system defaults to "Guest," ensuring that the route works seamlessly even without user input. For example, if a visitor only enters `/welcome`, they would see "Welcome, Guest!" This flexibility improves usability, as users don't need to provide a specific name every time they visit the page.

To further refine the route, I applied a constraint to ensure that the username parameter only accepts alphabetic characters. This validation step prevents the route from accepting numbers, symbols, or other invalid input types, thereby improving both security and the overall user experience.</p>


<p>
Through this project, I gained a deeper understanding of Laravel's powerful routing system. I learned how to define routes that connect users to various pages in a web application, including static pages like the homepage and "About Us" section, as well as more dynamic routes that handle user input. This enhanced my ability to create user-friendly navigation flows within a Laravel application.

I also developed a better grasp of handling route parameters, both required and optional, and how to use these parameters to dynamically modify the content displayed to users. This was particularly useful for the personalized welcome message feature, as it demonstrated how easily Laravel can handle dynamic content based on user input.

Moreover, I learned how to implement route constraints to validate parameters. By restricting the username to only alphabetic characters, I ensured that the application processes only valid inputs, minimizing the risk of errors and potential security vulnerabilities. This taught me the importance of input validation in web applications, particularly when handling dynamic URLs that rely on user-provided data.

Another significant learning was how to set up route redirection. Creating the redirect from `/home` to the homepage allowed me to explore Laravel's redirect functionality, ensuring that users are guided to the correct pages even if they enter alternative URLs.

Finally, designing the "Contact Us" form gave me insight into form handling in Laravel, preparing me for more advanced form processing in the future, such as integrating validation, saving form data to a database, or sending it via email.

Overall, this project enhanced my proficiency with Laravel’s routing features, improved my understanding of handling dynamic data through routes, and reinforced the importance of validation and user-friendly navigation in web development.        </p>

                      

<div class="events-detail-info row my-5">
    <div class="col-lg-12 col-12">
        <h4 class="mb-3">You can access the project here.</h4>
    </div>

    <div class="col-lg-12 col-12">
        <p class="mb-0">
            Visit this 
            <a href="https://github.com/sarahaba-ux/webdev_lab2.git" target="_blank">link to github</a>.
        </p>
    </div>
</div>

                  

                    </div>
                </div>
            </section>
        </main>

     

               


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

@endsection
