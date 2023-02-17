<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tallere
 *
 * @property $idTaller
 * @property $Contratacion
 * @property $NombreTaller
 * @property $DireccionTaller
 * @property $DescripcionEsp
 * @property $FechaVenTaller
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tallere extends Model
{
  protected $primaryKey = 'idTaller';
    static $rules = [

		'Contratacion' => 'required',
		'NombreTaller' => 'required',
		'DireccionTaller' => 'required',
		'DescripcionEsp' => 'required',
		'FechaVenTaller' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idTaller','Contratacion','NombreTaller','DireccionTaller','DescripcionEsp','FechaVenTaller'];



}
