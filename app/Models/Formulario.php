<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formulario
 *
 * @property $idFormularios
 * @property $categoria_id
 * @property $depar_id
 * @property $emple_id
 * @property $Objetivo
 * @property $NumePersonas
 * @property $FechaSalida
 * @property $FechaRegreso
 * @property $HoraS
 * @property $HoraR
 * @property $Lugar
 * @property $Itinerario
 * @property $Observaciones
 * @property $chofer
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Departamento $departamento
 * @property Empleado $empleado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Formulario extends Model
{
    protected $primaryKey = 'idFormularios';

    static $rules = [
	
		'categoria_id' => 'required',
		'depar_id' => 'required',
		'emple_id' => 'required',
		'Objetivo' => 'required',
		'NumePersonas' => 'required',
		'FechaSalida' => 'required',
		'FechaRegreso' => 'required',
		'HoraS' => 'required',
		'HoraR' => 'required',
		'Lugar' => 'required',
		'Itinerario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idFormularios','categoria_id','depar_id','emple_id','Objetivo','NumePersonas','FechaSalida','FechaRegreso','HoraS','HoraR','Lugar','Itinerario','Observaciones','chofer', 'estado', 'placa', 'token'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'idDepartamento', 'depar_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'idEmpleados', 'emple_id');
    }
    

}
