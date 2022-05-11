
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Certificate</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{asset('plugins/fontawesome-free/css/all.min.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{asset('dist/css/adminlte.min.css')}} ">
  <link rel="stylesheet" type="text/css" href="{{asset('css/certificate/certificate.css')}}"
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
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
