@extends('layout/appcheckout')
@section('Judul')
    Destination Checkout
@endsection

@section('Content')
<div class="checkout">
    <div class="container">
        <div class="checkout1 d-flex justify-content-center">
            <img src="img/travelark-green.png" alt="travelark-green.png" />
            <img src="img/line-2.png" class="line" alt="line-2.png">
            <h6>Explore Wonderful Indonesia</h6>
        </div>
        <div class="row mt-5 middle-card">
            <div class="col-4 text-start back">
                <button type="button" class="btn bg-green1">
          <i class="fa-regular fa-circle-left me-3"></i>Back
        </button>
            </div>
            <div class="col-4 text-center checkout-details">
                <h6>Checkout Details</h6>
            </div>
            <div class="col-4 text-end first-step">
                <h6>First Step</h6>
            </div>
        </div>
        <form action="" method="">
            <div class="card card-checkout middle-card-checkout">
                <div class="row middle-card-content">
                    <div class="col-12 mt-3 px-5">Travel Order</div>
                    <div>
                        <hr />
                    </div>
                    <div class="col-lg-3 px-3">
                        <div class="foto-checkout d-flex">
                            <div>
                                <img src="img/nusa.jpg" alt="..." />
                            </div>
                            <div style="margin-left: 20px; margin-top: 10px">
                                <h5 class="pt-2">Nusa Penida, Bali</h5>
                                <p>Destination</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-3 text-center">
                        <div>
                            <h5 class="pt-2">Rp. 1.000.000/pax</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <div class="d-flex">
                            <label for="datepicker" class="me-2 pt-2">Tickets for</label>
                            <!-- <input type="date" id="datepicker" name="datepicker"> -->
                            <input class="form-control w-50" type="date" placeholder="" aria-label="default input example" />
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="d-flex">
                            <label for="quantity" class="me-2 pt-2">Tickets</label>
                            <!-- <input type="number" id="quantity" name="quantity" min="1"> -->
                            <input class="form-control w-25" type="number" placeholder="" aria-label="default input example" min="1" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-checkout mt-3">
                <div class="row">
                    <div class="col-12 mt-3 px-5">Billing details</div>
                    <div>
                        <hr />
                    </div>
                    <div class="form-checkout mt-2 mb-5">
                        <div class="row m-auto">
                            <div class="col-md-6">
                                <label for="input" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="text" />
                            </div>
                            <div class="col-md-6">
                                <label for="input" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="text2" />
                            </div>
                            <div class="col-12">
                                <label for="inputemail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputemail4" />
                            </div>
                            <div class="col-12">
                                <label for="input" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="phone-number" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-checkout mt-4 w-100">
        Checkout
      </button>
        </form>
    </div>
</div>
@endsection
