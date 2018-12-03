<?php

# App/Models/MyType.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class MyType extends Model  
{
    protected $table = "my_type";

    protected $primaryKey = 'type_id';

	protected $fillable = array('type_id',
								'type_name',
								'table_id',
								'sequence_id',
								'description',
								'created_at',
								'updated_at'
								);
        
	public function my_table()
	{
		return $this->belongsTo('App\Models\Base\MyTable', 'type_id');
	}
}
