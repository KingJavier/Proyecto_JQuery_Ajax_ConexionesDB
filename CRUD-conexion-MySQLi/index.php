<!DOCTYPE html>
<html>
<head>

	<title>CRUD-conexion-MySQLi</title>

	<!-- Librerias empleadas -->

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
    <link href="../img/homero.png" rel="shortcut icon" />

	<!-- JS -->
	<script type="text/javascript">
    	 var url = "http://localhost/CRUD-conexion-MySQLi/";
    </script>
    <script src="./js/item-ajax.js"></script>

</head>
<body>

	<!-- Main -->
	<div class="container-fluid">
		<!--Barra lateral de redes sociales-->
		<div class="social-bar">
        <a href="https://www.facebook.com/" class="icon icon-facebook" target="_blank"><img src="../img/facebook.png"
                id="facebook" title="logo"></a>
        <a href="https://twitter.com/" class="icon icon-twitter" target="_blank"><img src="../img/twitter.png"
                id="twitter" title="logo"></a>
        <a href="https://www.youtube.com/" class="icon icon-youtube" target="_blank"><img src="../img/youtube.png"
                id="youtube" title="logo"></a>
        <a href="https://www.instagram.com/" class="icon icon-instagram" target="_blank"><img src="../img/instagram.png"
                id="instagram" title="logo"></a>
    	</div>

		<!--Header-->
        <header class="row">
            <h1 class="text-center text-white">
                <img src="../img/Sena.png" title="Sena" class="imagenSena">
            </h1>
        </header>
        

		<!--Boton regresar-->
		<div class="row">
			<br>
			<a type="button" class="btn btn-info" href="../index-.html " id="regresar">Regresar</a>
			<br>
		</div>

		<div class="row">
			<!-- Define el titulo del ejercicio-->
		    <div class="col-lg-12 margin-tb">					
		        <div class="pull-left">
		            <h2>PHP Jquery Ajax CRUD Ejemplo</h2>
		        </div>
				<!--Boton de creación de de new item -->
		        <div class="pull-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
					  Crear item
				</button>
		        </div>
		    </div>
		</div>

		<!--Elementos de la tabla-->
		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Título</th>
				<th>Descripción</th>
				<th width="200px">Acción</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>


		<ul id="pagination" class="pagination-sm"></ul>


	    <!-- CModal de creación de nuevo item -->
		<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Crear Item</h4>
		      </div>


		      <div class="modal-body">
		      		<form data-toggle="validator" action-data="api/create.php" method="POST">


		      			<div class="form-group">
							<label class="control-label" for="title">Título:</label>
							<input type="text" name="title" class="form-control" data-error="Please enter title." required />
							<div class="help-block with-errors"></div>
						</div>


						<div class="form-group">
							<label class="control-label" for="title">Descripción:</label>
							<textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
							<div class="help-block with-errors"></div>
						</div>


						<div class="form-group">
							<button type="submit" class="btn crud-submit btn-success">Enviar</button>
						</div>


		      		</form>


		      </div>
		    </div>


		  </div>
		</div>


		<!-- Modal que se despliega cuando se desea hacer un update -->
		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Editar Item</h4>
		      </div>


		      <div class="modal-body">
		      		<form data-toggle="validator" action="api/update.php" method="put">
		      			<input type="hidden" name="id" class="edit-id">


		      			<div class="form-group">
							<label class="control-label" for="title">Título:</label>
							<input type="text" name="title" class="form-control" data-error="Please enter title." required />
							<div class="help-block with-errors"></div>
						</div>


						<div class="form-group">
							<label class="control-label" for="title">Descripción:</label>
							<textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
							<div class="help-block with-errors"></div>
						</div>


						<div class="form-group">
							<button type="submit" class="btn btn-success crud-submit-edit">Enviar</button>
						</div>
		      		</form>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</body>
</html>