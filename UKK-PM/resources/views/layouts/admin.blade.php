<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets') }}/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/bootstrap_limitless.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/layout.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    @stack('link')
    <!-- Core JS files -->
    <script src="{{ asset('global_assets') }}/js/main/jquery.min.js"></script>
    <script src="{{ asset('global_assets') }}/js/main/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('global_assets') }}/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('global_assets') }}/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="{{ asset('global_assets') }}/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="{{ asset('global_assets') }}/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{ asset('global_assets') }}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{ asset('global_assets') }}/js/plugins/ui/moment/moment.min.js"></script>
    <script src="{{ asset('global_assets') }}/js/plugins/pickers/daterangepicker.js"></script>

    <script src="{{ asset('assets') }}/js/app.js"></script>
    <script src="{{ asset('global_assets') }}/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->
    {{-- datatable --}}
    <script src="{{ asset('global_assets/') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ asset('global_assets/') }}/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{ asset('global_assets/') }}/js/demo_pages/datatables_basic.js"></script>




</head>

<body>

    <!-- Main navbar -->
    @include('layouts.admin_partial.navbar')
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include('layouts.admin_partial.sidebar')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->

            <!-- /page header -->


            <!-- Content area -->
            {{-- <div class="content"> --}}
            @yield('content')

            {{-- </div> --}}
            <!-- /content area -->


            <!-- Footer -->
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    @include('layouts.admin_partial.footer')
    <!-- /page content -->
    <script src="{{ asset('global_assets/') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ asset('global_assets/') }}/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{ asset('global_assets/') }}/js/demo_pages/datatables_basic.js"></script>


    <script>
        $("#textarea").keyup(function() {
            $("#count").text("Characters left: " + (350 - $(this).val().length));
        });

		$("#alertt").children().delay(3000)
.fadeOut(function() {
   $(this).remove();
});


    </script>


@stack('script')

</body>

</html>
