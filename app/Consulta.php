<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 * @package App\Models
 * @author GrupoBECM
 * @copyright 2016
 * @version 1.0.0.
 */
class Consulta extends Model
{
    protected $table = 'consulta'; //Table name
    protected $guarded = ['id']; //Balck list

    /**
     * Relationship: Consulta *- Paciente | Many to One
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paciente() {
        return $this->belongsTo('App\Models\Paciente');
    }
    public function medico() {
        return $this->belongsTo('App\Models\Medico');
    }
}
