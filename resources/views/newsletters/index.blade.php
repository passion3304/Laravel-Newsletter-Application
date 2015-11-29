@extends('layouts.main')

@section("content")

{!! Html::style('assets/css/jquery.steps.css') !!}

@include('general.notification')

<form action="/newsletters" method="POST">

{!! csrf_field() !!}

 <!-- Vertical Steps Example -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"> 
                <h3 class="panel-title">Send a Newsletter</h3> 
            </div> 
            <div class="panel-body"> 

                <form action="newsletters" method="POST">
                    
                    <div id="wizard-vertical">


                        <h3>Instructions</h3>
                        <section>
                            <div class="form-group clearfix">
                                <div class="col-lg-12">
                                   
                                    To send newsletter to your scubscribers, you can either enter manual emails or select a group that has already been pre-loaded with you subscribers information

                                </div>
                            </div>
                        </section>


                        <h3>Subscribers</h3>
                        <section>
                            <div>
                            <label>Enter Emails Manually </label>
                                <textarea placeholder="manually enter emails seperated by commas. eg. name@email.com, anothername@email.com, anotheranothername@email.com" class="form-control" name="manual_emails"></textarea><br>

                                Or Select Group(s)<br>
                                @foreach($groups as $i => $group)
                                    
                                   <label><input id="{{$i}}" name="groups[]" value="{{$group->id}}" type="checkbox" /> {{$group->name}} </label><br>
                                @endforeach

                            </div>
                        </section>
                        <h3>Template</h3>
                        <section>
                            
                            <img src="http://placehold.it/450x250">

                        </section>
                        <h3>Finish</h3>
                        <section>
                            <div class="form-group clearfix">
                                Click the button below to send Newsletter or go back using the previous button to make changes.<br><br>

                                <button type="submit" class="btn btn-lg btn-primary">Send Now</button>

                            </div>
                        </section>
                    </div> <!-- End #wizard-vertical -->

                </form>

            </div>  <!-- End panel-body -->
        </div> <!-- End panel -->

    </div> <!-- end col -->

</div> <!-- End row -->

</form>


@stop