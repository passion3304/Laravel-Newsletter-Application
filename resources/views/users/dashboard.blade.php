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



<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <h3 class="panel-title">Notification (top-right)</h3> 
        </div> 
        <div class="panel-body"> 
            <a class="btn btn-info" href="javascript:;" onclick="$.Notification.notify('info', 'top right', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Info</a>
            <a class="btn btn-success" href="javascript:;" onclick="$.Notification.notify('success', 'top right', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Success</a>
            <a class="btn btn-warning" href="javascript:;" onclick="$.Notification.notify('warning', 'top right', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Warning</a>
            <a class="btn btn-danger" href="javascript:;" onclick="$.Notification.notify('error', 'top right', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Error</a>
            <a class="btn btn-inverse" href="javascript:;" onclick="$.Notification.notify('black', 'top right', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Black</a>
            <a class="btn btn-default" href="javascript:;" onclick="$.Notification.notify('white', 'top right', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">White</a>
        </div> 
    </div>
</div>






@stop