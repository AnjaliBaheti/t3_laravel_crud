<form action="/posts/{{$post['id']}}" method="POST" role="form">
	@csrf
	@method('PATCH')
	<legend>~Post Your Compositon~</legend>

	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="शीर्षक" value="{{$post['title']}}">
	</div>

	<div class="form-group">
		<label for="content">Content</label>
		<textarea class="form-control" id="content" name="content" placeholder="रचना">{{$post['content']}}</textarea>
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>