<section id='seccion-usuarios'>
	<div class="panel panel-default">
   	 	<div class="panel-body">
	    	<form method = "post" action="{!! $route !!}" >
	    		<input type="hidden" name="doaction" value="{!! $doaction!!}"  />
	    		<input type="hidden" name="rowid" value="{!! $rowid!!}"  />
	    		<input type="hidden" name="_token" id='_token' value=''>


	    		<fieldset>
		    		<legend>Datos generales</legend>
			      	<div class="form-group">
			      		<div class="col-sm-3">
					    	<label for="exampleInputEmail1">Nombre(s)</label>
					    </div>
					    <div class="col-sm-9">	
					    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    </div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
					    	<label for="exampleInputEmail1">A. Paterno</label>
					    </div>
					    <div class="col-sm-9">	
					    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    </div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
					    	<label for="exampleInputEmail1">A. Materno</label>
					    </div>
					    <div class="col-sm-9">	
					    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    </div>
					</div>
		    	</fieldset>
		    	<hr>
				<fieldset>
		    		<legend>Datos de acceso</legend>
			      	<div class="form-group">
					    <div class="col-sm-3">
					    	<label for="exampleInputEmail1">Usuario</label>
					    </div>
					    <div class="col-sm-9">	
					    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    </div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
					    	<label for="exampleInputEmail1">Correo</label>
					    </div>
					    <div class="col-sm-9">	
					    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
					    	<label for="exampleInputEmail1">Contraceña</label>
					    </div>
					    <div class="col-sm-9">	
					    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
		    	</fieldset>
	    	</form>
		</div>
	</div>
</section>
<script type="text/javascript">
	var Inicio = function(){
		return {
			mode : null,
            form : null,
			init : function(){
				var $this = this;
				this.seccion 	= '#seccion-usuarios';
				this.form 		= $("form", this.seccion);
				this.modal   	= $('#myModal',this.seccion);
				this.btn_acept 	= $('#btn-acept');
				this.btn_cancel = $('#btn-cancel');

				$('#_token').val( $('meta[name="_token"]').attr('content') );
				this.btn_acept.bind('click',function(e){  $this.submit(); console.log("holass")}).show();
                this.btn_cancel.bind('click',function(e){  $this.modal.hide(); });
              	  
			},


			

			submit : function(){
				var form = form || this.form;
                $.ajax({
					method : 'POST',
				    url    : $(form).attr('action'),
				    data   : $(form).serialize() , 
				    success: function (data) {
				        $( ".modal-body" ).html(data);
				    }      
				});
            },




		}
	}();

	Inicio.init();

</script>




       