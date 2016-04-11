<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Padecimiento extends Model
{
    protected $table = 'padecimiento';
    protected $guarded = [''];
    protected $hidden = ['id'];

    /**
     * Relationship: Padecimeinto ** Paciente | Many to many
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function paciente() {
        return $this->belongsToMany('App\Models\Paciente','paciente_padecimiento');
    }

    public function tipopadecimiento() {
        return $this->belongsTo('App\Models\TipoPadecimiento','tipo_padecimiento_id');
    }
}
