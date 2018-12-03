<?php

# App/Models/MyStatus.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class MyStatus extends Model  
{
    protected $table = "my_status";

    protected $primaryKey = 'status_id';

	protected $fillable = array('status_id',
								'status_type_id',
								'status_code', 
								'sequence_id',
								'description',
								'created_at',
								'updated_at'
								);

	public function maya_page()
	{
		return $this->belongsTo('App\Models\Base\MayaPage', 'status_id');
	}
}
