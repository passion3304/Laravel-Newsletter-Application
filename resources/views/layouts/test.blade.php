
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>Admin Dashboard</title>

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


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="index.html" class="logo-expanded">
                    <img src="img/single-logo.png" alt="logo">
                    <span class="nav-label">Velonic</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="has-submenu active"><a href="#"><i class="ion-home"></i> <span class="nav-label">Dashboard</span></a>
                        <ul class="list-unstyled">
                            <li class="active"><a href="index.html">Dashboard v1</a></li>
                            <li><a href="dashboard2.html">Dashboard v2</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-flask"></i> <span class="nav-label">UI Elements</span></a>
                        <ul class="list-unstyled">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="panels.html">Panels</a></li>
                            <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                            <li><a href="modals.html">Modals</a></li>
                            <li><a href="bootstrap-ui.html">BS Elements</a></li>
                            <li><a href="progressbars.html">Progress Bars</a></li>
                            <li><a href="notification.html">Notification</a></li>
                            <li><a href="sweet-alert.html">Sweet-Alert</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-settings"></i> <span class="nav-label">Components</span></a>
                        <ul class="list-unstyled">
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="portlets.html">Portlets</a></li>
                            <li><a href="widgets.html">Widgets</a></li>
                            <li><a href="nestable-list.html">Nesteble</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Forms</span></a>
                        <ul class="list-unstyled">
                            <li><a href="form-elements.html">General Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-advanced.html">Advanced Form</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                            <li><a href="code-editor.html">Code Editors</a></li>
                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                            <li><a href="image-crop.html">Image Crop</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Data Tables</span></a>
                        <ul class="list-unstyled">
                            <li><a href="tables.html">Basic Tables</a></li>
                            <li><a href="table-datatable.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-stats-bars"></i> <span class="nav-label">Charts</span></a>
                        <ul class="list-unstyled">
                            <li><a href="morris-chart.html">Morris Chart</a></li>
                            <li><a href="chartjs.html">Chartjs</a></li>
                            <li><a href="flot-chart.html">Flot Chart</a></li>
                            <li><a href="rickshaw-chart.html">Rickshaw Chart</a></li>
                            <li><a href="c3-chart.html">C3 Chart</a></li>
                            <li><a href="other-chart.html">Other Chart</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-email"></i> <span class="nav-label">Mail</span></a>
                        <ul class="list-unstyled">
                            <li><a href="inbox.html">Inbox</a></li>
                            <li><a href="email-compose.html">Compose Mail</a></li>
                            <li><a href="email-read.html">View Mail</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-location"></i> <span class="nav-label">Maps</span></a>
                        <ul class="list-unstyled">
                            <li><a href="gmap.html"> Google Map</a></li>
                            <li><a href="vector-map.html"> Vector Map</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-document"></i> <span class="nav-label">Pages</span></a>
                        <ul class="list-unstyled">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="contact.html">Contact-list</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="recoverpw.html">Recover Password</a></li>
                            <li><a href="lock-screen.html">Lock Screen</a></li>
                            <li><a href="blank.html">Blank Page</a></li>
                            <li><a href="404.html">404 Error</a></li>
                            <li><a href="404_alt.html">404 alt</a></li>
                            <li><a href="500.html">500 Error</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                </form>
                
                <!-- Left navbar -->
                <nav class=" navbar-default hidden-xs" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">English <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">German</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Files</a></li>
                        <li><a href="../frontend/" target="_blank">Frontend</a></li>
                    </ul>
                </nav>
                
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- mesages -->  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o "></i>
                            <span class="badge badge-sm up bg-purple count">4</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                            <li>
                                <p>Messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /messages -->
                    <!-- Notification -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-sm up bg-pink count">3</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                            <li class="noti-header">
                                <p>Notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                    <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                    <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                    <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                </a>
                            </li>
                            
                            <li>
                                <p><a href="#" class="text-right">See all notifications</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /Notification -->

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                            <span class="username">John Deo </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Welcome !</h3> 
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-pink">
                            <i class="ion-eye"></i> 
                            <h2 class="m-0 counter">50</h2>
                            <div>Daily Visits</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-purple">
                            <i class="ion-paper-airplane"></i> 
                            <h2 class="m-0 counter">12056</h2>
                            <div>Sales</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-info">
                            <i class="ion-ios7-pricetag"></i> 
                            <h2 class="m-0 counter">1268</h2>
                            <div>New Orders</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-success">
                            <i class="ion-android-contacts"></i> 
                            <h2 class="m-0 counter">145</h2>
                            <div>New Users</div>
                        </div>
                    </div>
                </div> <!-- end row -->



                <div class="row">
                    <div class="col-lg-8">
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Weekly Sales Report
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet1" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div id="morris-bar-example"  style="height: 320px;"></div>

                                    <div class="row text-center m-t-30 m-b-30">
                                        <div class="col-sm-3 col-xs-6">
                                            <h4>$ 126</h4>
                                            <small class="text-muted"> Today's Sales</small>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <h4>$ 967</h4>
                                            <small class="text-muted">This Week's Sales</small>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <h4>$ 4500</h4>
                                            <small class="text-muted">This Month's Sales</small>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <h4>$ 87,000</h4>
                                            <small class="text-muted">This Year's Sales</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->

                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Yearly Sales Report
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div id="morris-line-example" style="height: 200px;"></div>
                                    <div class="row text-center m-t-30">
                                <div class="col-sm-4">
                                    <h4>$ 86,956</h4>
                                    <small class="text-muted"> This Year's Report</small>
                                </div>
                                <div class="col-sm-4">
                                    <h4>$ 86,69</h4>
                                    <small class="text-muted">Weekly Sales Report</small>
                                </div>
                                <div class="col-sm-4">
                                    <h4>$ 948,16</h4>
                                    <small class="text-muted">Yearly Sales Report</small>
                                </div>

                            </div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->
                        <div class="tile-stats white-bg"> 
                            <div class="col-sm-8">
                                <div class="status">
                                <h3 class="m-t-15">61.5%</h3> 
                                <p>US Dollar Share</p>
                            </div> 
                            </div>
                            <div class="col-sm-4 m-t-20">
                                <span class="sparkpie-big"><canvas width="98" height="50" style="display: inline-block; width: 98px; height: 50px; vertical-align: top;"></canvas></span> 
                            </div>
                        </div>
                    </div>
                </div> <!-- End row -->





                <div class="row">
                    <div class="col-lg-4">

                        <!-- Chat -->
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Chat
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet-3"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet-3" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="chat-conversation">
                                        <ul class="conversation-list nicescroll">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="img/avatar-2.jpg" alt="male">
                                                    <i>10:00</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Hello!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="img/avatar-3.jpg" alt="Female">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Smith</i>
                                                        <p>
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="img/avatar-2.jpg" alt="male">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Yeah everything is fine
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="img/avatar-3.jpg" alt="male">
                                                    <i>10:02</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Smith</i>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-xs-9 chat-inputbar">
                                                <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                            </div>
                                            <div class="col-xs-3 chat-send">
                                                <button type="submit" class="btn btn-info">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end Chat -->
                    </div> <!-- end col-->

                    <div class="col-lg-4">

                        <!-- TODO -->
                        <div class="portlet" id="todo-container"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Todo
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet-5" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet-5" class="panel-collapse collapse in">
                                <div class="portlet-body todoapp">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4> 
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="" class="pull-right btn btn-primary btn-sm" id="btn-archive">Archive</a>
                                        </div>
                                    </div>

                                    <ul class="list-group no-margn nicescroll todo-list" style="max-height: 275px;" id="todo-list"></ul>

                                     <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                        <div class="row">
                                            <div class="col-sm-9 todo-inputbar">
                                                <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                            </div>
                                            <div class="col-sm-3 todo-send">
                                                <button class="btn-info btn-block btn" type="button" id="todo-btn-submit">Add</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-4">

                        <!-- Team-Member -->
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Team Members
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet-6" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet-6" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <ul class="list-group list-group-lg">
                                        <li class="list-group-item b-0">
                                            <a href="" class=" m-r-10">
                                              <img src="img/avatar-3.jpg" class="thumb-sm br-radius">
                                            </a>
                                            <span class="pull-right label bg-primary inline m-t-10">CEO</span>
                                            <a href="">Jonathan Deo</a>
                                        </li>
                                        <li class="list-group-item b-0">
                                            <a href="" class=" m-r-10">
                                              <img src="img/avatar-4.jpg" class="thumb-sm br-radius">
                                            </a>
                                            <span class="pull-right label bg-info inline m-t-10">Webdesigner</span>
                                            <a href="">Doler Perte</a>
                                        </li>
                                        <li class="list-group-item b-0">
                                            <a href="" class=" m-r-10">
                                              <img src="img/avatar-5.jpg" class="thumb-sm br-radius">
                                            </a>
                                            <span class="pull-right label bg-warning inline m-t-10">Webdeveloper</span>
                                            <a href="">Jannie Dvis</a>
                                        </li>
                                        <li class="list-group-item b-0">
                                            <a href="" class=" m-r-10">
                                              <img src="img/avatar-6.jpg" class="thumb-sm br-radius">
                                            </a>
                                            <span class="pull-right label bg-pink inline m-t-10">Programmer</span>
                                            <a href="">Emma Welson</a>
                                        </li>
                                        <li class="list-group-item b-0">
                                            <a href="" class=" m-r-10">
                                              <img src="img/avatar-7.jpg" class="thumb-sm br-radius">
                                            </a>
                                            <span class="pull-right label bg-warning inline m-t-10">Webdeveloper</span>
                                            <a href="">Jannie Dvis</a>
                                        </li>
                                        <li class="list-group-item b-0">
                                            <a href="" class=" m-r-10">
                                              <img src="img/avatar-8.jpg" class="thumb-sm br-radius">
                                            </a>
                                            <span class="pull-right label bg-info inline m-t-10">Webdesigner</span>
                                            <a href="">Petere Husen</a>
                                        </li>
                                        <li class="list-group-item b-0">
                                            <a href="" class=" m-r-10">
                                              <img src="img/avatar-9.jpg" class="thumb-sm br-radius">
                                            </a>
                                            <span class="pull-right label bg-warning inline m-t-10">Webdeveloper</span>
                                            <a href="">John Deo</a>
                                        </li>
                                    </ul>
                                </div> <!-- end portlet-body -->
                            </div> <!-- end portlet-collapsed -->
                        </div> <!-- end portlet/Team-member -->
                    </div> <!-- end col -->
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
