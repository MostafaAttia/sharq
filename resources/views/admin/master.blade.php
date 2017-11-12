<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    {{--<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">--}}
    {{--<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AlSharQ::@yield('title')</title>


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    @include('admin.partials.styles')

</head>

<body>
<div class="wrapper">

    @include('admin.partials.sidebar')

    <div class="main-panel">
        @include('admin.partials.navbar')

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- your content here -->
                    @yield('content')

                </div>
            </div>
        </div>

        @include('admin.partials.footer')
    </div>
</div>
</body>

@include('admin.partials.core-scripts')
@include('admin.partials.plugins-script')

</html>
