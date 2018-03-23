@if(count($customers))
  <div class="form-group">
	<div class="alert alert-danger">
	  	<ul>
	  		@foreach($customers as $error)
	  			<li>{{ $error->cust_username }}</li>
	  		@endforeach

	  	</ul>
  	</div>
  </div>
@endif