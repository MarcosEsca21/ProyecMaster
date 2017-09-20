var Mproyect = function(){
	
	var seccion ;
	var btn_agregar;
	var btn_editar;
	var btn_eliminar;
	var btn_recarg,sar;
	var control;
	var table;
	return {

		init : function(){
			var $this = this;
			seccion = '.principal';
			btn_agregar 	= $('#btn-agregar',seccion);
			btn_editar 		= $('#btn-edit',seccion);
			btn_eliminar 	= $('#btn-delete',seccion);
			btn_recargar 	= $('#btn-reload',seccion);
			control      	= $('tr', seccion);
			table           = $('table', seccion);

			btn_agregar.bind('click',function(e){  $this.agregar();  }).show();
			btn_editar.bind('click',function(e){   $this.editar();   }).show();
			btn_eliminar.bind('click',function(e){ $this.eliminar(); }).show();
			btn_recargar.bind('click',function(e){ $this.recargar(); }).show();

		},
		agregar : function(){
			$('#myModal').modal('show');
			this.posForm();
		},
		editar : function(){
			console.log("editar");
		},
		eliminar : function(){
			console.log("eliminar");
		},
		recargar : function(){
			console.log("recargar");
		},
		posForm : function(){
			var option = new Object();
			option.route = 'module/form';
			option.params = new Object();
			option.params.rowid = 1;
			option.params.doaction ='prueba';
			option.params.prueba   = 'lalal';
			option.params._token   = $('meta[name="_token"]').attr('content');
			General.modal(option);
		},

		
	}

}();

Mproyect.init();