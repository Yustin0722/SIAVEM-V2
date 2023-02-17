<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preventivo
 *
 * @property $idPreventivo
 * @property $unidad_id
 * @property $taller_id
 * @property $FechaMant
 * @property $tipoMante
 * @property $Horimetro
 * @property $ProximoSer
 * @property $Monto
 * @property $created_at
 * @property $updated_at
 *
 * @property Tallere $tallere
 * @property Unidade $unidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Preventivo extends Model
{
    protected $primaryKey =  'idPreventivo' ;

    static $rules = [
		
		'unidad_id' => 'required',
		'taller_id' => 'required',
		'FechaMant' => 'required',
		'tipoMante' => 'required',
		'Horimetro' => 'required',
		'ProximoSer' => 'required',
		'Monto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPreventivo','unidad_id','taller_id','FechaMant','tipoMante','Horimetro','ProximoSer','Monto'];


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
