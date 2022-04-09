<?php 
namespace App\Controllers;
use App\Models\Empleado;
use CodeIgniter\Controller;
 
class Empleados extends Controller{
 
    public function cargarEmpleados(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $empleado = new Empleado();
        //recibir el resultado del select en un array
        $datos['misEmpleados']=$empleado->orderBy('Codigo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('empleados/listado_empleados', $datos); 
    }

    public function eliminarEmpleado($codigo=null){
        
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $empleado = new Empleado();
        $empleado->delete($codigo);
       
        $datos['misEmpleados']=$empleado->orderBy('Codigo','ASC')->findAll();

        //enviando a la vista los datos de la busqueda
        return view('empleados/listado_empleados', $datos);
        
    } 

    public function verFormularioNuevoEmpleado(){
        return view('empleados/form_nuevo_empleado'); 
    }

    public function guardarEmpleados(){
        //instanciar la clase Vehiculo (modelo = conexion con la tabla)
        $empleado = new Empleado(); 


        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtNumero = $this->request->getVar('txtNumero');
        $txtFecha = $this->request->getVar('txtFecha');
        $txtTexto = $this->request->getVar('txtTexto');

         
        //trasladar esos valores a la base de datos
        $datos=[
            'Codigo'=>$txtCodigo,
            'Nombre'=>$txtNombre,
            'Numero'=>$txtNumero,
            'Fecha'=>$txtFecha,
            'Texto'=>$txtTexto
        ];
        $empleado->insert($datos);

        //cargar la lista
        $datos['misEmpleados']=$empleado->orderBy('Codigo','ASC')->findAll();

        
        //enviando a la vista los datos de la busqueda
        return view('empleados/listado_empleados', $datos); 
    }

    public function frmModificarEmpleado($codigo=null){
    
        $empleado = new Empleado();
        $datos['empleado']=$empleado->where('Codigo',$codigo)->first();
        return view('empleados/form_modificar_empleado',$datos);
    }
    public function modificarEmpleados(){ 

        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $empleado = new Empleado();

        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtNumero = $this->request->getVar('txtNumero');
        $txtFecha = $this->request->getVar('txtFecha');
        $txtTexto = $this->request->getVar('txtTexto');


        //trasladar esos valores a la base de datos
        $datos=[
            'Codigo'=>$txtCodigo,
            'Nombre'=>$txtNombre,
            'Numero'=>$txtNumero,
            'Fecha'=>$txtFecha,
            'Texto'=>$txtTexto
        ];
        $empleado->update($txtCodigo,$datos);


        //cargar la lista
        $datos['misEmpleados']=$empleado->orderBy('Codigo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('empleados/listado_empleados', $datos);
    }

} 