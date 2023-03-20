<!DOCTYPE html>
<html lang="en"dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <title>Hospital Appoint </title>
    <!-- Icons -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('assets/dest/style.css') }}" rel="stylesheet">
</head>

<body class="">

    <div class="container">
        <div class="message col-md-8 m-x-auto pull-xs-none vamiddle">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <div class="text-center text-black">{{ session('success') }}</div>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <div class="text-center text-black">{{ session('error') }}</div>
                </div>
            @endif
        </div>

        @yield('content')
    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
    <script>
        $('.message').fadeOut(6000)
    </script>
</body>

</html>
