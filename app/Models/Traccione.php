<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Traccione
 *
 * @property $idTraccion
 * @property $nombreTraccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Traccione extends Model
{
  protected $primaryKey = 'idTraccion';
    static $rules = [
		'nombreTraccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idTraccion','nombreTraccion'];



}
