<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Dashboard v.2</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body>
    <div id="wrapper">
        @if (Auth::user()->level == 1)   
            @include('template.sidebaruser')
        @else       
            @include('template.sidebar')
        @endif

        <div id="page-wrapper" class="gray-bg">
            @include('template.header')
            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src={{ asset('js/jquery-3.1.1.min.js') }}></script>
    <script src={{ asset('js/popper.min.js') }}></script>
    <script src={{ asset('js/bootstrap.js') }}></script>
    <script src={{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}></script>
    <script src={{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}></script>

    <!-- Custom and plugin javascript -->
    <script src={{ asset('js/inspinia.js') }}></script>
    <script src={{ asset('js/plugins/pace/pace.min.js') }}></script>

    <!-- jQuery UI -->
    <script src={{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}></script>
    {{-- select2 --}}
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // console.log("ready!");
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        });
    </script>

</body>

</html>
