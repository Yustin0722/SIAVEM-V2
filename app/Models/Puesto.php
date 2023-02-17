<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Puesto
 *
 * @property $idPuesto
 *  @property $id_Departamento
 * @property $nombrePuesto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Puesto extends Model
{
  protected $primaryKey = 'idPuesto';    
    static $rules = [
    'id_Departamento'=> 'required',     
		'nombrePuesto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPuesto','id_Departamento','nombrePuesto'];

    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'idDepartamento', 'id_Departamento');
    }

}
