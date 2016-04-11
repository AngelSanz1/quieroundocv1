<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 * @package App\Models
 * @author GrupoBECM
 * @copyright 2016
 * @version 1.0.0.
 */
class Paciente extends Model
{
    protected $table = 'patient';//Table name
    protected $guarded = ['']; //Black list

    /**
     * Relationship: Paciente -- Usuario | One to One
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario','id');
    }

    /**
     * Relationship: Paciente *- Tipo_sangre | Many to One
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo_sangre() {
        return $this->belongsTo('App\Models\TipoSangre','id');
    }

    /**
     * Relationship: Paciente -* Consulta | One to Many
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consulta() {
        return $this->hasMany('App\Models\Consulta');
    }

    /**
     * Relationship: Paciente ** Alergia | Many to Many
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function alergia(){
        return $this->belongsToMany('App\Models\Alergia','paciente_alergia');
    }

    /**
     * Relationship: Paciente ** Padecimiento | Many to Many
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function padecimiento() {
        return $this->belongsToMany('App\Models\Padecimiento');
    }
}
