var General = function(){
	
	return {

		init : function(){
			var $this = this;
			this.color();
		},
		color : function(){
			control.click( function(){
				if($(this).hasClass('background-azul')){ 
					table.find('tr').removeClass( 'background-azul'); 
				}else{
					table.find('tr').removeClass( 'background-azul'); 
					$(this).addClass('background-azul'); 
				}
			});
		},
		modal : function( option ){
			var route = option.route;

			var param = option.params;
			$.ajax({
				method : 'post',
			    url: route,
			    data: param,
			    success: function (data) {
			        $( ".modal-body" ).html(data);
			    }      
			});
			//$( ".modal-body" ).load( route);
		},
		
	}

}();
