<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * @package App\Models
 * @author GrupoBECM
 * @copyright 2016
 * @version 1.0.0
 */
class Usuario extends Model
{

    protected $table = 'user'; //Table name
    protected $guarded = ['id']; //Black list
    public $timestamps = true; //timestamp enabled for ELOQUENT administration

    /**
     * Relationship: Usuario -- Administrador | One to One
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function administrador() {
        return $this->hasOne('App\Models\Administrador','id');
    }
    /**
     * Relationship: Usuario -- Paciente | One to One
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente() {
        return $this->hasOne('App\Models\Paciente','id');
    }
    /**
     * Relationship: Usuario -- Medico | One to One
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medico() {
        return $this->hasOne('App\Models\Medico');
    }

    /**
     * Relationship: Usuario -* Password_reset | One to Many
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function password_reset() {
        return $this->hasMany('App\Models\PasswordReset');
    }

}
