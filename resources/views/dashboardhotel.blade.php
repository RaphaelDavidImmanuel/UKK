<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>The Dojo Hotel | Depok</title>
    <!-- All CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" style="width: 12rem" class="d-inline-block align-text-top">
            </a><button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
                type="button"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#special">Special Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#facility">Facility</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-indicators">
            <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
                type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1"
                data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3"
                data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="..." class="d-block w-100" src="img/slider1.jpg">
                <div class="carousel-caption">
                    <h5>The Dojo Hotel</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                        excepturi quas vero.</p>
                    <div class="card">
                        <div class="card-body text-dark">
                            This is some text within a card body.
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="img/slider2.jpg">
                <div class="carousel-caption">
                    <h5>Always Dedicated</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                        excepturi quas vero.</p>
                    <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="img/slider3.jpg">
                <div class="carousel-caption">
                    <h5>True Construction</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                        excepturi quas vero.</p>
                    <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
                </div>
            </div> --}}
        </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
            type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                class="visually-hidden">Previous</span></button> <button class="carousel-control-next"
            data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
                class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
    </div><!-- rooms section starts -->

    <section class="rooms section-padding" id="rooms">
        <div class="container">
            <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="about-img"><img alt="" class="img-fluid" src="img/superior.jpg"></div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12 ps-lg-4 mt-md-4">
                            <div class="about-text">
                                <h2 class="room-text">Superior Room</h2>
                                <p>Embrace at the comfort and atmosphere of the best Depok Hotel Rooms as you stay with
                                    Dojo
                                    Hotel. Slick, modern, and beautiful, our Hotel rooms is simply an experience
                                    designed for a
                                    pleasurable and enjoyable time.</p>
                                <a class="btn btn-room" href="#">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12 ps-lg-4 mt-md-4">
                            <div class="about-text">
                                <h2 class="room-text">Deluxe Room</h2>
                                <p>Embrace at the comfort and atmosphere of the best Depok Hotel Rooms as you stay with
                                    Dojo
                                    Hotel. Slick, modern, and beautiful, our Hotel rooms is simply an experience
                                    designed for a
                                    pleasurable and enjoyable time.</p>
                                <a class="btn btn-room" href="#">More Details</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="about-img"><img alt="" class="img-fluid" src="img/deluxe.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="about-img"><img alt="" class="img-fluid" src="img/suite.jpg"></div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12 ps-lg-4 mt-md-4">
                            <div class="about-text">
                                <h2 class="room-text">Suite Room</h2>
                                <p>Embrace at the comfort and atmosphere of the best Depok Hotel Rooms as you stay with
                                    Dojo
                                    Hotel. Slick, modern, and beautiful, our Hotel rooms is simply an experience
                                    designed for a
                                    pleasurable and enjoyable time.</p>
                                <a class="btn btn-room" href="#">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- rooms section Ends -->

    <!-- special strats -->
    <section class="special section-padding" id="special">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Special Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card bg-white pb-2 shadow p-2 mb-5 bg-body rounded">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/special1.jpg"></div>
                            <h5 class="card-title">Weekend Offers</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                eligendi
                                modi temporibus alias iste. Accusantium?</p><button class="btn btn-room">More
                                Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card bg-white pb-2 shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/special2.jpg"></div>
                            <h5 class="card-title">Flexible Staycation</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                eligendi
                                modi temporibus alias iste. Accusantium?</p><button class="btn btn-room">More
                                Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card bg-white pb-2 shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/special3.jpg"></div>
                            <h5 class="card-title">Best Flexible Rate</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                eligendi
                                modi temporibus alias iste. Accusantium?</p><button class="btn btn-room">More
                                Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- special ends -->

    <!-- facility starts -->
    <section class="facility section-padding" id="facility">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Facility</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card bg-white pb-2 shadow p-2 mb-5 bg-body rounded">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/pool.jpg"></div>
                            <h5 class="card-title">Swimming Pool</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                eligendi
                                modi temporibus alias iste. Accusantium?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card bg-white pb-2 shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/restaurant.jpg"></div>
                            <h5 class="card-title">Italian Restaurant</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                eligendi
                                modi temporibus alias iste. Accusantium?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card bg-white pb-2 shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/meeting.jpg"></div>
                            <h5 class="card-title">Meeting Room</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                eligendi
                                modi temporibus alias iste. Accusantium?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- facility section Ends -->

    <!-- Contact starts -->
    <section class="contact section-padding" id="contact">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                    <!--for getting the form download the code from download button-->
                </div>
            </div>
        </div>
    </section><!-- contact ends -->
    <!-- footer starts -->
    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All Right Reserved By @website Name</p>
        </div>
    </footer>
    <!-- footer ends -->

    <!-- All Js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
