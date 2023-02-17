<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $idEmpleados
 * @property $departamento_id
 * @property $Puesto
 * @property $NombreEmple
 * @property $Apellido1
 * @property $Apellido2
 * @property $FechaNacimiento
 * @property $Cedula
 * @property $Telefono
 * @property $CorreoInstitucional
 * @property $TL_id
 * @property $FechaVencimiento
 * @property $FotoLicencia
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Tlicencia $tlicencia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    protected $primaryKey = 'idEmpleados';
    static $rules = [
	
		'departamento_id' => 'required',
		'Puesto' => 'required',
		'NombreEmple' => 'required',
		'Apellido1' => 'required',
		'Apellido2' => 'required',
		'FechaNacimiento' => 'required',
		'Cedula' => 'required',
		'Telefono' => 'required',
		'CorreoInstitucional' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpleados','departamento_id','Puesto','NombreEmple','Apellido1','Apellido2','FechaNacimiento','Cedula','Telefono','CorreoInstitucional','TL_id','FechaVencimiento','FotoLicencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'idDepartamento', 'departamento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tlicencia()
    {
        return $this->hasOne('App\Models\Tlicencia', 'idTL', 'TL_id');
    }
    

}
