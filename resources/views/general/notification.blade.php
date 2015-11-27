@if (Session::has('success'))

	<div class="alert {{ Session::get('notification_type') }}">
	  <a class="close" data-dismiss="alert" href="#">&times;</a>
	  <h3 class="notification-heading">{{ Session::get('notification_heading') }}</h3>
	  {{ Session::get('success') }}
	</div>

@elseif ( Session::has('error') )

	<div class="alert alert-danger">
		<a class="close" data-dismiss="alert" href="#">&times;</a>

		<h3 class="alert-heading">{{ Session::get('notification_heading') }}</h3>
		<h5>{{ Session::get('error') }}</h5>
		<br>
		<ul class="">
		    @foreach($errors->all() as $message)
		    <b><li>{{ $message }}</li></b>
		    @endforeach
		</ul>
	</div>

@elseif ( Session::has('warning') )

	<div class="alert alert-warning">
		<a class="close" data-dismiss="alert" href="#">&times;</a>
		
		<h3 class="alert-heading">{{ Session::get('notification_heading') }}</h3>
		<h5>{{ Session::get('warning') }}</h5>
		<br>
	</div>

@endif