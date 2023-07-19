
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include('admin.includes.css')
</head>
<body>
<div class="container-scroller">
    @include('admin.includes.header')
    <!-- partial:partials/_sidebar.html -->

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset( '/' ) }}admin/assets/images/logo.svg" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset( '/' ) }}admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        @include('admin.includes.sidenavbar')
    </nav>

    <div class="container-fluid page-body-wrapper">
        @include('admin.includes.navbar')
@yield('body')
    </div>
    <!-- page-body-wrapper ends -->
</div>

@include('admin.includes.js')
</body>
</html>

