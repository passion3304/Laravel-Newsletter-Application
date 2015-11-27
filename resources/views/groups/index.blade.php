@extends('layouts.main')

@section("content")


<div class="row">

     @include('general.notification')

	<div class="col-lg-8">
    <div class="portlet"><!-- /primary heading -->
        <div class="portlet-heading">
            <h3 class="portlet-title text-dark text-uppercase">
                Groups <span class="badge badge-info"> {{count($groups)}}</span>
            </h3>

            <span class="pull-right"> <a href="javascript:;"<button class="md-trigger btn btn-primary" data-toggle="modal" data-target="#panel-modal" data-modal="modal-10"><i class="ion-plus"></i> New Group</button></a></span>

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

            @if(count($groups) < 1)
				
				<div class="alert alert-info">
					<i>You have not created any groups yet! Click the button above to add/create new groups</i>
				</div>
				

				@else
            	
            	<table class="table">

					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Description</th>
					</thead>

					<tbody>

						@foreach($groups as $key => $group)

							<tr>
								<td>{{$key+1}}</td>
								<td>{{$group->name}}</td>
								<td>{{$group->description}}</td>
							</tr>

						@endforeach

					</tbody>
					
				</table>

			@endif

            </div>

			
        </div>
    </div> <!-- /Portlet -->

</div> <!-- end col -->

</div>


<div id="panel-modal" class="modal fade md-modal md-effect-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading"> 
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                    <h3 class="panel-title">Create A Group</h3> 
                </div> 
                <div class="panel-body"> 

                	<form action="{{URL::to('groups')}}" method="POST">
						
						 {!! csrf_field() !!}

                		<input type="text" name="name" class="form-control" placeholder="Name" required><br><br>

                		<textarea class="form-control" name="description"></textarea><br><br>

                		<input type="submit" class="btn btn-primary" value="Save">
                		
                	</form>
                   
                </div> 
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@stop