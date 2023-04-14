@extends('layout/applogin')

@section('Judul')
    Register
@endsection

@section('Content')
<div class="login register">
    <div class="container">
        <div class="login-box register-box">
            <div class="left-container">
                <img src="img/register_login.png" alt="background-1.png" />
            </div>
            <div class="right-container">
                <h6>Register new traveler</h6>
                <form action="" method="">
                    <input class="form-control" type="text" placeholder="Username" aria-label="default input example" />
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" />
                    <input class="form-control" type="number" placeholder="Phone Number" aria-label="default number example" />
                    <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1" />
                    <input type="password" class="form-control" placeholder="Re-type your Password" id="exampleInputPassword1" />

                    <button type="button" class="btn mt-4">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
