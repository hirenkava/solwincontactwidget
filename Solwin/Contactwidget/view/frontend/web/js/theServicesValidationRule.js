define([
    'jquery',
    'jquery/ui',
    'jquery/validate',
    'mage/translate'
], function($){
    'use strict';
 
    return function() {
        $.validator.addMethod(
            "check_services",
            function(value, element) {
				if($("#any_specific_services").is(":checked")) {
					$("#services").attr("data-validate","{required:true}");					
					$("#any_specific_services").val('1');
					if($("#services option:selected").val() == 1) {
						$("#services option:eq(0)").val('');
						return false;
					}
					return true;
				}else{
					$("#services").removeAttr('data-validate');
					$("#any_specific_services").val('0');					
					return true;
				}                
            },
            $.mage.__("This is required field.")
        );
    }
});