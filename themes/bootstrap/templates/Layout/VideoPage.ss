<div class="container">
	<%-- <% loop $VideoObjects.Limit(1) %> --%>
	<% loop $VideoObjects %>
<%-- 		
<h1>$Title</h1>
		<video height="225" width="400" controls>
			<source src="$VideoSource.URL" type="video/mp4">
		</video>
 --%>		

<h1>$Title</h1>
<iframe allowfullscreen="" encrypted-media"="" frameborder="0" height="315" name="iframe-player" src="$VideoExternalSource" width="560"></iframe>



		 <% if $Description %>
			<p>$Description</p>
		<% end_if %>
		<ul>
			<% loop $VideoCategories %>
			    <li>$Title</li>
			<% end_loop %>
		</ul>
	<% end_loop %>
</div>

$Content

<div class="container">
	<ul class="list-unstyled">
		<% loop $VideoComments %>
		    <li class="media my-5">
		    	<div class="media-body">
		    		<h5 class="mt-0 mb-1">$Name</h5>
		    		$Comment
		    	</div>
		    </li>
		<% end_loop %>
	</ul>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			$CommentForm
		</div>
	</div>
</div>