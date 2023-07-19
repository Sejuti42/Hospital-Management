<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>@yield('title')</title>

    @include('user.includes.css')
</head>
<body class="bg-light">

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('user.includes.header')

@yield('body')

@include('user.includes.footer')

@include('user.includes.js')

</body>
</html>
