<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presensi Asisten</title>
    <link rel="stylesheet" href="/css/login.css">

    {{-- google fonts start--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- google fonts end --}}

    {{-- icon start --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- icon end --}}
</head>
<body>
    <div class="wrapper">
    <h1>Login</h1>
        <form action="/login" method="post">
            @csrf
            <div class="input-box">
                <input type="text" name="username" @error ('username') is-invalid @enderror id="username" placeholder="Username" autofocus required value="{{old('username')}}">
                <i class='bx bxs-user'></i>
                <label for="username">Username</label>
            </div>
            <div class="input-box">
                <input type="Password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
                <label for="password">Password</label>
            </div>
            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>
                    Belum punya akun? <a href="registrasi">Register</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>