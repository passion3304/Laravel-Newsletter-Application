
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>Newsleeter Messaging System</title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>

        <!-- Bootstrap core CSS -->
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/bootstrap-reset.css') !!}

        <!--Animation css-->
        {!! Html::style('assets/css/animate.css') !!}

        <!--Icon-fonts css-->
        {!! Html::style('assets/css/font-awesome.css') !!}
        {!! Html::style('assets/css/ionicons.min.css') !!}

        <!--Morris Chart CSS -->
        {!! Html::style('assets/css/morris.css') !!}

        <!-- sweet alerts -->
        {!! Html::style('assets/css/sweet-alert.min.css') !!}

        <!-- Custom styles for this template -->
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/helper.css') !!}
        {!! Html::style('assets/css/style-responsive.css') !!}
    
        {!! Html::style('assets/css/notification.css') !!}

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

         @include('layouts.sidebar')


        <!--Main Content Start -->
        <section class="content">

           @include('layouts.header')


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">{{$page_title}}</h3> 
                </div>

                <div class="row">
                    
                    @yield('content')

                </div> <!-- End row -->


            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                2015 © Velonic.
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->
        


        <!-- js placed at the end of the document so the pages load faster -->
        {!! Html::script('assets/js/jquery.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/modernizr.min.js') !!}
        {!! Html::script('assets/js/pace.min.js') !!}
        {!! Html::script('assets/js/wow.min.js') !!}
        {!! Html::script('assets/js/jquery.scrollTo.min.js') !!}
        {!! Html::script('assets/js/jquery.nicescroll.js') !!}
        {!! Html::script('assets/js/moment-2.2.1.js') !!}

        <!-- Counter-up -->
        {!! Html::script('assets/js/waypoints.min.js') !!}
        {!! Html::script('assets/js/jquery.counterup.min.js') !!}

        <!-- EASY PIE CHART JS -->
        {!! Html::script('assets/js/easypiechart.min.js') !!}
        {!! Html::script('assets/js/jquery.easypiechart.min.js') !!}
        {!! Html::script('assets/js/example.js') !!}


        <!--C3 Chart-->
        {!! Html::script('assets/js/d3.v3.min.js') !!}
        {!! Html::script('assets/js/c3.js.js') !!}

        <!--Morris Chart-->
        {!! Html::script('assets/js/morris.min.js') !!}
        {!! Html::script('assets/js/raphael.min.js') !!}

        <!-- sparkline -->  
        {!! Html::script('assets/js/jquery.sparkline.min.js') !!}
        {!! Html::script('assets/js/chart-sparkline.js') !!}

        <!-- sweet alerts -->
        {!! Html::script('assets/js/sweet-alert.min.js') !!}
        {!! Html::script('assets/js/sweet-alert.init.js') !!}

        {!! Html::script('assets/js/jquery.app.js') !!}
        <!-- Chat -->
        {!! Html::script('assets/js/jquery.chat.js') !!}
        <!-- Dashboard -->
        {!! Html::script('assets/js/jquery.dashboard.js') !!}

        <!-- Todo -->
        {!! Html::script('assets/js/jquery.todo.js') !!}

         <!-- js placed at the end of the document so the pages load faster -->
        {!! Html::script('assets/js/wow.min.js') !!}
        {!! Html::script('assets/js/jquery.nicescroll.js') !!}

        <!--Form Validation-->
        {!! Html::script('assets/js/bootstrap-validator.min.js') !!}

        <!--Form Wizard-->
        {!! Html::script('assets/js/jquery.steps.min.js') !!}
        {!! Html::script('assets/js/jquery.validate.min.js') !!}

        <!--wizard initialization-->
        {!! Html::script('assets/js/wizard-init.js') !!}

        {!! Html::script('assets/js/jquery.app.js') !!}

        {!! Html::script('assets/js/notify.min.js') !!}
        {!! Html::script('assets/js/notify-metro.js') !!}
        {!! Html::script('assets/js/notifications.js') !!}


        <script type="text/javascript">
        /* ==============================================
             Counter Up
             =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    

    </body>
</html>
