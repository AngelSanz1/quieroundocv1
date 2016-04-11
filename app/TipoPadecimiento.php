<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPadecimiento extends Model
{
    protected $table = 'tipo_padecimiento';
    protected $guarded = [''];

    /**
     * Relationship: TipoPadecimiento *- Padecimiento | Many to One
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function padecimiento() {
        return $this->hasMany('App\Models\Padecimiento');
    }
}
