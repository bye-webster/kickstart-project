<?php

# App/Models/StatusType.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class StatusType extends Model  
{
    protected $table = "status_type";

	protected $fillable = array('status_type_id',
								'parent_type_id',
								'has_table',
								'description',
								'created_at',
								'updated_at'
								);

	public function status_type()
	{
		return $this->hasMany('App\Models\Base\StatusType', 'type_id');
	}
}
