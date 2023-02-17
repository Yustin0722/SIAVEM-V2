<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unidade
 *
 * @property $idUnidad
 * @property $categoria_id
 * @property $tracciones_id
 * @property $combustibles_id
 * @property $estados_id
 * @property $placa
 * @property $marca
 * @property $modelo
 * @property $estilo
 * @property $color
 * @property $ayoFabricacion
 * @property $contratacion
 * @property $valorAdqui
 * @property $valorHacienda
 * @property $RVT
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Combustible $combustible
 * @property Estado $estado
 * @property Traccione $traccione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unidade extends Model
{
    protected $primaryKey = 'idUnidad';
    static $rules = [
	
		'categoria_id' => 'required',
		'tracciones_id' => 'required',
		'combustibles_id' => 'required',
		'estados_id' => 'required',
		'placa' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'estilo' => 'required',
		'color' => 'required',
		'ayoFabricacion' => 'required',
		'contratacion' => 'required',
		'valorAdqui' => 'required',
		'valorHacienda' => 'required',
		'RVT' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idUnidad','categoria_id','tracciones_id','combustibles_id','estados_id','placa','marca','modelo','estilo','color','ayoFabricacion','contratacion','valorAdqui','valorHacienda','RVT','descripcion'];


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
    public function combustible()
    {
        return $this->hasOne('App\Models\Combustible', 'idCombustibles', 'combustibles_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'idEstados', 'estados_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function traccione()
    {
        return $this->hasOne('App\Models\Traccione', 'idTraccion', 'tracciones_id');
    }
    

}
