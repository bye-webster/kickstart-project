<?php

namespace App\Models\Base;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, SoftDeletes, HasApiTokens;

    const ADMIN_ROLE = 'ADMIN_USER';
    const BASIC_ROLE = 'BASIC_USER';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid',
        'cpf',
        'name',
        'email',
        'password',
        'address',
        'zipcode',
        'city',
        'state',
        'country',
        'phone',
        'mobile',
        'birth',
        'gender',
        'avatar',
        'role',
        'remember_token',
        'status',

        'api_token',
        'password_hint',
        'is_system',
        'enable',
        'authentication_ip_address',
        'has_logged_out',
        'require_password_change',
        'successive_failed_logins',
        'description',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function party_users()
    {
        return $this->hasMany('App\Models\Base\PartyUsers', 'email');
    }

    public function users_security_group()
    {
        return $this->hasMany('App\Models\Base\UsersSecurityGroup', 'email');
    }

    public function users_history()
    {
        return $this->hasMany('App\Models\Base\UsersHistory', 'email');
    }

    public function person()
    {
        return $this->hasMany('App\Models\Base\Person', 'user_login_id');
    }
}
