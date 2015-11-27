@extends('layouts.main')

@section("content")

<div class="row">

     @include('general.notification')

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

            <div class="alert alert-info list">

                <h4>Please read the instructions carefully</h4>

                <ul>
                    <li>Create a new excel file</li>
                    <li>Enter name in the first column and email in the second column.</li>
                    <li>Save file and check to be sure it is in the microsoft excel format.</li>
                    <li>Upload the file by clicking the browse button below.</li>
                    <li>Select the group(s) you want to add the subscriber(s) to. If you haven't created a group yet, go to the groups menu and create one and come back to the upload page and proceed.</li>
                    <li>Select you group(s) and make sure your excel file is uploaded before continuing.</li>

                </ul>

            </div>

            <div class="alert">
                
                <form action="{{URL::to('subscribers/upload')}}" method="POST" enctype="multipart/form-data">
                        
                     {!! csrf_field() !!}

                    <label>Select Excel File</label><br>
                    <input type="file" name="excel_file" required><br>

                    <b>Add Susbcriber to Group(s)</b><br>
                    <ul>
                        @foreach($groups as $i => $group)
                            
                           <label> <li><input id="{{$i}}" name="groups[]" value="{{$group->id}}" type="checkbox" /> {{$group->name}}</li> </label><br>
                        @endforeach
                    </ul>
                    <hr>

                    <input type="submit" class="btn btn-primary" value="Save"><br><br>
                    
                </form>

            </div>
                
                

			</div>

        </div>

    </div> <!-- /Portlet -->

</div> <!-- end col -->

</div>

@stop