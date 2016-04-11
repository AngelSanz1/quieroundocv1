<?php namespace App;

use App\Models\Administrador;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'last_name', 'email', 'date_birth', 'gender', 'phone','password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = ['password', 'remember_token'];

	public function is($type){
		return $this->type===$type;
	}

	public function isAdmin()
	{
		//$admin=Administrador::find();
		return $this->tipo==='admin';
	}
	public function doctor()
	{
		return $this->hasOne('App\Doctor', 'id');
	}


	public function profile()
	{
		return $this->hasOne('App\Userprofile');
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
	public function setVerificationCodeAttribute($value)
	{
		$this->attributes['verification_code'] = md5(str_random(64) . time()*64);
	}

}
