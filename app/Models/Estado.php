<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 *
 * @property $idEstados
 * @property $nombreEstados
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estado extends Model
{
  protected $primaryKey = 'idEstados';
    
    static $rules = [

		'nombreEstados' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEstados','nombreEstados'];



}
