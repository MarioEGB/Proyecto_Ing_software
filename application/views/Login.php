<body id="p" class="login">	
<?= form_open("/CMC/comprobarDatos") ?>

<?PHP
$nombre = array('name' => 'nombre' ,'placeholder' => 'Escribe tu nombre');
$password = array('type' =>'password', 'name' => 'password' ,'placeholder' => 'Ingresa tu contraseña');
?>

<?= form_label('Nombre:','nombre')  ?>
<?= form_input($nombre) ?> 

<br><br><br>
 
<?= form_label('Contraseña:','password')  ?>
<?= form_input($password) ?>
<br><br>
<?= form_submit('','Ingresar') ?>
<?= form_close() ?>
</body>
</html>