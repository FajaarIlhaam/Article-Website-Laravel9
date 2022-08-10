<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zard | Article</title>
    <!-- My csss -->
    <link rel="stylesheet" href="mycss/css/style.css">
    <!-- Box Icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <!-- Fa Fa Icon -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <!-- Header -->
    <header>
        <!-- Nav -->
    <div class="nav container">
        <!-- Logo -->
        <a href="" class="logo">Z<span>ard</span></a>
        <!-- Search -->
        <div class="box">
            <input type="checkbox" id="check">
     <div class="search-box">
        <input type="text" placeholder="Cari Artikel...">
        <label for="check" class="icon">
           <i class="fa fa-search"></i>
        </label>
     </div>
    </div>
        <!-- Tombol Login -->
        <a href="/login" class="login">Login</a>
    </div>

    </header>
        <!-- Home -->
        <section class="home" id="home">
            <div class="home-text container">
             <h2 class="home-title">Zard Article</h2>
             <span class="home-subtitle">Selamat Datang di Zard Article </span>
            </div> 
         </section>
 
         <!-- Post Filter -->
         <div class="post-filter container">
             <span class="filter-item active-filter" data-filter="all">Semua</span>
             <span class="filter-item"  data-filter="berita">Berita</span>
             <span class="filter-item"  data-filter="tutorial">Tutorial</span>
             <span class="filter-item"  data-filter="olahraga">Olahraga</span>
         </div>
 
         <!-- Posts -->
    <section class="post container">
        @yield('post')
    </section>

       <!-- Footer -->
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