
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Certificate</title>
  <style>
  body, html {

}
body {
    color: black;

    font-family: Georgia, serif;
    font-size: 24px;
    text-align: center;
    
}
.container {
    border: 20px solid tan;
    width: 750px;
    height: 563px;
 
    vertical-align: middle;
    
}
.logo {
    color: tan;
}

.marquee {
    color: tan;
    font-size: 48px;
    margin: 20px;
}
.assignment {
    margin: 20px;
}
.person {
    border-bottom: 2px solid black;
    font-size: 32px;
    font-style: italic;
    margin: 20px auto;
    width: 400px;
}
.reason {
    margin: 20px;
}
.download{
    margin-left: 100px;
    margin-top: 20px ;
}
  </style>

  <!-- Google Font: Source Sans Pro -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{asset('plugins/fontawesome-free/css/all.min.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{asset('dist/css/adminlte.min.css')}} ">

</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
                <div class="container">
            <div class="logo">
                An Organization
            </div>

            <div class="marquee">
                Certificate of Recognition
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
                {{auth()->user()->name}}
            </div>

            <div class="reason">
                For completed a job training program
            </div>
            <img src="https://img.icons8.com/color/96/000000/best-seller.png"/>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
</body>
</html>
