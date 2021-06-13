<!DOCTYPE html>
<html>
<head>
	<title>Poster's Posts</title>
</head>
<body>
	<a href="posts/create">Create New Post</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Rank(Oldest On Top)</th>
				<th>Post Title</th>
				<th>Post Content</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php
			$rank = 1;
			@endphp
			@foreach($all_posts as $post)
			<tr>
				<td>{{$rank++}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->content}}</td>
				<td>
					<a href="posts/{{$post->id}}/edit">Edit</a>
					<form action="posts/{{$post->id}}" method="POST" role="form">
						@csrf
						@method('delete')
						<button type="submit" class="btn btn-warning">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
			@empty($all_posts)
			<h1>No Posts Found</h1>
			@endempty
</body>
</html>