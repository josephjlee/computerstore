<form id="function_search_form" method="post" action="<?php echo base_url();?>admin_search/search">
	<div>
        <label for="product_name">Search by function name </label>
        <input type="text" name="product_name" id="product_name" />
		<input type="submit" value="search" id="search_button" />
		<div id="autocomplete_choices" class="autocomplete"></div>
	</div>
</form>