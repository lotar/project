<!DOCTYPE html>
<html lang="en">
        @include ('includes.head');
<body>
    <div id="app">
        @include ('includes.navbar');
         <div id="sidebar" class="col-md-2">
            @include ('includes.sidebar');
         </div>

        <div class="col-md-8">
            @yield('content')
        </div>

    </div>


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Scripts -->
    <!-- load app javascript, jquery and jquery UI for datepicker -->
    <script src="/js/app.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#datepicker, #datepicker2" ).datepicker({
                dateFormat: "yy-mm-dd"
            });
        } );
    </script>
    <!-- load ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

    <!-- Delete button authorization -->
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

</body>
    <footer class="row">
        @include('includes.footer')
    </footer>
</html>
