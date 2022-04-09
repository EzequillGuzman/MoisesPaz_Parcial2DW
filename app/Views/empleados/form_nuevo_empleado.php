<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_formulario.css')?>">
    <title>Nuevo Empleado</title>
</head>
<body style="background-color: lightcoral;">  
    <h1 align="center">
    <marquee>NUEVO EMPLEADO</marquee>
</h1>
    <form action="<?=base_url('guardarEmpleado')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese el Código">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese el nombre">
        <br>
        <label for="txtNumero">Número:</label>
        <input type="text" name="txtNumero" placeholder="Ingrese el número">
        <br>
        <label for="txtFecha">Fecha:</label>
        <input type="text" name="txtFecha" placeholder="Ingrese la fecha">
        <br>
        <label for="txtTexto">Texto:</label>
        <input type="text" name="txtTexto" placeholder="Ingrese el texto">
        <br>
        <input type="submit" name="btnGuardar" value="Guardar registros">

    </form>
</body>
</html> 