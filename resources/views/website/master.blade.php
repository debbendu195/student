<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    @include('website.include.header')

    <div class="row">

        @include('website.include.sidebar')

        <div class="col-md-9">
            @yield('body')
        </div>
    </div>
</div>




</body>
</html>
