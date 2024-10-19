@extends('layout.master')

@section('content')

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#3D405B" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">

            <h1 class="text-white mb-4 pb-2">Lab Exercise 1</h1>

        </div>

    </div>
</div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
            </section>


            <section class="events-section events-detail-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-8 col-12 mx-auto">
                            <h2 class="mb-lg-5 mb-4">Setup</h2>

                            <div class="custom-block-image-wrap">
                                <img src="images/lab1.png" class="custom-block-image img-fluid" alt="">
                            </div>

                            <div class="custom-block-info">
                                <h3 class="mb-3">Laravel Installation</h3>

                           

                         <p>   In this project, I installed Laravel along with all necessary dependencies, ensuring that the environment was properly set up for development. I then created a new Laravel project and initialized a Git repository to manage version control throughout the development process. After setting up Git, I configured the `.env` file to include important environment variables, specifically the database connection details, which are crucial for the application to interact with the SQLite database. This step involved specifying the database type, host, username, password, and other essential configurations to ensure seamless integration.

Next, I focused on the development of three core views: the homepage, about page, and content page. Each of these views was designed to follow a responsive layout to provide an optimal user experience across various devices. I utilized Blade templates to streamline the development process, making it easier to maintain and manage the dynamic content across these views. The homepage was designed as the main landing page, the about page provided information about the website, and the content page was structured to display relevant articles or information. </p>


<p>
Once the views were in place, I proceeded to set up the routes in the `web.php` file. This step was critical for connecting the views with their respective URLs, ensuring that users could navigate between pages seamlessly. The routing system allowed me to map specific URIs to the corresponding controller actions, making the site more dynamic and interactive. I then ran and tested the routes to verify that everything was functioning correctly, ensuring that all pages loaded without errors and the database connection was stable.

Through this process, I gained valuable insights into several aspects of Laravel development. I learned how to effectively configure and manage environment variables through the `.env` file, especially in relation to setting up database connections. I also deepened my understanding of Blade templating, which significantly streamlined the process of building dynamic views, allowing for code reuse and improved maintainability. Furthermore, I became more proficient with Laravel's routing system, which is fundamental to connecting views and controllers and ensuring smooth navigation throughout the application.

Another key takeaway was the importance of proper version control using Git. By tracking changes and maintaining a clean repository, I was able to manage the development process more efficiently and ensure that all team members could collaborate smoothly if needed. Testing and debugging also played a crucial role in this project, as it allowed me to ensure that all components—from database integration to view rendering—worked together cohesively.

Overall, this project not only strengthened my technical skills in Laravel but also enhanced my problem-solving abilities, especially when configuring the application and ensuring all parts were connected and functional. </p>

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
