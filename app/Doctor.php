<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Doctor extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'doctor';
	protected $primaryKey = 'id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 'curp', 'actual_longitude', 'actual_latitude', 'consulation_ratio', 'n_consulation'];

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

	public function user(){
		return $this->belongsTo('App\User', 'id_usuario');
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
