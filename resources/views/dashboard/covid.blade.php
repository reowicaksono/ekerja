<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid-19 | Indonesia</title>
        <script src=" {{asset('js/jquery/jquery-3.6.0.min.js')}} "></script>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" {{asset('css/admin/sb-admin-2.min.css')}} " rel="stylesheet">
</head>
<body>

    <h1>Peta Sebaran Covid-19 di Indonesia</h1>
    {!! $chart->container() !!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $chart->script() !!}

        <a href="{{route('dashboard')}}" style="float: right; width: 120px;" class="btn btn-success">&laquo; Back</a>
        

        <script src=" {{asset('js/jquery/jquery-3.6.0.min.js')}} "></script>
    <!-- Bootstrap core JavaScript-->
    <script src=" {{asset('vendor/jquery/jquery.min.js')}} "></script>
    <script src=" {{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>

    <!-- Core plugin JavaScript-->
    <script src=" {{asset('vendor/jquery-easing/jquery.easing.min.js')}} "></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{asset('js/admin/sb-admin-2.min.js')}} "></script>

    <!-- Page level plugins -->
    <script src=" {{asset('vendor/chart.js/Chart.min.js')}} "></script>

    <!-- Page level custom scripts -->
    <script src=" {{asset('js/admin/demo/chart-area-demo.js')}} "></script>
    <script src=" {{asset('js/admin/demo/chart-pie-demo.js')}} "></script>
</body>
</html>