<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrador
 * @package App\Models
 * @author GrupoBECM
 * @copyright 2016
 * @version 1.0.0.
 */
class Administrador extends Model
{
    protected $table = 'administrador'; //Table name
  //  protected $guarded = ['id']; //Black list

    /**
     * Relationship: Administrador -- Usuario | One to One
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario','id');
    }

}
