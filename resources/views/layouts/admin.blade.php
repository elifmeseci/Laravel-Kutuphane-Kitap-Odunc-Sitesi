<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/img/favicon.ico">

    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/demo/chartist.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/demo/chartist-plugin-tooltip.css">

    <!-- Template -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/graindashboard/css/graindashboard.css">
    @yield('css')
    @yield('javascript')
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
@include('admin._header')
<main class="main">
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            @include('admin._sidebar')
            @yield('content')
            @include('admin._footer')
            @yield('footer')
        </div>
    </div>
</main>
<script src="{{asset('assets')}}/admin/graindashboard/js/graindashboard.js"></script>
<script src="{{asset('assets')}}/admin/graindashboard/js/graindashboard.vendor.js"></script>
<!-- DEMO CHARTS -->
<script src="{{asset('assets')}}/admin/demo/resizeSensor.js"></script>
<script src="{{asset('assets')}}/admin/demo/chartist.js"></script>
<script src="{{asset('assets')}}/admin/demo/chartist-plugin-tooltip.js"></script>
<script src="{{asset('assets')}}/admin/demo/gd.chartist-area.js"></script>
<script src="{{asset('assets')}}/admin/demo/gd.chartist-bar.js"></script>
<script src="{{asset('assets')}}/admin/demo/gd.chartist-donut.js"></script>

<!-- bootstrap -->
<script src="{{asset('assets')}}/css/bootstrap.min.css"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

<!-- summernote -->
<script src="{{asset('assets')}}/admin/plugins/summernote/summernote.min.css"></script>
<script src="{{asset('assets')}}/admin/plugins/summernote/summernote.min.js"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
</html>
