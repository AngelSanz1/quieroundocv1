<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class DocumentType extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'document_type';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name'];

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

    public function document(){
        return $this->hasMany('App\Document', 'id');
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
