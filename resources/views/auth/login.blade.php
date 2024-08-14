<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.2.0/tailwind.min.css">
    <style>
        body {
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 1rem;
        }
        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .form-button {
            background-color: #4F46E5;
            color: white;
            border: none;
            padding: 0.75rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-button:hover {
            background-color: #4338CA;
        }
        .form-link {
            color: #4F46E5;
            text-decoration: none;
            transition: color 0.3s;
        }
        .form-link:hover {
            color: #4338CA;
        }
        .form-input {
            border: 1px solid #D1D5DB;
            border-radius: 4px;
            padding: 0.75rem;
            width: 100%;
            box-sizing: border-box;
        }
        .form-input:focus {
            border-color: #4F46E5;
            outline: none;
            box-shadow: 0 0 0 2px rgba(79, 113, 231, 0.3);
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1rem;
            color: #4B5563;
        }
        .form-error {
            color: #EF4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Logo -->
        <img src="{{ asset('all_image/logo2.png') }}" alt="Logo" class="logo">

        {{-- <img src="{{asset('all_image')}}/assets/images/logo_white.png" class="img-fluid" alt="logo"> --}}

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-title">Login</div>

            <!-- Email Address -->
            <div class="mb-6">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                @error('email')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Remember Me -->
            <div class="flex items-center mt-4">
                <input id="remember_me" type="checkbox" class="form-input" name="remember">
                <label for="remember_me" class="ml-2 text-sm text-gray-600 flex items-center cursor-pointer">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>
            
            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="form-link text-sm" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="form-button">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</body>
</html>
