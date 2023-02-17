<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Combustible
 *
 * @property $idCombustibles
 * @property $nombreCombustibles
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Combustible extends Model
{
  protected $primaryKey = 'idCombustibles';
    static $rules = [
		'nombreCombustibles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCombustibles','nombreCombustibles'];



}
