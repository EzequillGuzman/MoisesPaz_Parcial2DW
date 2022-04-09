<?php 
namespace App\Models;

use CodeIgniter\Model;

class Empleado extends Model{
    protected $table      = 'empleados';
    protected $primaryKey = 'Codigo';
    protected $allowedFields =['Codigo','Nombre','Numero','Fecha','Texto'];
}  