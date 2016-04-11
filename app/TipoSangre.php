<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoSangre
 * @package App\Models
 * @author GrupoBECM
 * @copyright 2016
 * @version 1.0.0.
 */
class TipoSangre extends Model
{
    protected $table = 'tipo_sangre'; //Table name
    protected $guarded = ['id']; //Black list
    protected $hidden = ['id'];

    /**
     * Relationship: Tipo_sangre -* Paciente | One to Many
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente() {
        return $this->hasMany('App\Models\Paciente');
    }
}
