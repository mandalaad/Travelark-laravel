@extends('layout/app')
@section('Judul')
    Discovery Page
@endsection

@section('Content')
    <!-- hero -->
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 px-5 align-items-center left-hero">
                    <div class="content-box">
                        <h1>Exploring Wonderful Indonesia</h1>
                        <p>
                            At Wonderful Indonesia, we believe that travel should be an unforgettable experience, and we're dedicated to making sure that every moment you spend with us is one to remember. So why wait? Book your adventure today and discover the magic of Indonesia.
                        </p>
                        <button type="button" class="btn bg-green1">
                Explore Now <i class="fa-regular fa-circle-right px-3"></i>
              </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 px-5 right-hero">
                    <div class="banner">
                        <img src="img/b1.jpg" alt="" />
                    </div>
                    <div class="banner1">
                        <img src="img/b1.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- Most Picked Destination -->
    <div class="conten">
        <div class="container">
            <div class="row">
                <div class="col-6 most-text px-5">
                    <h4>Recommend</h4>
                    <h2>Most Picked Destination</h2>
                </div>
                <div class="col-6 text-end px-5">
                    <button>See all</button>
                </div>
            </div>
            <div class="row">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="img-box">
                        <img src="img/nusa.jpg" alt="" />
                        <h2>Nusa Penida</h2>
                        <p>Kelungkung, Bali</p>
                    </div>
                    <div class="img-box">
                        <img src="img/nusa.jpg" alt="" />
                        <h2>Nusa Penida</h2>
                        <p>Kelungkung, Bali</p>
                    </div>
                    <div class="img-box">
                        <img src="img/nusa.jpg" alt="" />
                        <h2>Nusa Penida</h2>
                        <p>Kelungkung, Bali</p>
                    </div>
                    <div class="img-box">
                        <img src="img/nusa.jpg" alt="" />
                        <h2>Nusa Penida</h2>
                        <p>Kelungkung, Bali</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Last Most Picked Destination -->

    <!-- Travel Experience -->
    <div class="travel-experience travel-experience-discovery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 left-travel-experience">
                    <div class="content-left-travel">
                        <h1>
                            The Best Early <br />
                            <span>Travel Experience</span>
                        </h1>
                        <p>
                            We offer a wide range of services and have many choices of travel packages to accompany your trip. In addition, we also uphold corporate values.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 right-travel-experience">
                    <div class="box box-our-ethics">
                        <div class="up-side">
                            <h6>
                                <img src="img/our-ethics.png" class="me-2" alt="" />Our Ethics
                            </h6>
                        </div>
                        <div class="down-side">
                            <p>Prioritizing Happy Traveling, Upholding Culture</p>
                        </div>
                    </div>
                    <div class="box box-innovations">
                        <div class="up-side">
                            <h6>
                                <img src="img/innovations.png" class="me-2" alt="" />Innovations
                            </h6>
                        </div>
                        <div class="down-side">
                            <p>Innovating in Service to Our Travel Customers</p>
                        </div>
                    </div>
                    <div class="box box-responsibility">
                        <div class="up-side">
                            <h6>
                                <img src="img/responsibility.png" class="me-2" alt="" />Responsibility
                            </h6>
                        </div>
                        <div class="down-side">
                            <p>Trusted And Experienced Travel Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Last Experience -->

    <!-- Our Package -->
    <div class="our-package">
        <div class="container">
            <div class="our-package-content">
                <div class="up-side-content text-center">
                    <h1>Our Package</h1>
                    <h6>More than one destination you will visit</h6>
                </div>
                <div class="middle-side-content">
                    <div class="card private-trip">
                        <h6>1st Package</h6>
                        <h1>Private Trip</h1>
                        <p>
                            Enjoy the luxury of having your own private guide, who will take you to hidden gems and off-the-beaten-path locations that you won't find in any guidebook.
                        </p>

                        <div class="sky sky-1">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                        <div class="sky sky-2">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                        <div class="sky sky-3">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                        <div class="sky sky-4">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                        <div class="sky sky-5">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                    </div>
                    <div class="card open-trip">
                        <h6>2nd Package</h6>
                        <h1>Open Trip</h1>
                        <p>
                            With an open trip, you'll have the opportunity to connect with travelers from all over the world, creating lifelong friendships and unforgettable memories.
                        </p>
                        <div class="sky sky-1">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                        <div class="sky sky-2">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                        <div class="sky sky-3">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                        <div class="sky sky-4">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                        <div class="sky sky-5">
                            <img src="img/sky.png" alt="sky.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Last Package -->

    <!-- Get First trip -->
    <div class="get-first-trip get-first-trip-discovery">
        <div class="container">
            <div class="our-package-content">
                <div class="down-side-content">
                    <div class="row down-side-rows">
                        <div class="col-9 left-down-side">
                            <h1>Get 15% <span>for your</span> first trip</h1>
                            <p>
                                Attention all first-time travelers! We're excited to offer an exclusive discount just for you. Book your first trip with us today and receive 10% off your entire journey.
                            </p>
                        </div>
                        <div class="col-3 right-down-side">
                            <button type="button" class="btn button">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Last Get First trip -->
@endsection
