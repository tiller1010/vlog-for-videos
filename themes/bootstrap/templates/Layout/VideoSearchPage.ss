<div class="video-search-page container">
	<% include Pagination %>

	<div class="row">

		<div class="col-lg-2">
			<div class="search-form">
				$VideoSearchForm
				<% if $ActiveFilters %>
				    <% loop $ActiveFilters %>
					    <p>Searching for $Label</p>
				    <% end_loop %>
				<% end_if %>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="search-results">
				<% if $Results %>
				    <% loop $Results %>
				        <a href="$VideoPage.Link">
				        	<h2>$Title</h2>
				        </a>
				    <% end_loop %>
				<% else %>
					<p>No results found</p>
				<% end_if %>
			</div>
		</div>

	</div>

	<% include Pagination %>
</div