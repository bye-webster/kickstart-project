<?php

# App/Models/UsersSecurityGroup.phpp

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class UsersSecurityGroup extends Model
{

    protected $table = "users_security_group";

    protected $primaryKey = 'email';

	protected $fillable = array('email',
								'group_id',
								'from_date',
								'thru_date',
								'description',
								'created_at',
								'updated_at'
                                );

}
