@extends('layouts.main')

@section("content")

<div class="row">

	<div class="col-lg-8">
    <div class="portlet"><!-- /primary heading -->
        <div class="portlet-heading">
            <h3 class="portlet-title text-dark text-uppercase">
                Upload Susbcribers <span class="badge badge-info"></span>
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
		
			<div>
                
                <form action="{{URL::to('subscribers/upload')}}" method="POST">
                        
                     {!! csrf_field() !!}

                    <label>Select Excel File</label><br>
                    <input type="file" name="excel_file"><br><br>

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

    </div> <!-- /Portlet -->

</div> <!-- end col -->

</div>

@stop