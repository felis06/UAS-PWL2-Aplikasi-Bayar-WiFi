<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Blog</title>
</head>

<body>
    <div style=" max-width: 548px;
        margin: 0 auto;
        min-height: 100vh;
        background-color: pink;">
        <div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
            <div class="d-flex flex-column gap-2 pt-2">
                <div class="col d-flex flex-column justify-content-between" style="margin:48px">
                    <h2 class="card-title text-center">{{ __('auth.register') }}</h2>
                    <form method="POST" action="{{ route('register')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('auth.nama') }}</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('auth.email') }}</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">{{ __('auth.telp') }}</label>
                            <input type="text" class="form-control" id="telp" name="telp" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('auth.password') }}</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="pin" class="form-label">{{ __('auth.pin') }}</label>
                            <input type="password" class="form-control" id="pin" name="pin" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">{{ __('auth.register') }}</button>
                    </form>
                    <span class="text-center mt-2">
                        {{ __('auth.detail2') }}<a href="{{route('login')}}" style="text-decoration: none;"> Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>