<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
	<h1 class="text-center mt-5">Tareas</h1>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-6">
				<table class="table text-center">
					
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Descripcion</th>
						<th scope="col">Acción</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($results as $task):?>
							<tr class="align-middle">
								<th scope="row"><?=$task->id?></th>
								<td class="text-left"><?=$task->description?></td>
								<td class="">
									<button type="button" class="btn btn-warning mx-2">Editar <i class="bi bi-pen-fill"></i></button>
									<button type="button" class="btn btn-danger mx-2">Eliminar <i class="bi bi-trash-fill"></i></button>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>