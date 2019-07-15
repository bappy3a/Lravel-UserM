<?php

namespace App;
use App\Presenters\UserPresenter;
use App\Support\Authorization\AuthorizationUserTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Authenticatable
{
	 use AuthorizationUserTrait;
use Notifiable;
	 protected $presenter = UserPresenter::class;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $dates = ['last_login', 'birthday'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','last_name', 'email', 'password', 'username','phone',
        'address', 'country', 'date_of_birth','gender', 'last_login', 'confirmation_token', 'status',
        'role','google','facebook','twitter','linkedin','skype','dribbble','remember_token'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Always encrypt password when it is updated.
     *
     * @param $value
     * @return string
     */
   

    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday'] = trim($value) ?: null;
    }

 

    public function isUnconfirmed()
    {
        return $this->status == UserStatus::UNCONFIRMED;
    }

    public function isActive()
    {
        return $this->status == UserStatus::ACTIVE;
    }

    public function isBanned()
    {
        return $this->status == UserStatus::BANNED;
    }

  
	
	 
}
