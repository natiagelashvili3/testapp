<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TestApp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>
    <form method="POST" action="" class="form-contact">
        @csrf
        <div class="form-row">
            <div class="form-col">
                <label for="field-name" class="form-label">Full Name*</label>

                <input type="text" class="field{{ $errors->has('name') ? ' error' : '' }}" name="name" id="field-name" value="{{ old('name') }}" autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                @endif
            </div><!-- /.form-col -->

            <div class="form-col">
                <label for="field-organization" class="form-label">Organization</label>

                <input type="text" class="field{{ $errors->has('organization') ? ' error' : '' }}" name="organization" id="field-organization" value="{{ old('organization') }}" autofocus>

                @if ($errors->has('organization'))
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('organization') }}</strong>
                                </span>
                @endif
            </div><!-- /.form-col -->
        </div><!-- /.form-row -->


        <div class="form-row">
            <div class="g-recaptcha" data-sitekey="{{ env("CAPTCHA_SITE_KEY") }}"></div>
            @if($errors->has('g-recaptcha-response'))
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
            @endif
        </div>

        <div class="form-row form-actions">
            @if (session('success'))
                <div class="success-message">
                    <h2>Success!</h2>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <input type="submit" value="Send" class="form-btn">
        </div><!-- /.form-row form-actions -->
    </form>
        <div id="app">

        </div>

        <script src="{{ asset("js/app.js")  }}"></script>
    </body>
</html>
