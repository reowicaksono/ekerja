<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" {{asset('css/admin/sb-admin-2.min.css')}} " rel="stylesheet">

    <title>Change Password</title>
  </head>
  <body>
          @if(session()->has('gagal'))
            <div class="alert alert-danger">
            {{ session()->get('gagal')}}
            </div>
        @endif
          @if(session()->has('success'))
            <div class="alert alert-success">
            {{ session()->get('success')}}
            </div>
        @endif
          @if(session()->has('gagal'))
            <div class="alert alert-danger">
            {{ session()->get('gagal')}}
            </div>
        @endif
        <a href="{{route('dashboard')}}" style="float: right;" class="btn btn-primary">&laquo; Back</a>
  <div class="container mt-5">
    <div class="row justify-content-center">

            <div class="col-md-5 bg-body py-3 px-5 rounded">
            <div class="card text-center">
                <div class="card-header">
                    <h5>Change Password</h5>
                    </div>
                        <div class="card-body">
                    <form action="{{route('dashboard.changePasswordUpdate', auth()->user()->user_id)}} " method="post">
                        @method('PATCH')
                        @csrf
                    <label for="old_password" style="float: left; margin-bottom: 10px;">Current Password</label>
                    <div class = "form-group mt-3">
                        <input type="password" name="old_password" id="old_password" required="" class="form-control" aria-describedby="old_passwordHelp"  autofocus>
                        @error('old_password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <label for="password" style="float: left; margin-bottom: 10px;margin-top: 5px;">New Password</label>
                    <div class = "form-group mt-3">
                        <input type="password" name="password" id="password" required="" class="form-control" aria-describedby="passwordHelp"  autofocus>
                        <p class="card-text" style="margin-right: 70px;"><small class="text-muted">Last The password must be 8-20 characters</small></p>  
                        @error('password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror           
                    </div>
                    <label for="password_confirmation" style="float: left; margin-bottom: 10px;margin-top: 10px;">Confirm Password</label>
                    <div class = "form-group mt-3">
                        <input type="password" name="password_confirmation" required="" class="form-control" aria-describedby="password_confirmationHelp"  autofocus>
                        <p class="card-text" style="margin-right: 70px;"><small class="text-muted">To confirm, type the new password again.</small></p> 
                    </div>

                    <input type="submit" style="float: right;" class="btn btn-primary mt-3" value="Save">
                </form>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
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