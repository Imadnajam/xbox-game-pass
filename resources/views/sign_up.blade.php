<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="login-form">
        <div class="logo"> <a href="{{route('home')}}"><img src="{{ asset('auth/img/logo.svg') }}" alt=""></a></div>

        <div class="social-media">
            <button class="fb"><img src="{{ asset('auth/img/fb.png') }}" alt=""></button>
            <button class="google"><img src="{{ asset('auth/img/google.png') }}" alt=""></button>
            <button class="ps"><img src="{{ asset('auth/img/ps.png') }}" alt=""></button>
            <button class="xbox"><img src="{{ asset('auth/img/xbox.png') }}" alt=""></button>
            <button class="switch"><img src="{{ asset('auth/img/switch.png') }}" alt=""></button>
        </div>

        <h6>Sign up</h6>

        <form action="{{route('sign_up_user')}}" method="POST">
            @csrf
            <div class="textbox">
                <input type="text" placeholder="Username" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="check-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="textbox">
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="check-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="textbox">
                <input type="password" placeholder="Password" name="password">
                @error('password')
                    <span class="check-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="textbox">
                <input type="password" placeholder="Confirm Password" name="password_confirmation">
                @error('password_confirmation')
                    <span class="check-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="options">
                <label class="remember-me">
                    <span class="checkbox">
                        <input type="checkbox" name="remember">
                        <span class="checked"></span>
                    </span>
                    Remember me
                </label>

                <a href="#">Forgot Your Password</a>
            </div>

            <input type="submit" value="create account" class="login-btn">
            <div class="privacy-link">
                <a href="#">Privacy Policy</a>
            </div>
        </form>

        <div class="dont-have-account">
           you have an XBOX Games account?
            <a href="{{route('login')}}">Sign Up</a>
        </div>
    </div>

    <script src="{{ asset('auth/js/main.js') }}"></script>

</html>
