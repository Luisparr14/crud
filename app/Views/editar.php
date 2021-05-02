<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/estilos/styles.css">
    <title>Inicio</title>
  </head>
  <body>
	<div class="contenedor-p">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form method="post" action="<?php echo base_url().'/editar'?>">
						<div class="contenedor">
						<label for="">nombre</label>
						<input class="form-control" type="text" name="nombre">
						<label for="">Categoria</label>
						<input class="form-control" type="text" name="categoria">
						<label for="">Precio</label>
						<input class="form-control" type="number" name="precio">
						<label for="">Descripcion</label>
						<input class="form-control" type="text" name="descripcion">
						</div>
						
						<br>
						<div class="container text-center">
							<button class="btn btn-warning" type="submit">Editar</button>
						</div>

					</form>		
					<br>		
				</div>
				<div class="col-md-6">
					<table class="table table-dark">
						<thead class="thead-light">
							<tr>
								<th>Nombre</th>
								<th>Categoria</th>
								<th>Precio</th>
								<th>Descripcion</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($datos as $info): ?>
							<tr>
								<td><?php echo $info->nombre ?></td>
								<td><?php echo $info->categoria ?></td>
								<td><?php echo $info->precio ?></td>
								<td><?php echo $info->descripcion ?></td>
							</tr>
							<?php endforeach?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>