@extends('layouts.main')

@section("content")

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

@stop