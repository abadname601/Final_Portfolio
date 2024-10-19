@extends('layout.master')

@section('content')

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#3D405B" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">

            <h1 class="text-white mb-4 pb-2">Lab Exercise 3</h1>

        </div>

    </div>
</div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
            </section>


            <section class="events-section events-detail-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-8 col-12 mx-auto">
                            <h2 class="mb-lg-5 mb-4">Layout</h2>

                            <div class="custom-block-image-wrap">
                                <img src="images/lab3.png" class="custom-block-image img-fluid" alt="">
                            </div>

                            <div class="custom-block-info">
                                <h3 class="mb-3">Learning Layout</h3>

                                <p>In this project, we started by organizing the structure of our Laravel views, aiming to create a reusable and maintainable layout for the application. We began by creating a "Components" folder within the `resources/views` directory, which would serve as a centralized location for all reusable components. Inside this folder, we added a `Layout.blade.php` file, which is designed to define the basic HTML structure for the entire application. This layout file included essential elements such as the HTML `head` section, the navigation bar, and the main content area. By using this layout, we ensured consistency across all pages, avoiding redundancy and making future updates easier to manage.

Next, we created three new Blade files, each representing a specific page in the application: the homepage, an about page, and a contact page. Each of these Blade files was set up to extend the `Layout.blade.php` file. This means that the basic HTML structure defined in the layout file was automatically included in these pages, allowing us to focus only on adding page-specific content. For example, the homepage featured a welcome message and an introduction to the site, while the about page provided more detailed information about the purpose of the application. The contact page included a form where users could reach out to the administrators.

After setting up the Blade templates, we updated the routing configuration in `web.php` to return the appropriate view for each page. We defined routes that connected specific URLs to the corresponding Blade files, ensuring that users could easily navigate between the homepage, about page, and contact page. This involved creating separate routes for each view, mapping URLs like `/`, `/about`, and `/contact` to their respective templates. We then tested the application to confirm that all routes worked properly, and each page was displayed with the correct content and layout.</p>
<p>

Throughout this project, we gained a deeper understanding of the power of Blade templating in Laravel and how it can greatly improve the efficiency and scalability of web development. One of the key lessons was how to implement a layout system that promotes consistency across multiple pages. By defining the core HTML structure in the `Layout.blade.php` file and extending it in other templates, we avoided repeating code and made it easier to maintain the application. This approach not only saves time but also ensures that any future changes to the layout can be applied across all pages by simply updating the layout file.

We also learned how Blade's inheritance system works, particularly how child templates can extend a base layout while injecting page-specific content. This makes it much easier to create new pages in the future, as we can simply extend the existing layout without worrying about recreating the HTML structure from scratch. This separation of concerns—between the general layout and page-specific content—helped us keep the code organized and modular.

Another significant takeaway was how to set up and manage routes effectively in Laravel. We became more familiar with the `web.php` file, where we defined routes for each page and linked them to the corresponding Blade views. This taught us the importance of routing in controlling the flow of user navigation and ensuring that each URL corresponds to the correct page.

Moreover, we gained insight into Laravel's component-based approach to building user interfaces. By creating reusable components such as the layout file, we can ensure that the application remains flexible and scalable as it grows. If we decide to add more pages or change the site's structure, the component-based design will make these updates much more efficient.

Overall, this project enhanced our understanding of Blade templating, route management, and reusable components in Laravel. It showed us how to create a maintainable and scalable structure that can be easily expanded as the application evolves, while also ensuring a seamless and consistent user experience across all pages.</p>

<div class="events-detail-info row my-5">
    <div class="col-lg-12 col-12">
        <h4 class="mb-3">You can access the project here.</h4>
    </div>

    <div class="col-lg-12 col-12">
        <p class="mb-0">
            Visit this 
            <a href="https://github.com/alyxvkeniii/webdev_lab3.git" target="_blank">link to github</a>.
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
