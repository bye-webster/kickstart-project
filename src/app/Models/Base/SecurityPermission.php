<?php

# App/Http/Models/SecurityPermission.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class SecurityPermission extends Model  
{

    protected $table = "security_permission";

    protected $primaryKey = 'permission_id';

	protected $fillable = array('permission_id',
								'description',
								'created_at',
								'updated_at'
                                );

}
