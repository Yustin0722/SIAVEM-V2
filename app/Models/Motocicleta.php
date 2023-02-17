<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Motocicleta
 *
 * @property $idMotocicleta
 * @property $unidad_id
 * @property $FechaChequeoM
 * @property $Kilometraje
 * @property $Combustible
 * @property $LuzBaja
 * @property $LuzAlta
 * @property $LuzMarcha
 * @property $Pito
 * @property $Bateria
 * @property $NivelRefrigeracion
 * @property $NivelAceite
 * @property $Asientos
 * @property $PermisosCirculacion
 * @property $RTV
 * @property $TituloPropiedad
 * @property $LlantaDelantera
 * @property $LlantaTrasera
 * @property $EspejoRetrovisorD
 * @property $EspejoRetrovisori
 * @property $created_at
 * @property $updated_at
 *
 * @property Unidade $unidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Motocicleta extends Model
{
    protected $primaryKey =	'idMotocicleta';
    static $rules = [
	
		'unidad_id' => 'required',
		'FechaChequeoM' => 'required',
		'Kilometraje' => 'required',
		'Combustible' => 'required',
		'LuzBaja' => 'required',
		'LuzAlta' => 'required',
		'LuzMarcha' => 'required',
		'Pito' => 'required',
		'Bateria' => 'required',
		'NivelRefrigeracion' => 'required',
		'NivelAceite' => 'required',
		'Asientos' => 'required',
		'PermisosCirculacion' => 'required',
		'RTV' => 'required',
		'TituloPropiedad' => 'required',
		'LlantaDelantera' => 'required',
		'LlantaTrasera' => 'required',
		'EspejoRetrovisorD' => 'required',
		'EspejoRetrovisori' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idMotocicleta','unidad_id','FechaChequeoM','Kilometraje','Combustible','LuzBaja','LuzAlta','LuzMarcha','Pito','Bateria','NivelRefrigeracion','NivelAceite','Asientos','PermisosCirculacion','RTV','TituloPropiedad','LlantaDelantera','LlantaTrasera','EspejoRetrovisorD','EspejoRetrovisori'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidade()
    {
        return $this->hasOne('App\Models\Unidade', 'idUnidad', 'unidad_id');
    }
    

}
