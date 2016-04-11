<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoAlergia
 * @package App\Models
 * @author GrupoBECM
 * @copyright 2016
 * @version 1.0.0
 */
class TipoAlergia extends Model
{
    protected $table = 'tipo_alergia';// table name
    protected $guarded = ['']; //black list

    /**
     * Relationship: Tipo_alergia *- Alergia | Many to One
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alergia() {
        return $this->hasMany('App\Models\Alergia');
    }

}
