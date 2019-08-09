<!DOCTYPE html>
<html>
<title>Big Dreams - MLM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,
    h1 {
        font-family: "Raleway", sans-serif;
    }

    body,
    html {
        height: 100%
    }

    .bgimg {
        background-image: linear-gradient(to right, rgba(0, 0, 0, .8), rgba(0, 0, 0, .8)), url('/images/hero-1.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
</style>

<body>

    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge">
            Logo
        </div>
        <div class="w3-display-topright w3-padding-large w3-xlarge">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}" class="w3-btn w3-ripple w3-red">Home</a>
                @else
                <a href="{{ route('login') }}" class="w3-btn w3-ripple w3-red">Login</a>
                @endauth
            </div>
            @endif</p>
        </div>
        <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-animate-top">Big Dreams Vision</h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%">
            <p class="">

        </div>
    </div>

</body>

</html>