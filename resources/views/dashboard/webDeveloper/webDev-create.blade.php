
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add Course Web Developer</title>

    <!-- Icons font CSS-->
    <link href=" {{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}} " rel="stylesheet" media="all">
    <link href=" {{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}} " rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href=" {{asset('vendor/select2/select2.min.css')}} " rel="stylesheet" media="all">
    <link href=" {{asset('vendor/datepicker/daterangepicker.css')}} " rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href=" {{asset('css/cssForm/main.css')}} " rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Course Web Developer</h2>
                    <form action="{{ route('webDev.store') }}" method="POST" >
                        @csrf
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="nama" id="nama">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Link Course" name="link" id="link">
                        </div>
                        <div class="form-group row">
                            <input type="hidden" value="1" id="user_id" name="user_id">
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src=" {{asset('vendor/jqueryForm/jquery.min.js')}} "></script>
    <!-- Vendor JS-->
    <script src=" {{asset('vendor/select2/select2.min.js')}} "></script>
    <script src="  {{asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="  {{asset('vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src=" {{asset('js/jsForm/global.js')}} "></script>

</body>

</html>
<!-- end document-->
