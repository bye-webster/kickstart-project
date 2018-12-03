<?php

# App/Models/UsersLoginHistoryy.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class UsersHistory extends Model
{

    protected $table = "users_history";

    protected $primaryKey = 'email';

	protected $fillable = array('email',
								'from_date',
								'thru_date',
								'password_hint',
								'password_used',
								'authentication_ip_address',
								'successfull_login',
								'description',
								'created_at',
								'updated_at'
                                );

}
