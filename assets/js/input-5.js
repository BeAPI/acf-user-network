(function($){

	var Field = acf.models.SelectField.extend({
		type: 'user_network',	
	});
	
	acf.registerFieldType( Field );

})(jQuery);