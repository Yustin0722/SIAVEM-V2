<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Correctivo
 *
 * @property $idCorrectivo
 * @property $unidad_id
 * @property $taller_id
 * @property $FechaSalida
 * @property $FechaReingreso
 * @property $Horimetro
 * @property $Detalle
 * @property $Monto
 * @property $created_at
 * @property $updated_at
 *
 * @property Tallere $tallere
 * @property Unidade $unidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Correctivo extends Model
{
    protected $primaryKey = 	'idCorrectivo';
    static $rules = [
	
		'unidad_id' => 'required',
		'taller_id' => 'required',
		'FechaSalida' => 'required',
		'FechaReingreso' => 'required',
		'Horimetro' => 'required',
		'Detalle' => 'required',
		'Monto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCorrectivo','unidad_id','taller_id','FechaSalida','FechaReingreso','Horimetro','Detalle','Monto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tallere()
    {
        return $this->hasOne('App\Models\Tallere', 'idTaller', 'taller_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidade()
    {
        return $this->hasOne('App\Models\Unidade', 'idUnidad', 'unidad_id');
    }
    

}
