@extends('layout/app')

@section('Judul')
    Private Detail
@endsection

@section('Content')
    <!-- hero destination -->
    <div class="destination-paket">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-5">
                    <h1>Bali</h1>
                    <div class="row">
                        <div class="col d-flex">
                            <span class="me-5 px-1">
                  <i class="fa-regular fa-map me-2"></i>
                  Island/Adventure
                </span>
                            <span class="me-5 px-1">
                  <i class="fa-sharp fa-solid fa-location-dot me-2"></i>
                  Bali, Indonesia
                </span>
                            <span class="px-1">
                  <i class="fa-sharp fa-solid fa-location-dot me-2"></i>
                  Private Trip
                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-lg-8 ps-5">
                    <div class="img-fluid">
                        <img src="img/gambar3.jpg" id="imgFluid" alt="" />
                    </div>
                    <div class="img-clik flow-over">
                        <img src="img/gambar3.jpg" id="imgClick" onclick="ChangeImage(this.src)" alt="" />
                        <img src="img/nusa.jpg" id="imgClick" onclick="ChangeImage(this.src)" alt="" />
                        <img src="img/b1.jpg" id="imgClick" onclick="ChangeImage(this.src)" alt="" />
                        <img src="img/gambar2.jpg" id="imgClick" onclick="ChangeImage(this.src)" alt="" />
                        <img src="img/nusa.jpg" id="imgClick" onclick="ChangeImage(this.src)" alt="" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-private">
                        <div class="destination-title">
                            <h3>Destination overview</h3>
                        </div>
                        <div class="price-title d-flex justify-content-between">
                            <div class="city">
                                <h4>Bali, Indonesia</h4>
                                <p>60 reviews</p>
                            </div>
                            <div class="star">
                                <i class="fa-sharp fa-solid fa-star"></i><span>4.5</span>
                            </div>
                        </div>
                        <div class="price-city">
                            <span>Price</span>
                            <h4>Rp. 2.500.000 / Pax</h4>
                            <br />
                            <span>Recommend Duration</span>
                            <h4>4 Days 3 Nights</h4>
                        </div>
                        <button type="button" class="btn btn-success">Book Now</button>
                        <hr />
                        <p>
                            Specials offer for new traveler 15 % off. Valid until 5 August 2023
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 px-5 mt-5">
                    <div class="conten-detail">
                        <button type="button" class="btn btn-success" id="btn1" data-bs-toggle="collapse" href="#collapseExample">
                Description
              </button>
                        <button type="button" class="btn btn-success" id="btn2" data-bs-toggle="collapse" href="#collapseExample2">
                What’s include
              </button>
                        <div id="collapseExample" class="collapse show">
                            <div class="card card-body">
                                <p>
                                    If you're planning a trip to Bali, you might want to consider a visit to Nusa Penida. This beautiful island is located southeast of Bali and is known for its stunning beaches, crystal clear waters, and picturesque landscapes. In this article, we'll take
                                    a closer look at Nusa Penida and provide you with some tips for planning your trip.
                                    <br /><br /> The easiest way to get to Nusa Penida is to take a fast boat from Sanur or Padang Bai. The journey takes approximately 45 minutes to 1 hour, depending on the sea conditions. You can also take a ferry from
                                    Padang Bai, which is cheaper but takes longer.
                                </p>
                            </div>
                        </div>
                        <div id="collapseExample2" class="collapse">
                            <div class="card card-body">
                                <div class="acomodation">
                                    <span><i class="icon fa-solid fa-car"></i>Acomodation</span>
                                    <p>
                                        Nusa Penida has a variety of accommodations to choose from, ranging from budget-friendly guesthouses to luxury resorts. Some popular options include:
                                        <li>Semabu Hills Hotel Nusa Penida</li>
                                        <li>Daphila Cottage</li>
                                        <li>La Roja Bungalows</li>
                                        <li>Nusa Veranda Sunset Villas & Restaurant</li>
                                    </p>
                                </div>
                                <div class="destination">
                                    <span><i class="icon fa-solid fa-map-location"></i>Destination</span
                    >
                    <li>Visit Kelingking Beach</li>
                    <li>Explore Angel's Billabong</li>
                    <li>Snorkel at Crystal Bay</li>
                    <li>Visit Broken Beach</li>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end hero -->

    <!-- Destination may you liked -->
    <div class="conten destination-private-martop">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 most-text px-5">
            <h4>Related</h4>
            <h2>Destination may you liked</h2>
          </div>
        </div>
        <div class="row mt-3">
          <div
            class="col-lg-12 d-flex justify-content-between align-items-center px-5 scrol">
            <div class="col-lg-3 img-box">
              <img src="img/nusa.jpg" alt="" />
              <h2>Nusa Penida</h2>
              <p>Kelungkung, Bali</p>
            </div>
            <div class="col-lg-3 img-box">
              <img src="img/nusa.jpg" alt="" />
              <h2>Nusa Penida</h2>
              <p>Kelungkung, Bali</p>
            </div>
            <div class="col-lg-3 img-box">
              <img src="img/nusa.jpg" alt="" />
              <h2>Nusa Penida</h2>
              <p>Kelungkung, Bali</p>
            </div>
            <div class="col-lg-3 img-box">
              <img src="img/nusa.jpg" alt="" />
              <h2>Nusa Penida</h2>
              <p>Kelungkung, Bali</p>
            </div>
            <div class="col-lg-3 img-box">
              <img src="img/nusa.jpg" alt="" />
              <h2>Nusa Penida</h2>
              <p>Kelungkung, Bali</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Last Destination may you liked -->

    <!-- Form -->
    <div class="conten destination-private-martop">
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
                <input
                  type="email"
                  class="form-control"
                  id="Email"
                  placeholder="" />
              </div>
              <div class="col-12">
                <label for="Phone number" class="form-label"
                  >Phone number</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="Phone number"
                  placeholder="" />
              </div>
              <div class="col-12">
                <label for="Message" class="form-label">Message</label>
                <textarea
                  name=""
                  id="Message"
                  class="form-control"
                  cols="30"
                  rows="5"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Sumbit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Last Form -->
@endsection
