@extends('layouts.main')

@section("content")

<script src="//tinymce.cachefly.net/4.3/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<div class="row">

	<div class="col-lg-8">
    <div class="portlet"><!-- /primary heading -->
        <div class="portlet-heading">
            <h3 class="portlet-title text-dark text-uppercase">
                Templates <span class="badge badge-info"></span>
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

			{{-- <form action="/templates" method="POST">

                {!! csrf_field() !!}

				<img src="http://placehold.it/450x350" alt="" class="img-rounded img-responsive" /><br>
				<input type="radio" value="1" name="template" checked="checked"> Select<br><br>
				<input type="submit" value="Save" class="btn btn-primary"> <br><br>

			</form> --}}

    
            <textarea>{{$template->html_content}}</textarea>


			</div>

        </div>

    </div> <!-- /Portlet -->

</div> <!-- end col -->

</div>

@stop