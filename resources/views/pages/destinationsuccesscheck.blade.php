@extends('layout/appcheckout')
@section('Judul')
    Destination Successfuly Checkout
@endsection

@section('Content')
     <!-- sesi 1 order detail -->
     <div class="checkout">
        <div class="container">
            <div class="checkout1 d-flex justify-content-center">
                <img src="img/travelark-green.png" alt="travelark-green.png" />
                <img src="img/line-2.png" class="line" alt="line-2.png" />
                <h6>Explore Wonderful Indonesia</h6>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <h6 class="order-successfuly">Order Successfuly</h6>
                </div>
            </div>
            <div class="card card-checkout">
                <div class="row p-3">
                    <div class="col-lg-12 text-center mt-3">
                        <h5>Your invoice</h5>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="col-lg-3 mt-2 p-3">
                        <label for="">Transaction Number</label>
                        <h6>TRX221XXXXXXXX-313KWKWKWK</h6>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <label for="datepicker" class="me-2">Tickets Date</label>
                        <!-- <input type="date" id="datepicker" name="datepicker"> -->
                        <input class="form-control w-50" type="date" placeholder="" aria-label="default input example" />
                    </div>
                    <div class="col-lg-3 mt-2">
                        <label for="status" class="me-2">Status</label>
                        <!-- <input class="form-control w-25" type="number" placeholder="" aria-label="default input example" min="1"> -->
                        <h6>Success</h6>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <label for="category" class="me-2">Category</label>
                        <!-- <input class="form-control w-25" type="number" placeholder="" aria-label="default input example" min="1"> -->
                        <h6>Destinations</h6>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-lg-2 mt-2">
                        <h6>Destination</h6>
                        <h5>Nusa Penida, Bali</h5>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <label for="datepicker" class="me-2">Tickets Date</label>
                        <!-- <input type="date" id="datepicker" name="datepicker"> -->
                        <input class="form-control w-50" type="date" placeholder="" aria-label="default input example" />
                    </div>
                    <div class="col-lg-2 mt-2">
                        <label for="price" class="me-2">Tickets quantity</label>
                        <!-- <input class="form-control w-25" type="number" placeholder="" aria-label="default input example" min="1"> -->
                        <h5>2 Tickets</h5>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <label for="price" class="me-2">Price</label>
                        <!-- <input class="form-control w-25" type="number" placeholder="" aria-label="default input example" min="1"> -->
                        <h5>Rp.1.000.000</h5>
                    </div>
                    <div class="col-lg-2 mt-2">
                        <label for="total-price" class="me-2">Total Price</label>
                        <h5>Rp.2.000.000</h5>
                    </div>
                </div>
                <div class="mx-3 me-3">
                    <hr />
                </div>
                <div class="row p-3">
                    <div class="col-lg-3 mt-2">
                        <label for="firstname-checkout" class="firstname">First Name</label>
                        <!-- <input class="form-control" id="firstname" type="text" placeholder="" aria-label="default input example"> -->
                        <h5>Rylan</h5>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <label for="lastname-checkout" class="lastname">Last Name</label>
                        <!-- <input class="form-control" id="lastname" type="text" placeholder="" aria-label="default input example"> -->
                        <h5>Ristia</h5>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <label for="email-checkout" class="email">Email</label>
                        <!-- <input class="form-control" id="email" type="email" placeholder="" aria-label="default input example"> -->
                        <h5>rylanristia@gmail.com</h5>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <label for="phone-number" class="phone-number">Phone Number</label>
                        <!-- <input class="form-control" id="phone-number" type="number" placeholder="" aria-label="default input example"> -->
                        <h5>0857 8554 8877</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end order detail -->

    <!-- sesi 2 order button -->
    <div class="container">
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-checkout mt-4 w-50">
          Back to Home
        </button>
        </div>
    </div>
    <!-- end sesi 2 order button -->
@endsection
