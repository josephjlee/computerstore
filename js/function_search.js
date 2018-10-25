window.onload = function () {
	new Ajax.Autocompleter("product_name", "autocomplete_choices", base_url+"admin_search/ajaxsearch/", {});

	$('function_search_form').onsubmit = function () {
		inline_results();
		return false;	
	}
}

function inline_results() {
	new Ajax.Updater ('product_description', base_url+'admin_search/ajaxsearch', {method:'post', postBody:'description=true&product_name='+$F('product_name')});
	new Effect.Appear('product_description');

}