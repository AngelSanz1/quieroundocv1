<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alergia
 * @package App\Models
 * @author GrupoBECM
 * @copyright 2016
 * @version 1.0.0
 */
class Alergia extends Model
{
    protected $table = 'alergia'; //table name
    protected $guarded = ['id']; //black list
    protected $hidden = ['id'];

    /**
     * Relationship: Alergia -* TipoAlergia | One to Many
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoalergia() {
        return $this->belongsTo('App\Models\TipoAlergia');
    }

    /**
     * Relationship: Alergia ** Paciente | Many to Many
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function paciente() {
        return $this->belongsToMany('App\Models\Paciente','paciente_alergia');
    }

}
