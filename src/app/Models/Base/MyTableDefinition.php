<?php

# App/Models/MyTableDefinition.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class MyTableDefinition extends Model  
{
    protected $table = "my_table_definition";

    protected $primaryKey = 'table_definition_id';

	protected $fillable = array('table_definition_id',
								'description',
								'created_at',
								'updated_at'
								);

	public function my_table()
	{
		return $this->hasMany('App\Models\Base\MyTable', 'table_definition_id');
	}
}
