<form method="post" action="{{ url('/create') }}">
	@csrf

	<div>
		<label>Name</label><br />
		<input type="text" name="author" value="" placeholder="お名前" />
	</div>

	<div>
		<label>Title</label><br />
		<input type="text" name="title" value="" placeholder="タイトル" />
	</div>

	<div>
		<label>Body</label><br />
		<textarea name="body"></textarea>
	</div>

	<input type="submit" value="投稿" />
</form>
