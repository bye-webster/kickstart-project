<?php

# App/Models/SecurityGroup.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class SecurityGroup extends Model  
{
    protected $table = "security_group";

    protected $primaryKey = 'group_id';

	protected $fillable = array('group_id',
								'description',
								'created_at',
								'updated_at'
								);
}
