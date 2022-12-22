<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detec truth - Register</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="name" name="name"
                                            placeholder="Full name" value="{{ old('name') }}" required>
                                            @error('name')<p class="text-danger">{{$errors->first('name')}}</p>@enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="phone_number"
                                        name="phone_number"  placeholder="phone number" value="{{ old('phone_number') }}"  required>
                                        @error('phone_number')<p class="text-danger">{{$errors->first('phone_number')}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                    name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                                    @error('email')<p class="text-danger">{{$errors->first('email')}}</p>@enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                        name="password" id="password" placeholder="password">
                                        @error('password')<p class="text-danger">{{$errors->first('password')}}</p>@enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        name="password_confirmation" id="password_confirmation" placeholder="Repeat Password" required>
                                        @error('password_confirmation')<p class="text-danger">{{$errors->first('password_confirmation')}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>