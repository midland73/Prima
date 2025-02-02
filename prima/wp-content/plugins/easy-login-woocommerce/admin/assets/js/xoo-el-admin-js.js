jQuery(document).ready(function($){
	'use strict';
	
	$('select[name="xoo-el-sy-options[sy-popup-height-type]"]').on( 'change', function(){

		var $setting = $( '.xoo-as-setting:has(input[name="xoo-el-sy-options[sy-popup-height]"])' );

		if( $(this).val() === 'auto' ){
			$setting.hide();
		}
		else{
			$setting.show();
		}
		
	} ).trigger('change');

	$('select[name="xoo-el-gl-options[m-form-pattern]"]').on( 'change', function(){

		var $setting = $('select[name="xoo-el-gl-options[m-nav-pattern]"]');


		if( $(this).val() === 'single' ){
			$setting.find('option[value="links"]').prop( 'selected', true );
			$setting.trigger('change');
		}

		if( $(this).val() === 'separate' ){
			$setting.find('option[value="tabs"]').prop( 'selected', true );
			$setting.trigger('change');
		}
	})


	$('select[name="xoo-el-sy-options[sy-popup-style]"]').on( 'change', function(){

		var $setting = $( '.xoo-as-setting:has(select[name="xoo-el-sy-options[sy-popup-height-type]"]), .xoo-as-setting:has(input[name="xoo-el-sy-options[sy-popup-height]"])' );

		if( $(this).val() === 'slider' ){
			$setting.hide();
		}
		else{
			$setting.show();
		}
		
	} ).trigger('change');


	$('input[name="xoo-el-gl-options[m-en-myaccount]"]').on( 'change', function(){

		var $setting = $('textarea[name="xoo-el-gl-options[m-myacc-sc]"]').closest('.xoo-as-setting');


		if( $(this).is(':checked') ){
			$setting.show();
		}
		else{
			$setting.hide();
		}
	})


	$('input[name="xoo-el-gl-options[m-en-chkout]"]').on( 'change', function(){

		var $setting = $('textarea[name="xoo-el-gl-options[m-chkout-sc]"]').closest('.xoo-as-setting');


		if( $(this).is(':checked') ){
			$setting.show();
		}
		else{
			$setting.hide();
		}
	})




});
