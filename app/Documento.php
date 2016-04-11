<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Documento extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'document';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['document_url', 'observation', 'doctor_id','document_type_id', 'document_status_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

    public function isAdmin()
    {
        return $this->tipo==='admin';
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor', 'id');
    }

    public function document_type(){
        return $this->belongsTo('App\DocumentType', 'id');
    }
    public function document_status(){
        return $this->belongsTo('App\DocumentStatus', 'id');
    }


    public function getFullNameAttribute()
    {
        //return $this->
    }
    public function setPasswordAttribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['password'] = bcrypt($value);
        }
    }

}
