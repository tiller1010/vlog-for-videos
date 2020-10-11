<div class="video-search-page container">
	<% include Pagination %>

	<div class="row">

		<div class="col-lg-2">
			<div class="search-form">
				$VideoSearchForm
				<% if $ActiveFilters %>
					<p>Searching
					    <% loop $ActiveFilters %>
						    <% if $Label %> for $Label<% end_if %><% if $Category %> in $Category<% end_if %>
					    <% end_loop %>
				    </p>
				<% end_if %>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="search-results">
				<% include VideoSearchResults %>
			</div>
		</div>

	</div>

	<% include Pagination %>
</div