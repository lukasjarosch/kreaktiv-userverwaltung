{{--*/ $no_sidebar = true /*--}}
{{--*/ $login_header_navigation = "login" /*--}}

@extends('layouts.default')
@section('content') 

<div class="row">
	<div class="module module-login span4 offset4">
		{{ Form::open(array('url' => 'login', 'class' => 'form-vertical' ))}}
			<div class="module-head">
				<h3>Bitte einloggen</h3>
			</div>
			<div class="module-body">

				@if ($errors->has())
					@foreach ($errors->all() as $error)
						<div class="alert alert-error">
							<button class="close" data-dismiss="alert" type="button">×</button>
							{{ $error }}
						</div>
					@endforeach
				@endif

				<div class="control-group">
					<div class="controls row-fluid">
						{{ Form::text('username', null, array('class' => 'span12', 'placeholder' => 'Benutzer')) }}
					</div>
				</div>
				<div class="control-group">
					<div class="controls row-fluid">
						{{ Form::password('password', array('class' => 'span12', 'placeholder' => 'Passwort')) }}
					</div>
				</div>
			</div>
			<div class="module-foot">
				<div class="control-group">
					<div class="controls clearfix">
						{{ Form::submit('Login', array('class' => 'btn btn-primary pull-right')) }}
					</div>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>

@stop
