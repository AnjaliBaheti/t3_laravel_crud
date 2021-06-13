<form action="/posts" method="POST" role="form">
	@csrf
	<legend>~Post Your Compositon~</legend>

	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="शीर्षक">
	</div>

	<div class="form-group">
		<label for="content">Content</label>
		<textarea class="form-control" id="content" name="content" placeholder="रचना"></textarea>
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>