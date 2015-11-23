@extends('layouts.main')

@section("content")


<div class="row">

	<div class="col-lg-8">
    <div class="portlet"><!-- /primary heading -->
        <div class="portlet-heading">
            <h3 class="portlet-title text-dark text-uppercase">
                Susbcribers 
            </h3><span class="pull-right"><button class="btn btn-success"><i class="ion-plus"></i> New Subscriber</button></span>
            <div class="portlet-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                <span class="divider"></span>
                <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                <span class="divider"></span>
                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
            </div>
            <div class="clearfix"></div>
            </div>


            <div>
            	
            	<table class="table">

					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
					</thead>
					
				</table>

            </div>

			
        </div>
    </div> <!-- /Portlet -->

</div> <!-- end col -->

</div>

@stop