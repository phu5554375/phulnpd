<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset_ad/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="asset_ad/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset_ad/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset_ad/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<style>
    .login-panel{ margin-top: 0 }
    .login-for{ margin-top: 10% }
</style>
   <div class="container">
        <div class="row">
            

            <div class="col-md-4 col-md-offset-4 login-for">
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                <form action="{{url('login')}}" method="POST" role="form">
                    <legend>Đăng nhập vào trang quản trị</legend>
                    @if($errors->has('errorlogin'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{$errors->first('errorlogin')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <p style="color:red">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        @if($errors->has('password'))
                            <p style="color:red">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                
                    
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="asset_ad/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset_ad/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="asset_ad/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="asset_ad/dist/js/sb-admin-2.js"></script>

</body>

</html>
