<?php

# App/Models/MyTable.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class MyTable extends Model  
{
    protected $table = "my_table";

    protected $primaryKey = 'table_id';

	protected $fillable = array('table_id',
								'table_definition_id',
								'table_log_name', 
								'description',
								'created_at',
								'updated_at'
								);

	public function my_table_definition()
	{
		return $this->belongsTo('App\Models\Base\MyTableDefinition', 'table_definition_id');
	}
}
