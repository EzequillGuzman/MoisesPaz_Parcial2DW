<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Empleados</title>
</head>
<body style="background-color: salmon;">
    <div class="contenedor">
    <h1 align="center">
        <marquee>EMPLEADOS</marquee>
    </h1>
    <a href="<?=base_url('ver_formulario_nuevo_empleado')?>">
        <span class="material-icons">add</span>Agregar
    </a> 
     
    <?php    
        
    ?> 
    <table> 
        <thead>
            <tr class="encabezado">
                <th>Código</th>
                <th>Nombre</th>
                <th>Número</th>
                <th>Fecha</th>
                <th>Texto</th>
                <th>Procedimiento</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $no_fila=0;
                foreach($misEmpleados as $datos):
                    $no_fila=$no_fila+1; //$no_fila++;
                    if($no_fila%2==0){
                        echo "<tr class='fila_1'>";
                    }else{
                        echo "<tr class='fila_2'>";
                    }
                ?>
            
                <td><?php echo $datos['Codigo']; ?></td>
                <td><?=$datos['Nombre']; ?></td>
                <td><?=$datos['Numero']; ?></td>
                <td><?=$datos['Fecha']; ?></td>
                <td><?=$datos['Texto']; ?></td>
                <td>
                    <a href="<?=base_url('frm_modificar_empleado/'.$datos['Codigo'])?>">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="<?=base_url('eliminar_empleado/'.$datos['Codigo'])?>">
                        <span class="material-icons">delete</span>Eliminar
                    </a> 
                </td>
            </tr>
                <?php
                endforeach;
                
            ?> 
            
        </tbody>
    </table>

    </div>
</body>
</html> 