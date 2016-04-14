<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="modal hide" id="upload_modal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h3>Upload A New Pic</h3>
		</div>
		<div class="modal-body">
			{{ Form::open('upload', 'POST', array('id' => 'upload_modal_form', 'enctype' => 'multipart/form-data')) }}
			{{ Form::label('photo', 'Photo') }}
			{{ Form::file('photo') }}
			{{ Form::label('description', 'Description') }}
			{{ Form::text('description', '', array('placeholder' => 'Describe your photo here!', 'id' => 'description', 'class' => 'span5')) }}
			{{ Form::close() }}
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal"> Cancel</a>
			<button type="button" onclick="$('upload_modal_form').submit();" class="btn btn-primary">Upload Pic</button>
		</div>
	</div>
</body>
</html>