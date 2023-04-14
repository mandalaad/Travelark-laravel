@extends('layout/app')
@section('Judul')
    Package Page
@endsection

@section('Content')
    <!-- hero -->
    <div class="hero-package">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 px-5 left-hero">
                    <div class="content-box">
                        <h1>Travel Package</h1>
                        <p>
                            Looking for the perfect travel package? Look no further! We offer both open trips and private trips to [Destination], so you can choose the option that best suits your needs.
                        </p>
                        <button type="button" class="btn bg-green1">
                Explore Now <i class="fa-regular fa-circle-right px-3"></i>
              </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 right-hero">
                    <div class="one-box"></div>
                    <div class="two-box"></div>
                    <div class="three-box">
                        <img src="img/gambar1.jpg" alt="" />
                    </div>
                    <div class="four-box">
                        <img src="img/gambar2.jpg" alt="" />
                    </div>
                    <div class="five-box">
                        <img src="img/gambar3.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- most picked -->
    <div class="conten private-trip-experience-martop">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-12 most-text px-5">
                    <h4>Solo Traveler</h4>
                    <h2>Private Trip Experience</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 px-5">
                    <div class="conten-button">
                        <button type="button" class="btn btn-success">
                <i class="fa-regular fa-calendar"></i>Choose your own date
              </button>
                        <button type="button" class="btn btn-success">
                <i class="fa-solid fa-user-group"></i>Solo or intimate group
              </button>
                        <button type="button" class="btn btn-success">
                <i class="fa-solid fa-building"></i>Custom destination
              </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-conten">
                        Our team of experts will work with you to create a custom itinerary based on your interests, preferences, and travel style. Whether you're interested in exploring the local culture, indulging in delicious cuisine, or embarking on an adventurous outdoor
                        excursion, we'll create a trip that's tailored to your specific needs.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end msot -->

    <!-- Private Trip Experience & Wonderful Place -->
    <div class="conten wonderful-package-martop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wonderful-title px-5 text-center">
                    <h1>Wonderful Place</h1>
                    <h5>Any destination you want</h5>
                </div>
            </div>
            <div class="row">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="img-box">
                        <img src="img/nusa.jpg" alt="" />
                        <h2>Nusa Penida</h2>
                    </div>
                    <div class="img-box">
                        <img src="img/nusa.jpg" alt="" />
                        <h2>Nusa Penida</h2>
                    </div>
                    <div class="img-box">
                        <img src="img/nusa.jpg" alt="" />
                        <h2>Nusa Penida</h2>
                    </div>
                    <div class="img-box">
                        <img src="img/nusa.jpg" alt="" />
                        <h2>Nusa Penida</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Last Private Trip Experience & Wonderful Place -->

    <!-- Private Trip Experience & Wonderful Place -->
    <div class="conten-fluid mar-top">
        <div class="conten private-trip-experience-martop conten-fluid-pad-top">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-12 most-text px-5">
                        <h4>Solo Traveler</h4>
                        <h2>Private Trip Experience</h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 px-5">
                        <div class="conten-button">
                            <button type="button" class="btn btn-success">
                  <i class="fa-regular fa-calendar"></i>Choose your own date
                </button>
                            <button type="button" class="btn btn-success">
                  <i class="fa-solid fa-user-group"></i>Solo or intimate group
                </button>
                            <button type="button" class="btn btn-success">
                  <i class="fa-solid fa-building"></i>Custom destination
                </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-conten color-white">
                            Our team of experts will work with you to create a custom itinerary based on your interests, preferences, and travel style. Whether you're interested in exploring the local culture, indulging in delicious cuisine, or embarking on an adventurous outdoor
                            excursion, we'll create a trip that's tailored to your specific needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="conten wonderful-package-martop conten-fluid-pad-bot">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wonderful-title px-5 text-center">
                        <h1>Wonderful Place</h1>
                        <h5>Any destination you want</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="img-box">
                            <img src="img/nusa.jpg" alt="" />
                            <h2>Nusa Penida</h2>
                            <p>26 April 2023 | 20 slot lefts</p>
                        </div>
                        <div class="img-box">
                            <img src="img/nusa.jpg" alt="" />
                            <h2>Nusa Penida</h2>
                            <p>15 May 2023 | 50 slot lefts</p>
                        </div>
                        <div class="img-box">
                            <img src="img/nusa.jpg" alt="" />
                            <h2>Nusa Penida</h2>
                            <p>30 April 2023 | 10 slot lefts</p>
                        </div>
                        <div class="img-box">
                            <img src="img/nusa.jpg" alt="" />
                            <h2>Nusa Penida</h2>
                            <p>15 April 2023 | 4 slot lefts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Last Private Trip Experience & Wonderful Place -->

    <!-- Our Package -->
    <div class="get-first-trip get-first-trip-package">
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
    <!-- Our Last Package -->
@endsection
