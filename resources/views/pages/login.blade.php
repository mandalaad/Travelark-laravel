@extends('layout/applogin')

@section('Judul')
    Login
@endsection

@section('Content')
<div class="login">
    <div class="container">
        <div class="login-box">
            <div class="left-container">
                <img src="img/register_login.png" alt="background-1.png" />
            </div>
            <div class="right-container">
                <h6>Welcome Travelers</h6>
                <form action="{{Route('process-login')}}" method="POST">
                    @csrf
                    <input class="form-control" type="username" placeholder="Username" aria-label="default input example" name="username" required />

                    <input class="form-control" type="password" placeholder="Password" aria-label="default input example" name="password" required/>
                    <button type="submit" class="btn mt-4">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
