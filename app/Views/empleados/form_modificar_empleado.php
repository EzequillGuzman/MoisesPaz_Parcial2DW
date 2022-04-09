<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_formulario.css')?>">
    <title>Actualización de Empleados</title>
</head>
<body style="background-color: aqua;">   
    <h1 align="center"> 
    <marquee>ACTUALIZACIÓN DE EMPLEADOS</marquee>
    </h1>
 
    <form action="<?=base_url('modificarEmpleado')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" value="<?=$empleado['Codigo']?>" readonly>
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$empleado['Nombre']?>">
        <br>
        <label for="txtNumero">Número:</label>
        <input type="text" name="txtNumero" value="<?=$empleado['Numero']?>">
        <br> 
        <label for="txtFecha">Fecha:</label>
        <input type="text" name="txtFecha" value="<?=$empleado['Fecha']?>">
        <br>
        <label for="txtTexto">Texto:</label>
        <input type="text" name="txtTexto" value="<?=$empleado['Texto']?>">
        <br>
        
        <input type="submit" name="btnGuardar" value="Guardar registros">

    </form>
</body>
</html>