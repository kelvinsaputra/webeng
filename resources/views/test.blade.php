<div class="row">
	<div class="col-md-8 offset-md-2"></div>
		<h1>Create New Post</h1>
		<hr>
		{!! Form::open(['url' => 'post']) !!}
    		{{ Form::label('title', 'Title:') }}
    		{{ Form::text('title', null, array('class' => 'form-control')) }}

    		{{ Form::label('body', "Post Body:") }}
    		{{ Form::textarea('body', null, array('class' => 'form-control')) }}

    		{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px')) }}

		{!! Form::close() !!}
	</div>
</div>