<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login - Interior Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Bootstrap & Template CSS -->
    <link href="/homepage_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/homepage_assets/css/style.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url("https://images.unsplash.com/photo-1600585154340-be6161a56a0c") no-repeat center center/cover;
            position: relative;
            font-family: "Work Sans", sans-serif;
        }

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(17, 17, 17, 0.6);
        }

        .login-box {
            position: relative;
            z-index: 1;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
            animation: fadeInUp 0.8s ease;
        }

        .login-box h2 {
            font-weight: 600;
            color: #444;
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 6px;
            padding: 12px 15px;
        }

        .btn-login {
            background: #febd3f;
            color: #fff;
            border-radius: 6px;
            font-weight: 600;
            padding: 12px;
            transition: 0.3s;
            border: none;
        }

        .btn-login:hover {
            background: #f8c45c;
        }

        .login-footer {
            margin-top: 15px;
            font-size: 14px;
            color: #6c757d;
        }

        .btn-outline-pink {
            color: #fff;
            border-radius: 6px;
            font-weight: 600;
            padding: 10px;
            transition: 0.3s;
            background: #febd3f;
        }

        .btn-outline-pink:hover {
            background: #febd3f;
            color: #fff;
        }

        .login-logo {
            max-width: 180px;
            margin-bottom: 20px;
        }

        .logo-wrapper {
            position: relative;
        }

        .logo-wrapper img {
            position: absolute;
            top: -150px;
            /* naikkan logo ke atas navbar */
            left: -150px;
            /* bisa kamu ganti ke center kalau mau */
            height: 300px;
            /* atur tinggi logo */
            width: auto;
            z-index: -1;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="login-box text-center">
        <!-- Logo Delpro -->
        <a class="logo-wrapper p-0 mb-3" href="{{ route('home') }}"><img src="/homepage_assets/images/logo/delpro.png"
                alt="Delpro Logo">
        </a>

        <h2 class="mt-4">Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                    name="email" required />
                @error('email')
                    <div class="invalid-feedback" style="text-align: left;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" name="password" required />
                @error('password')
                    <div class="invalid-feedback" style="text-align: left;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-login w-100">Login</button>
        </form>

        <div class="login-footer mt-3">
            <a href="/" class="btn btn-outline-pink mt-3 w-100" style="color: #fff; text-decoration: none;">Back
                to Home</a>
        </div>
    </div>
</body>

</html>
