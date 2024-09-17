<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <title>VET TO</title>
    </head>
    <body >
        <img class="pets" src="{{ asset('images/pet.jpg') }}" alt=""> 
        <br>
        <br>
        <div class="cont">
            <div class="form sign-in">
                <h2>Welcome to PetVet</h2>
                <label>
                    <span>Email</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" />
                </label>
                    <p class="forgot-pass">Forgot password?</p>
                    <button type="button" class="submit">Sign In</button>
            </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">
                        <h3>Don't have an account? Please Sign up!<h3>
                        <img class="corgi" src="{{ asset('images/corgi.png') }}" alt="">
                    </div>
                    <div class="img__text m--in">
                        <h3>If you already has an account, just sign in.<h3>
                        <img class="corgi" src="{{ asset('images/corgi.png') }}" alt="">
                    </div>
                    <div class="img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <h2>Create your Account</h2>
                    <label>
                        <span>Name</span>
                        <input type="text" />
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" />
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" />
                    </label>
                    <button type="button" class="submit">Sign Up</button>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/js.js') }}"></script>
    </body>
</html>
