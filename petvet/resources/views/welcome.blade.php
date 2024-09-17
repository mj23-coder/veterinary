<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>PetVet</title>
</head>
<body>
    <img class="pet" src="{{ asset('images/pet.jpg') }}" alt="Hero Image"> 
    <br>
    <br>
    <div class="container">
        <div class="form-container form-sign-in">
            <h2 class="form-title">Welcome to PetVet</h2>
            <label class="form-label">
                <span class="label-text">Email</span>
                <input type="email" class="form-input" />
            </label>
            <label class="form-label">
                <span class="label-text">Password</span>
                <input type="password" class="form-input" />
            </label>
            <p class="forgot-password">Forgot password?</p>
            <button type="button" class="form-button">Sign In</button>
        </div>
        <div class="sub-container">
            <div class="image-container">
                <div class="image-text image-text--up">
                    <h3>Don't have an account? Please Sign Up!</h3>
                    <img class="corgi-image" src="{{ asset('images/corgi.png') }}" alt="Corgi">
                </div>
                <div class="image-text image-text--in">
                    <h3>If you already have an account, just sign in.</h3>
                    <img class="corgi-image" src="{{ asset('images/corgi.png') }}" alt="Corgi">
                </div>
                <div class="image-buttons">
                    <span class="image-button--up">Sign Up</span>
                    <span class="image-button--in">Sign In</span>
                </div>
            </div>
            <div class="form-container form-sign-up">
                <h2 class="form-title">Create your Account</h2>
                <label class="form-label">
                    <span class="label-text">Name</span>
                    <input type="text" class="form-input" />
                </label>
                <label class="form-label">
                    <span class="label-text">Email</span>
                    <input type="email" class="form-input" />
                </label>
                <label class="form-label">
                    <span class="label-text">Password</span>
                    <input type="password" class="form-input" />
                </label>
                <button type="button" class="form-button">Sign Up</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/js.js') }}"></script>
</body>
</html>
