<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="login-container d-flex justify-content-center align-items-center flex-row">
        <div class="login-info d-flex justify-content-center align-items-center flex-column">
            <h1>Cattofee</h1>
            <p>Teman Nongkrong <br> Beda dari Lainnya</p>
        </div>
        <div class="login-form d-flex justify-content-center align-items-center flex-column">
            <h2>Login</h2>
            @if ($errors->any())
                <div class="validation-error">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <div class="login-forms d-flex justify-content-center align-items-center flex-column">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="user-box -flex justify-content-center align-items-center flex-column">
                        <label>Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="pass-box -flex justify-content-center align-items-center flex-column">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <button type="submit"
                        class="d-flex justify-content-center align-items-center flex-column">Login</button>
                </form>
            </div>

            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
