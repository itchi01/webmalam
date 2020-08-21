<?php include 'header.php'?>
<div class="container-fluid">
    <blockquote class="blockquote text-center pb-4">
        <span>
            <h3 class="garis mb-0">COVID-19: Live updates</h3>
        </span>
        <footer class="blockquote-footer">Our live coverage of the coronavirus pandemic browse <a
                href="corona.php">here</a></cite></footer>
    </blockquote>
    <div class="row">
        <?php include 'lsidebar.php'?>
        <!-- content -->
        <div class="col-sm-6 mx-0 px-0 container my-1">
            <div id="carouselExampleFade" class="mb-4 carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="corona.php">
                            <img class="d-block w-100"
                                src="https://cdn.cnn.com/cnnnext/dam/assets/200809002922-01-us-coronavirus-0807-large-tease.jpg"
                                alt="First slide">
                            <div class="carousel-caption  d-none d-md-block mb-0">
                                <h5 class="bg-dark" style="font-weight: 600">In the US, five states account for more
                                    than 40% of the country's nearly 5 million Covid-19 cases</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="https://cdn.cnn.com/cnnnext/dam/assets/191111100550-01-spacex-launch-1111-exlarge-169.jpg"
                            alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="bg-dark" style="font-weight: 600">This odd flying metal cylinder is a prototype
                                for Elon Musk's Mars rocket</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="https://cdn.cnn.com/cnnnext/dam/assets/200806115721-lebanon-beirut-devastated-0806-large-tease.jpg"
                            alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="bg-dark" style="font-weight: 600">Lebanon's economy was already in crisis. Then
                                the blast hit Beirut</h5>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <span>
                <h4 class="garis-judul bg-light">Your Latest Updated News</h4>
            </span>
            <hr>
            <div class="article-dual-column">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro">
                            <h5 class="">Deadly Corona Virus Impact on the US</h5>
                            <p class="text-left"><span class="by">by</span> <a href="#">Author Name</a><span
                                    class="date"> Sept 8th, 2016 </span></p>
                        </div>

                    </div class="col-md-10 mx-5 px-5">
                    <div class="mx-5 col-md-10 ParalaxImage1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-3 offset-md-1">
                        <div class="toc bg-light px-2 py-2 mt-2">
                            <p>Table of Contents</p>
                            <ul>
                                <li><a href="#1">The number has jumped to 5 million in 17 days. </a> </li>
                                <li><a href="#">Ut vehicula rhoncus</a></li>
                                <li><a href="#">Lorem Ipsum </a> </li>
                                <li><a href="#">Dolor sit amet</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-7 offset-md-1 offset-lg-0">
                        <div class="text">
                            <p>coronavirus early <span style="text-decoration: underline;">Sunday </span>-- The US
                                topped 5 million cases of
                                and as experts have highlighted before, the true number of
                                infections could be many times higher.
                                The number means the country holds about a quarter of global cases of the virus and also
                                tops the list with the most reported deaths in the world. Of the country's 5,036,387
                                estimated cases, 162,851 have been deadly, according to data collected by John Hopkins
                                University.</p>
                            <p>Track the virus
                                To put the number in perspective, that means the United States has had more Covid-19
                                cases than Ireland has people. The number of cases is also slightly higher than the
                                entire population of Alabama.</p>
                            <h2 id="1">The number has jumped to 5 million in 17 days. </h2>
                            <p>To put the speed in which the number is growing in perspective: It took the country 99
                                days to reach 1 million, 43 days to hit 2 million, 28 days for 3 million and 15 days to
                                surpass 4 million on July 23.
                            </p>
                            <figure class="figure"><img class="figure-img"
                                    src="https://i.ytimg.com/vi/xFThqNtIBJ0/maxresdefault.jpg">
                                <figcaption class="figure-caption">Dr. William Schaffner, a professor of infectious
                                    diseases at Vanderbilt University</figcaption>
                            </figure>
                            <p>"This is such a sobering number," said Dr. William Schaffner.
                                "That's a huge number of cases and a very large number of hospitalizations and deaths --
                                and more to come," Schaffner said. "Because over much of this country, this virus is
                                spreading unimpeded because so many folks are not getting with the program to contain
                                it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        <?php include 'rsidebar.php'?>
    </div>
</div>
</body>

<?php include 'footer.php'?>

</html>