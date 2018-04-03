@if(count($errors))
  <div class="form-group">
	<div class="alert alert-danger">
	  	<ul>
	  		@foreach($errors as $error)
	  			<li>{{ $error->cust_username }}</li>
	  		@endforeach

	  	</ul>
  	</div>
  </div>
@endif