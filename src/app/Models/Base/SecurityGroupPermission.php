<?php

# App/Http/Models/SecurityGroupPermission.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class SecurityGroupPermission extends Model  
{
    protected $table = "security_group_permission";

    protected $primaryKey = 'group_id';

	protected $fillable = array('group_id',
								'permission_id',
								'created_at',
								'updated_at'
								);
}
