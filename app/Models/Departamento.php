<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 *
 * @property $idDepartamento
 * @property $nombreDepa
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departamento extends Model
{
    
  protected $primaryKey = 'idDepartamento';
    static $rules = [
		
		'nombreDepa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreDepa'];

    public function puestos()
    {
        return $this->hasMany('App\Models\Puesto', 'id_Departamento', 'idDepartamento');
    }

}
