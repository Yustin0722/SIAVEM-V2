<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chequeo
 *
 * @property $idchequeos
 * @property $unidad_id
 * @property $FechaChequeo
 * @property $Kilometraje
 * @property $Combustible
 * @property $LuzBaja
 * @property $LuzAlta
 * @property $LuzMarcha
 * @property $LuzInterior
 * @property $LuzFreno
 * @property $Intermitentes
 * @property $LuzParking
 * @property $Alojenos
 * @property $Escobillas
 * @property $Extintor
 * @property $Botiquin
 * @property $Triangulos
 * @property $Cinturon
 * @property $ChapaPuerta
 * @property $Pito
 * @property $Parabrisas
 * @property $VidriosLaterales
 * @property $Climatizacion
 * @property $Bateria
 * @property $NivelRefrigeracion
 * @property $NivelAceite
 * @property $Alfombras
 * @property $Radio
 * @property $AsientosD
 * @property $AsientosT
 * @property $PermisosCirculacion
 * @property $RTV
 * @property $TituloPropiedad
 * @property $LlantaDelantera
 * @property $LlantaRepuesto
 * @property $LlantaTrasera
 * @property $Tuercas
 * @property $EspejoRetrovisor
 * @property $Gata
 * @property $LlaveRana
 * @property $Lingas
 * @property $JuegoLlaves
 * @property $Bumper
 * @property $created_at
 * @property $updated_at
 *
 * @property Unidade $unidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chequeo extends Model
{
	protected $primaryKey ='idchequeos';
    static $rules = [
	
		'unidad_id' => 'required',
		'FechaChequeo' => 'required',
		'Kilometraje' => 'required',
		'Combustible' => 'required',
		'LuzBaja' => 'required',
		'LuzAlta' => 'required',
		'LuzMarcha' => 'required',
		'LuzInterior' => 'required',
		'LuzFreno' => 'required',
		'Intermitentes' => 'required',
		'LuzParking' => 'required',
		'Alojenos' => 'required',
		'Escobillas' => 'required',
		'Extintor' => 'required',
		'Botiquin' => 'required',
		'Triangulos' => 'required',
		'Cinturon' => 'required',
		'ChapaPuerta' => 'required',
		'Pito' => 'required',
		'Parabrisas' => 'required',
		'VidriosLaterales' => 'required',
		'Climatizacion' => 'required',
		'Bateria' => 'required',
		'NivelRefrigeracion' => 'required',
		'NivelAceite' => 'required',
		'Alfombras' => 'required',
		'Radio' => 'required',
		'AsientosD' => 'required',
		'AsientosT' => 'required',
		'PermisosCirculacion' => 'required',
		'RTV' => 'required',
		'TituloPropiedad' => 'required',
		'LlantaDelantera' => 'required',
		'LlantaRepuesto' => 'required',
		'LlantaTrasera' => 'required',
		'Tuercas' => 'required',
		'EspejoRetrovisor' => 'required',
		'Gata' => 'required',
		'LlaveRana' => 'required',
		'Lingas' => 'required',
		'JuegoLlaves' => 'required',
		'Bumper' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idchequeos','unidad_id','FechaChequeo','Kilometraje','Combustible','LuzBaja','LuzAlta','LuzMarcha','LuzInterior','LuzFreno','Intermitentes','LuzParking','Alojenos','Escobillas','Extintor','Botiquin','Triangulos','Cinturon','ChapaPuerta','Pito','Parabrisas','VidriosLaterales','Climatizacion','Bateria','NivelRefrigeracion','NivelAceite','Alfombras','Radio','AsientosD','AsientosT','PermisosCirculacion','RTV','TituloPropiedad','LlantaDelantera','LlantaRepuesto','LlantaTrasera','Tuercas','EspejoRetrovisor','Gata','LlaveRana','Lingas','JuegoLlaves','Bumper'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidade()
    {
        return $this->hasOne('App\Models\Unidade', 'idUnidad', 'unidad_id');
    }
    

}
