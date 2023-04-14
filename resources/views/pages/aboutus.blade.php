@extends('layout/app')
@section('Judul')
    About Us
@endsection

@section('Content')
    <!-- hero -->
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 px-5 align-items-center left-hero">
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
                    <div class="about-us-border-hero">
                        <img src="img/about-us-border-hero.png" alt="" />
                    </div>
                    <div class="about-us-image-hero">
                        <img src="img/register_login.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- Travel Experience -->
    <div class="travel-experience travel-experience-reverse">
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
    <div class="our-package mar-top">
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

    <!-- most picked -->
    <div class="conten content-about-us-martop">
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
    <!-- end msot -->

    <!-- Form -->
    <div class="conten form-abput-us-martop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wonderful-title px-5 text-center">
                    <h1>Need our help?</h1>
                    <h5>Contact us freely to get any information you need</h5>
                </div>
            </div>
            <div class="row">
                <div class="contact px-5">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="First name" class="form-label">First name</label>
                            <input type="text" class="form-control" id="First name" />
                        </div>
                        <div class="col-md-6">
                            <label for="Last name" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="Last name" />
                        </div>
                        <div class="col-12">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="Email" placeholder="" />
                        </div>
                        <div class="col-12">
                            <label for="Phone number" class="form-label">Phone number</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="Phone number"
                  placeholder="" />
              </div>
              <div class="col-12">
                <label for="Message" class="form-label">Message</label>
                            <textarea name="" id="Message" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sumbit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
