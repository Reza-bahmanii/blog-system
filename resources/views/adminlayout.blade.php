<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'پنل مدیریت')</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">

    <!-- OverlayScrollbars -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.17.1/styles/overlayscrollbars.min.css">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.rtl.min.css') }}">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <div>
        @include('layouts.admin.header')

        <!-- Main Content -->
        <main class="app-main">

            <div class="app-content-header">
                <div class="container-fluid">
                    <h1 class="fs-3">@yield('page-title', 'داشبورد')</h1>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

        </main><br><br><br><br><br><br><br><br><br><br><br><br>
        @include('layouts.admin.footer')
    </div>

    
