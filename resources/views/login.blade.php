<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Epic Games Login Screen Clone</title>
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <div class="login-form">
    <div class="logo"><img src="img/logo.png" alt=""></div>

    <div class="social-media">
      <button class="fb"><img src="img/fb.png" alt=""></button>
      <button class="google"><img src="img/google.png" alt=""></button>
      <button class="ps"><img src="img/ps.png" alt=""></button>
      <button class="xbox"><img src="img/xbox.png" alt=""></button>
      <button class="switch"><img src="img/switch.png" alt=""></button>
    </div>

    <h6>Sign In</h6>

    <form action="">
      <div class="textbox">
        <input type="text" placeholder="Username or Email">
        <span class="check-message hidden">Required</span>
      </div>

      <div class="textbox">
        <input type="password" placeholder="Password">
        <span class="check-message hidden">Required</span>
      </div>

      <div class="options">
        <label class="remember-me">
          <span class="checkbox">
            <input type="checkbox">
            <span class="checked"></span>
          </span>
          Remember me
        </label>

        <a href="#">Forgot Your Password</a>
      </div>

      <input type="submit" value="Log In Now" class="login-btn" disabled>
      <div class="privacy-link">
        <a href="#">Privacy Policy</a>
      </div>
    </form>

    <div class="dont-have-account">
      Don't have an Epic Games account?
      <a href="#">Sign Up</a>
    </div>
  </div>

<script src="index.js"></script>

</html>