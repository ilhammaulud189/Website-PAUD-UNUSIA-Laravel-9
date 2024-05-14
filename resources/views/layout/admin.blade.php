<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Paud Unusia</title>
            <!-- css -->     
        @include('includess.adminside.cssadmin')
            <!-- end css -->
    </head>
    <body class="sb-nav-fixed">
       <!-- Navbar Area -->
        @include('includess.adminside.navadmin')
        <!-- sidebar Area -->
        @include('includess.adminside.sidebaradmin')
                
@yield('content')

                    <!-- footer area -->
            @include('includess.adminside.footeradmin')
        </div>
    </div>
                    <!-- script -->
                @include('includess.adminside.jsadmin')
                    <!-- end script -->
                    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
@yield('scriptjs')
    </body>
</html>
