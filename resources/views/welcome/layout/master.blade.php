<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga" rel="stylesheet">
    <link href=" {{asset('css/admin/sb-admin-2.min.css')}} " rel="stylesheet">


    
    <title>@yield('title') </title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/main.css')}}"
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome/CSS.css')}}"
    

  </head>
  <body id="page-top">

  <!-- Navbar -->
 <nav class="navbarbawah navbar navbar-light  navbar-expand fixed-bottom bgcolor">
    <ul class="navbar-nav nav-justified w-100">
      <li class="navket nav-item nav-x">
        <h3 style="color: white;">E-Kerja</h3>
      </li>
      <li class="nav-item nav-home">
        
      </li>
      <li class="navket nav-item nav-home">
        <a href="/" class="nav-link nav" style="color: white;">Home</a>
      </li>
        <li class="navket nav-item dropdown nav-category">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/tik">Teknologi Informasi dan Komunikasi</a></li>
            <li><a class="dropdown-item" href="/teknik-elektronika" onclick="return false;">Teknik Elektronika</a></li>
            <li><a class="dropdown-item" href="/teknik-elektronika" onclick="return false;">Agribisnis</a></li>
            <li><a class="dropdown-item" href="/teknik-elektronika" onclick="return false;">Manajemen Ekonomi dan Bisnis</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      <li class="navket nav-item nav-login">
        <a href="/login" class="nav-link nav" style="color: white;">Login</a>
      </li>
    </ul>
  </nav>
  <!-- Akhir Navbar -->
  <?php $a=  url('img/bg-4.jpg'); ?>

<!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid" style="background-image: url('img/bg-4.jpg');">
        <div class="container">
            <h1 class="display-4">GREAT HARDER <span>WORK </span> <br>AND <span> BETTER</span>  WITH US </h1>
            <a href="" class="btn btn-success">Gallery</a>

        </div>
        </div>

<!-- JumboTron -->

<!-- Container -->

        <div class="container">
        
            <!-- info panel -->
                <div class="row justify-content-center">
                    <div class="col-10 info-panel">
                        <div class="row">
                            <div class="col-lg">
                                <img src="{{asset('img/time.jpg')}}" alt="payroll" class="float-left">
                                <h4>Time</h4>
                                <p>Belajar di mana saja dan kapan saja</p>
                            </div>
                            <div class="col-lg">
                                <img src="{{asset('img/task.jpg')}}" alt="task" class="float-left">
                                <h4>Course</h4>
                                <p>Materi yang berkualitas</p>
                            </div>
                            <div class="col-lg">
                                <img src="{{asset('img/shield.jpg')}}" alt="security" class="float-left">
                                <h4>Protect</h4>
                                <p>Kami berkomitmen dalam melindungi data</p>
                            </div>

                        </div>
                    
                    </div>
                </div>

            <!-- akhir info Panel -->

            @yield('content')

            

            <!-- Footer -->
            <div class="footer">

                <div class="row">
                    <div class="col-md-2 foot">
                        <h3>Social Media</h3>
                        <p><a href=""><img src="https://img.icons8.com/cute-clipart/24/000000/instagram-new.png"/></a>   Instagram </p> 
                        <p><a href=""><img src="https://img.icons8.com/cute-clipart/24/000000/twitter.png"/></a>   Twitter </p> 
                    </div>
                    <div class="col-md-2 foot">
                        <h3>Contact Us</h3>
                        <p>ekerjapelatihan@gmail.com</p>
                    </div>
                    <div class="col-md-2 foot">
                        <h3>About Us</h3>
                        <p>We are student of The Learning University</p>
                    </div>
                </div>

                

            </div>
            <!-- Akhir Footer -->

       <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>     

<!-- Akhir Container -->

   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     
    <script src=" {{asset('js/jquery/jquery-3.6.0.min.js')}} "></script>
    <!-- Bootstrap core JavaScript-->
    <script src=" {{asset('vendor/jquery/jquery.min.js')}} "></script>
    <script src=" {{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>

    <!-- Core plugin JavaScript-->
    <script src=" {{asset('vendor/jquery-easing/jquery.easing.min.js')}} "></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{asset('js/admin/sb-admin-2.min.js')}} "></script>

  
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <script src=" {{asset('js/jquery/jquery-3.6.0.min.js')}} "></script>
    <script>
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
        });
    </script>

  </body>
</html>