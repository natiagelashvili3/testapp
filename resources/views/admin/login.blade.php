<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Management System</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('admin_resources/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_resources/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="icon" type="image/png" href="{{ asset('admin_resources/img/favicon.ico') }}"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body class="bg-light">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                @if ($errors->has('username') || $errors->has('password'))
                    <div class="alert alert-primary alert-dismissible">
                        <div class="d-flex flex-start w-100" style="align-items: center;">
                            <div class="mr-2 d-sm-none d-md-block">
                                <span class="icon-stack icon-stack-lg">
                                    <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                    <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                    <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                                </span>
                            </div>
                            <div class="d-flex flex-fill">
                                <div class="flex-fill">
                                    @if ($errors->has('username'))
                                        <div>{{ $errors->first('username') }}</div>
                                    @endif
                                    @if ($errors->has('password'))
                                        <div>{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="login-form">
                    <form action="{{ route('admin.login.submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey=""></div>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('admin_resources/js/main.js') }}"></script>


  </body>
</html>
