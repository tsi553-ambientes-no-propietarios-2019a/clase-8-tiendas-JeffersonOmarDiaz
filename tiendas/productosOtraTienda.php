<?php

//echo "Tienda: ", $tienda=$_GET['tienda'];
//echo "id del dueño: ", $duenio=$_GET['duenio'];
?>

<?php 
$tienda=$_GET['tienda'];
$duenio=$_GET['duenio'];

include('common/utils.php');
//print_r($_SESSION['user']);
$productosExtra = getProductosExtra($conn,$duenio);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>
	<h2>De La Tienda: <?php echo $_SESSION['user']['store']; ?></h2>
    <h2>Los productos de la tienda <u><?php echo $tienda=$_GET['tienda']. ' son: ' ; ?></u> </br> </h2>


	<table border =3px>
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Stock</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($productosExtra as $p) { ?>
				<tr>
					<td><?php echo $p['code'] ?></td>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['type'] ?></td>
					<td><?php echo $p['stock'] ?></td>
					<td><?php echo $p['price'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
    <a href="home.php">Volver a mi tienda</a>
	
</body>
</html>