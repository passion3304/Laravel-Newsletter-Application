@extends('layouts.main')

@section("content")


<div class="row">
    
       @include('general.notification')
       
	<div class="col-lg-8">
    <div class="portlet"><!-- /primary heading -->
        <div class="portlet-heading">
            <h3 class="portlet-title text-dark text-uppercase">
                Susbcribers <span class="badge badge-info"> {{count($subscribers)}}</span>

            </h3>

            <span class="pull-right"> <a href="javascript:;"<button class="md-trigger btn btn-primary" data-toggle="modal" data-target="#panel-modal" data-modal="modal-10"><i class="ion-plus-circled"></i> New Subscriber</button></a></span>

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

            @if(count($subscribers) < 1)
				
				<div class="alert alert-info">
					<i>You have not created any subscribers yet! Click the button above to manually add subscribers or upload susbcribers from an excel file</i>
				</div>
				

				@else
            	
            	<table class="table">

					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Active</th>
					</thead>

					<tbody>

						@foreach($subscribers as $key => $subscriber)

							<tr>
								<td>{{$key+1}}</td>
								<td>{{$subscriber->name}}</td>
								<td>{{$subscriber->email}}</td>
								<td>{{$subscriber->active}}</td>
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
                    <h3 class="panel-title">Create A Susbcriber</h3> 
                </div> 
                <div class="panel-body"> 

                	<form action="{{URL::to('subscribers')}}" method="POST">
						
						 {!! csrf_field() !!}

                		<input type="text" name="name" class="form-control" placeholder="Name" required><br><br>

                		<input type="text" name="email" class="form-control" placeholder="Email" required><br><br>

                        <b>Add Susbcriber to Group(s)</b><br>
                        <ul>
                            @foreach($groups as $i => $group)
                                
                               <label> <li><input id="{{$i}}" name="groups[]" value="{{$group->id}}" type="checkbox" /> {{$group->name}}</li> </label><br>
                            @endforeach
                        </ul>
                        <hr>

                		<input type="submit" class="btn btn-primary" value="Save">
                		
                	</form>
                   
                </div> 
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@stop