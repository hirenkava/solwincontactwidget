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
					console.log("else");
					$("#services").attr("data-validate","{required:true}");
					$("#services").addClass("required");
					$('#services').find("option:not(:hidden):eq(0)").val('');
				}else{
					$("#services").removeClass("required");
					$("#services").removeAttr("required");
					$('#services').find("option:not(:hidden):eq(0)").val('1');
					$("#services").removeAttr('data-validate');
				}                
            },
            $.mage.__("")
        );
    }
});