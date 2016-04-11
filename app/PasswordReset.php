<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PasswordReset
 * @package App\Models
 * @author GrupoBECM
 * @copyright 2016
 * @version 1.0.0
 */
class PasswordReset extends Model
{
    protected $table = 'password_reset';//Table name
    protected $guarded = [''];//Black list

    /**
     * Relationship: Password_reset *- Usuario | Many to One
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario');
    }
}
