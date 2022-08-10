<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel | Zard Article</title>
    <!-- My csss -->
    <link rel="stylesheet" href="{{asset('mycss/css/style.css')}}">
    <!-- Box Icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
        <!-- Header -->
    <header>
        <!-- Nav -->
    <div class="nav container">
        <!-- Logo -->
        <a href="index.html" class="logo">Z<span>ard</span></a>
        <!-- Tombol Login -->
        <a href="" class="login">Login</a>
    </div>

    </header>
    <!-- Post Content -->
    <section class="post-header">
        <div class="header-content post-container">
         @yield('post-head')
        </div>
       </section>  

        <!-- Posts -->
        <section class="post-content post-container">
           @yield('content')
     </section>     

     <div class="footer container">
        <p>&#169; Muhammad Fajar Ilham All Right Reserved</p>
        <div class="social">
            <a href="https://github.com/FajaarIlhaam/"><i class="bx bxl-github"></i></a>
            <a href="https://twitter.com/Zzzzzzzard"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.instagram.com/fajar.ilhaam/"><i class="bx bxl-instagram"></i></a>
        </div>
     </div>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Js -->
    <script src="mycss/js/app.js"></script>
</body>
</html>
