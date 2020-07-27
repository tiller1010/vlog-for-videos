<div class="container">
	<% loop $VideoObjects.Limit(1) %>
		<h1>$Title</h1>
		<video height="225" width="400" controls>
			<source src="$VideoSource.URL" type="video/mp4">
		</video>
		<% if $Description %>
			<p>$Description</p>
		<% end_if %>
	<% end_loop %>
</div>