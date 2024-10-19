@extends('layout.master')

@section('content')

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#3D405B" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">

            <h1 class="text-white mb-4 pb-2">Lab Exercise 4</h1>

        </div>

    </div>
</div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
            </section>


            <section class="events-section events-detail-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-8 col-12 mx-auto">
                            <h2 class="mb-lg-5 mb-4">Middleware</h2>

                            <div class="custom-block-image-wrap">
                                <img src="images/lab4.png" class="custom-block-image img-fluid" alt="">
                            </div>

                            <div class="custom-block-info">
                                <h3 class="mb-3">Adding Middleware</h3>

                           

                           <p>     In this project, we focused on creating and registering custom middleware in our Laravel application to enforce specific logic for certain routes. We began by developing two middleware classes: `CheckAge` and `LogRequests`. The `CheckAge` middleware was designed to enforce age restrictions on certain routes, ensuring that only users above a certain age could access specified pages. The `LogRequests` middleware was created to log details of HTTP requests, such as the request method and URL, to a `log.txt` file for record-keeping and debugging purposes.

Once both middleware classes were created, we registered them in the `app/Http/Kernel.php` file. In this step, we configured the middleware for both global and route-specific use. Registering middleware globally ensures that it runs for every HTTP request made to the application, whereas registering it for specific routes gives us more control over where the logic is applied. We tested this by applying the `LogRequests` middleware globally so that all incoming requests were logged, and applied `CheckAge` to specific routes where age restrictions were necessary.

After registering the middleware, we applied the `CheckAge` middleware to a couple of routes: one for the welcome page and another for the dashboard. We tested these routes by passing different age values via query parameters and ensured that users who did not meet the age requirement were redirected or denied access, while those who met the requirement were able to access the pages as expected.

To add more flexibility, we modified the `CheckAge` middleware to accept a minimum age parameter. This allowed us to enforce different age restrictions for different routes. For example, we created a route that enforced a 21-year minimum age requirement, testing it with various age values to confirm the middleware worked correctly. If a user did not meet the minimum age, they were redirected to a different page or shown an error message, depending on the logic defined in the middleware.
</p>
<p>
Through this project, we gained a deeper understanding of how middleware works in Laravel and how it can be used to control access to certain parts of an application. One of the key lessons was how to create custom middleware to apply business logic, such as age restrictions or request logging, in a reusable and scalable way. By using middleware, we were able to keep our route logic clean while ensuring that specific conditions were enforced consistently across the application.

We also learned how to register middleware in the `app/Http/Kernel.php` file, both globally and for specific routes. This gave us greater control over when and where the middleware is applied. For example, registering the `LogRequests` middleware globally ensured that all incoming requests were logged, which can be useful for debugging and tracking user activity. In contrast, applying the `CheckAge` middleware to specific routes allowed us to enforce age restrictions only where necessary, such as for sensitive content or pages requiring a certain level of maturity.

Another important takeaway was how to pass parameters to middleware, which adds flexibility and reusability. By modifying the `CheckAge` middleware to accept a minimum age parameter, we were able to enforce different age requirements on different routes without duplicating code. This helped us understand how middleware can be tailored to specific needs while maintaining a clean and modular structure.

Additionally, we gained experience in working with HTTP requests and logging in Laravel. By creating the `LogRequests` middleware and writing request details to a `log.txt` file, we improved our ability to track and debug incoming requests. This is a valuable skill for monitoring application performance and identifying potential issues in a live environment.

Overall, this project deepened our understanding of Laravel middleware, its practical uses, and the benefits of applying business logic at the middleware level rather than directly within controllers or routes. It also reinforced the importance of keeping code modular and reusable, which is crucial for maintaining a scalable and maintainable application.</p>

<div class="events-detail-info row my-5">
    <div class="col-lg-12 col-12">
        <h4 class="mb-3">You can access the project here.</h4>
    </div>

    <div class="col-lg-12 col-12">
        <p class="mb-0">
            Visit this 
            <a href="https://github.com/abadname601/WebDev_LAb1_abad.git" target="_blank">link to github</a>.
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
